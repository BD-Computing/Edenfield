<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MpesaTransaction extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function mpesaConfirmation($data)
    {

        self::create($data);

        // $content = json_decode($data, true);
        // $mpesa_transaction = new MpesaTransaction();
        // $mpesa_transaction->TransactionType = $data['TransactionType'];
        // $mpesa_transaction->TransID = $data['TransID'];
        // $mpesa_transaction->TransTime = $data['TransTime'];
        // $mpesa_transaction->TransAmount = $data['TransAmount'];
        // $mpesa_transaction->BusinessShortCode = $data['BusinessShortCode'];
        // $mpesa_transaction->BillRefNumber = $data['BillRefNumber'];
        // $mpesa_transaction->InvoiceNumber = $data['InvoiceNumber'];
        // $mpesa_transaction->OrgAccountBalance = $data['OrgAccountBalance'];
        // $mpesa_transaction->ThirdPartyTransID = $data['ThirdPartyTransID'];
        // $mpesa_transaction->MSISDN = $data['MSISDN'];
        // $mpesa_transaction->FirstName = $data['FirstName'];
        // $mpesa_transaction->MiddleName = $data['MiddleName'];
        // $mpesa_transaction->LastName = $data['LastName'];
        // $mpesa_transaction->save();
        // Responding to the confirmation request
        // $response = new Response();
        // $response->headers->set("Content-Type","text/xml; charset=utf-8");
        // $response->setContent(json_encode(["C2BPaymentConfirmationResult"=>"Success"]));
        // return $response;
    }
}
