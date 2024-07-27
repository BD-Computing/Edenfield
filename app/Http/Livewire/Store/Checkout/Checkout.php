<?php

namespace App\Http\Livewire\Store\Checkout;

use App\Models\BillingAddress;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Checkout extends Component
{
    public $order = null;
    public $firstName = null;
    public $lastName = null;
    public $businessName = null;
    public $streetAddress = null;
    public $city = null;
    public $phoneNumber = null;
    public $email = null;
    public $comment = null;

    public $addresses = null;
    public $currentAddress = null;
    public $addNewAddress = false;
    public $orderId = null;
    public  $key = null;
    public function mount()
    {
        $this->order = Order::getCartContent();
        $this->key = array_keys($this->order['items'])[0];
        $this->getAddresses();
    }
    public function render()
    {
        return view('livewire.store.checkout.checkout');
    }
    public function postAddress()
    {
        $address = $this->validate([
            'firstName' => ['required', 'string'],
            'lastName' => ['required', 'string'],
            'businessName' => ['nullable', 'string'],
            'streetAddress' => ['required', 'string'],
            'city' => ['required', 'string'],
            'phoneNumber' => ['required', 'string'],
            'comment' => ['nullable', 'string'],
            'email' => ['required', 'string'],
        ]);
        $address['userId'] = auth()->user()->id;
        $address['createdBy'] = auth()->user()->id;
        $newAddress = BillingAddress::create($address);
        // Set the address as current
        $this->currentAddress = $newAddress->id;
        $this->getAddresses();
    }

    public function getAddresses()
    {
        $this->addresses = BillingAddress::getUserAddress(auth()->user()->id);
        if (count($this->addresses) === 0) {
            $this->addNewAddress = true;
        }
        if (count($this->addresses) === 1) {
            $this->currentAddress = $this->addresses[0]->id;
        }
    }
    public function selectAddress($address)
    {
        $this->currentAddress = $address;
    }
    public function addNewAddress()
    {
        $this->addNewAddress = true;
    }
    public function completeOrder()
    {
        $attributes = $this->order['items'][$this->key]['attributes'];
        // Prepare Order
        $order['subTotal'] = $this->order['subTotal'];
        $order['billingAddress'] = $this->currentAddress;
        $order['totalAmount'] = $this->order['total'];
        $order['pendingAmount'] = $this->order['total'];

        // Place Order
        $newOrder = Order::createOrder($order);
        $this->orderId = $newOrder->id;
        // Create Order Items
        $items = $this->order['items'];
        OrderDetail::createOrderItems($this->orderId, $items, $attributes);
        // Clear Cart
        Order::clearCart();
        // Redirect to Payments
        redirect()->route('client.payment', ['id' => $this->orderId]);
    }
}
