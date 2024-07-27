<?php

namespace App\Http\Livewire\Mpesa;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\API\V1\payments\mpesa\MpesaAPIController;

class SimulateTransaction extends Component
{
    public $amount = null;
    public $reference = null;
    public $msisdn = null;
    public $fromRequest = 0;
    public $alert = null;
    public $env = null;

    public function render()
    {
        return view('livewire.mpesa.simulate-transaction');
    }

    public function mount()
    {
        $this->env = env('MPESA_ENV');
    }
    public function simulate()
    {
        $data = $this->validate([
            'amount' => ['nullable', 'numeric'],
            'reference' => ['nullable', 'string'],
            'msisdn' => ['required', 'numeric']
        ]);

        $this->alert = "Initiated a request for " . $this->msisdn;

        if (env('MPESA_ENV') === 0) {
            // Log the Response
            Log::info($this->alert);
        }

        // Initiate the simulation
        $response = MpesaAPIController::simulateTransaction($data);
        // $this->fromRequest = 1;
        // $this->resetFields();

        return $response;
    }

    public function resetFields()
    {
        $this->amount = null;
        $this->reference = null;
        $this->msisdn = null;
    }
}
