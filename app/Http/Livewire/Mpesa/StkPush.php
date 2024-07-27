<?php

namespace App\Http\Livewire\Mpesa;

use App\Http\Controllers\API\V1\payments\mpesa\MpesaAPIController;
use Livewire\Component;

class StkPush extends Component
{
    public $amount = 0;
    public $msisdn = null;
    public $reference = null;

    public function mount()
    {
        if (env('MPESA_ENV') == 0) {
            $this->amount = 1;
            $this->msisdn = '254725270930';
            $this->reference = '45656676';
        }
    }
    public function process()
    {
        $response = MpesaAPIController::customerMpesaSTKPush([
            'amount' => $this->amount,
            'reference' => $this->reference,
            'msisdn' => $this->msisdn,
        ]);
        return $response;
    }
    public function render()
    {
        return view('livewire.mpesa.stk-push');
    }
}
