<?php

namespace App\Http\Controllers\API\V1\payments\mpesa;

use Mpesa;
use App\Jobs\MpesaSTK;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class MpesaAPIController extends Controller
{

    public static function getAccessToken()
    {
        $url = env('MPESA_ENV') == 0
            ? 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials'
            : 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

        $curl = curl_init($url);
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_HTTPHEADER => ['Content-Type: application/json; charset=utf8 '],
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HEADER => false,
                CURLOPT_USERPWD => env('MPESA_CONSUMER_KEY') . ':' . env('MPESA_CONSUMER_SECRET'),
            ),
        );

        $response = json_decode(curl_exec($curl), true);
        curl_close($curl);
        return $response['access_token'];
    }

    /**
     * Register URLS
     */
    public static function registerURLS()
    {
        $body = array(
            'ShortCode' => env('MPESA_SHORTCODE'),
            'ResponseType' => 'Completed',
            'ConfirmationURL' => env('MPESA_CALLBACK_URL') . '/api/confirmation',
            'ValidationURL' => env('MPESA_CALLBACK_URL') . '/api/validation'
        );
        $url = '/c2b/v1/registerurl';
        $response = self::makeHttp($url, $body);
        return $response;
    }

    /**
     * Lipa na M-PESA password
     * */
    public static function lipaNaMpesaPassword()
    {
        $lipa_time = Carbon::rawParse('now')->format('YmdHms');
        $passkey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
        $BusinessShortCode = 174379;
        $timestamp = $lipa_time;
        $lipa_na_mpesa_password = base64_encode($BusinessShortCode . $passkey . $timestamp);
        return $lipa_na_mpesa_password;
    }

    /**
     * Lipa na M-PESA STK Push method
     * */
    public static function customerMpesaSTKPush($data)
    {
        $url =  '/stkpush/v1/processrequest';
        $body = [
            //Fill in the request parameters with valid values
            'BusinessShortCode' => env('MPESA_STK_SHORTCODE'),
            'Password' => self::lipaNaMpesaPassword(),
            'Timestamp' => Carbon::rawParse('now')->format('YmdHms'),
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' => floatval($data['amount']),
            'PartyA' => $data['msisdn'],
            'PartyB' => env('MPESA_STK_SHORTCODE'),
            'PhoneNumber' => $data['msisdn'],
            'CallBackURL' => env('MPESA_CALLBACK_URL') . '/api/stkpush',
            'AccountReference' => $data['reference'],
            'TransactionDesc' => $data['reference'],
        ];
        $response = self::makeHttp($url, $body);
        return $response;
    }

    /**
     * Make HTTP
     */
    public static function makeHttp($url, $body)
    {
        $endpoint = env('MPESA_ENV') == 0 ? 'https://sandbox.safaricom.co.ke/mpesa' . $url : 'https://api.safaricom.co.ke/mpesa' . $url;
        // $url = env('MPESA_ENV') == 0 ? 'http://mpesa-reflector.herokuapp.com' . $url : 'http://mpesa-reflector.herokuapp.com' . $url;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $endpoint);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization:Bearer ' . self::getAccessToken()));
        $data_string = json_encode($body);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        $curl_response = curl_exec($curl);
        return $curl_response;
    }

    /**
     *** Simulate a transaction
     */

    public static function simulateTransaction($data)
    {
        // Prepare the payment details
        $env = env('MPESA_DEV');
        $msisdn = $env === 0 ? ((is_null($data['msisdn']) ? env('MPESA_TEST_MSISDN') : $data['msisdn'])) : $data('msisdn');
        $ref = (is_null($data['reference']) ? Str::random(18) : $data['reference']);
        $amount = (is_null($data['amount']) ? 1 : $data['amount']);

        $body = array(
            'ShortCode' => env('MPESA_SHORTCODE'),
            'Msisdn' => $msisdn,
            'Amount' => $amount,
            'BillRefNumber' => $ref,
            'CommandID' => 'CustomerPayBillOnline'
        );

        // URL
        $url =  '/c2b/v1/simulate';
        $response = self::makeHttp($url, $body);
        return $response;
    }


    /**
     * Mpesa B2C Transaction
     **/
    public static function b2cRequest($data)
    {
        $body = array(
            "InitiatorName" => env('MPESA_B2C_INITIATOR'),
            "SecurityCredential" => env('MPESA_B2C_PASSWORD'),
            "CommandID" => "SalaryPayment",
            "Amount" => $data['amount'],
            "PartyA" => env('MPESA_SHORTCODE'),
            "PartyB" => $data['msisdn'],
            "Remarks" => $data['remarks'],
            "QueueTimeOutURL" => env('MPESA_CALLBACK_URL') . "/api/b2ctimeout",
            "ResultURL" => env('MPESA_CALLBACK_URL') . "/api/b2callback",
            "Occassion" => $data['occasion'],
        );

        $url = '/b2c/v1/paymentrequest';

        $response = self::makeHttp($url, $body);

        Log::info($response);
        return $response;
    }

    public function mpesaValidate()
    {
        return view('validate');
    }
}
