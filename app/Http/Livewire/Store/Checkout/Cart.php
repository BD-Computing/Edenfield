<?php

namespace App\Http\Livewire\Store\Checkout;

use App\Models\Order;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Cart extends Component
{
    public $data = null;
    public $products = [];
    public $quantity = [];
    public $subtotals = [];
    public $subtotal = 0;
    public function mount()
    {
        $this->loadData();
    }
    public function loadData()
    {
        $this->data = Order::getCartContent();
        $this->products = $this->data['items'];
        if (count($this->products) > 0) {
            foreach ($this->products as $product) {
                $this->quantity[$product['id']] = $product['quantity'];
            }
        }
        $this->getSubTotals();
        $this->emit('updateCart');
    }
    public function increment($product)
    {
        $count = (int)  ++$this->quantity[$product];
        $this->quantity[$product] = $count;
        $this->updateCart($product, $count);
        $this->getSubTotals();
    }
    public function decrement($product)
    {
        if ($this->quantity[$product] > 1) {
            $count = (int)  --$this->quantity[$product];
            if ($count >= 2) {
                $this->quantity[$product] = $count;
            }
            $this->updateCart($product, $count);
            $this->getSubTotals();
        }
    }
    public function updateCart($product, $count)
    {
        Order::updateCart($product, $count);
        $this->loadData();
        $this->emit('updateCart');
    }
    public function getSubTotals()
    {
        $this->products = $this->data['items'];
        if (count($this->products) > 0) {
            foreach ($this->products as $product) {
                $this->subtotals[$product['id']] = $this->quantity[$product['id']] * $product['price'];
            }
        }
        // Get Totals
        $this->subtotal =  array_sum(array_values($this->subtotals));
        $this->emit('updateCart');
    }

    public function removeFromCart($productId)
    {
        Order::removeRoomFromCart($productId);
        // Refresh the data in the table
        $this->loadData();
        // Emit the update cart event to other livewire components
        $this->emit('updateCart');
    }
    public function render()
    {
        return view('livewire.store.checkout.cart');
    }
}
