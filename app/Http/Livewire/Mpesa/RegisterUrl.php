<?php

namespace App\Http\Livewire\Mpesa;

use Livewire\Component;
use App\Http\Controllers\API\V1\payments\mpesa\MpesaAPIController;
use Illuminate\Support\Facades\Log;

class RegisterUrl extends Component
{
    public $message = null;
    public $tunnel = null;
    public function render()
    {
        return view('livewire.mpesa.register-url');
    }

    public function register()
    {
        // $response = MpesaAPIController::registerURL();
        $response = MpesaAPIController::registerURLS();
        $message = json_decode($response, true);
        $this->tunnel = env('MPESA_CALLBACK_URL');
        $this->message = $response;
        Log::info($message);
    }
}
