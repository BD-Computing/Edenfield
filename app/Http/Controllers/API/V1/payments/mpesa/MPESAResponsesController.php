<?php

namespace App\Http\Controllers\API\V1\payments\mpesa;

use Illuminate\Http\Request;
use App\Models\MpesaTransaction;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class MPESAResponsesController extends Controller
{
    public function validation(Request $request)
    {
        Log::info('Validation endpoint hit');
        Log::info($request->all());
        return [
            'ResultCode' => 0,
            'ResultDesc' => 'Accept Service',
            'ThirdPartyTransID' => rand(3000, 10000)
        ];
    }

    public function confirmation(Request $request)
    {
        Log::info('Confirmation endpoint hit');
        Log::info($request->all());

        $data = $request->all();
        // Store Data
        MpesaTransaction::mpesaConfirmation($data);
    }
    public function stkpush(Request $request)
    {
        Log::info('STK Push endpoint hit');
        Log::info($request->all());
        $data = $request->all();
        // Store Data
        MpesaTransaction::mpesaConfirmation($data);
    }
    public function b2cCallback(Request $request)
    {
        Log::info('B2C endpoint hit');
        Log::info($request->all());

        $data = $request->all();
        // Store Data
        MpesaTransaction::mpesaConfirmation($data);
    }
    public function b2cTimeout(Request $request)
    {
        Log::info('B2C Timeout endpoint hit');
        Log::info($request->all());
    }
}
