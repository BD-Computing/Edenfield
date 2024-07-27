<?php

namespace App\Http\Livewire\Store\Checkout;

use App\Http\Controllers\API\V1\payments\mpesa\MpesaAPIController;
use App\Models\Order;
use Livewire\Component;

class Pay extends Component
{
    public $orderId = null;
    public $order = null;
    public $msisdn = null;
    public $amount = null;
    public $reference = null;
    public $alert = null;

    public function mount($orderId)
    {
        $this->orderId = $orderId;
        $this->loadData();
    }
    public function loadData()
    {
        if ($this->orderId) {
            $this->order = Order::getOrder($this->orderId)['order'];
            if ($this->order) {
                $this->amount = $this->order->totalAmount;
                $this->reference = 'ORDER#' . $this->orderId;
            }
        }
    }

    public function initiatePayment()
    {
        if (!str_starts_with($this->msisdn, '254')) {
            if (str_starts_with($this->msisdn, '0')) {
                // Remove zero and replace with 254
                $phone =  '254' . substr($this->msisdn, 1);
            } elseif (str_starts_with($this->msisdn, '7')) {
                $phone =  '254' . $this->msisdn;
            }
        }
        $data = [
            'amount' => $this->amount,
            'reference' => $this->reference,
            'msisdn' => $phone,
        ];

        if (!is_null($data['reference']) && !is_null($data['msisdn']) && !is_null($data['msisdn'])) {
            $this->alert = "Mpesa Payment Initiated on +" . $data['msisdn'] . '. Check your phone to complete the order placement';
            // Initiate the simulation
            $response = MpesaAPIController::customerMpesaSTKPush($data);
            // $this->fromRequest = 1;
            // $this->resetFields();
            return $response;
        }
    }
    public function render()
    {
        return view('livewire.store.checkout.pay');
    }
}
