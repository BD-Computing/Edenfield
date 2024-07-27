<?php

namespace App\Http\Livewire\Mpesa;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Http\Controllers\API\V1\payments\mpesa\MpesaAPIController;

class B2CRequest extends Component
{
    public $amount = 0;
    public $occasion = null;
    public $msisdn = null;
    public $remarks = null;
    public $alert = null;

    public function mount()
    {
        if (env('MPESA_ENV') == 0) {
            $this->amount = 1;
            $this->msisdn = '254725270930';
            $this->occasion = 'MAY 2021 SALARY';
            $this->remarks = 'MAY 2021 SALARY CLEARED TODAY ' . Str::upper(Carbon::now()->toDayDateTimeString());
        }
    }
    public function process()
    {
        $data = $this->validate([
            'amount' => ['required', 'numeric'],
            'msisdn' => ['required', 'numeric'],
            'remarks' => ['required', 'string'],
            'occasion' => ['required', 'string'],
        ]);

        $process = MpesaAPIController::b2cRequest($data);

        $this->alert = $process;
    }
    public function render()
    {
        return view('livewire.mpesa.b2-c-request');
    }
}
