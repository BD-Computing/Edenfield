<?php

namespace App\Http\Livewire\Store;

use App\Models\Order;
use App\Models\Product;
use Livewire\Component;

class ProductPage extends Component
{
    public $product = null;
    public $count = null;
    public $productId = null;
    public $data = null;
    public $exists = false;
    public $quantity = 1;
    public $showAddedMessage = false;

    public function mount($product)
    {
        $this->productId = $product;
        if ($product) {
            $this->product = Product::getProduct($product);
            $this->checkCart();
        }
    }

    public function updatedQuantity()
    {
        $this->count = $this->quantity;
        $this->syncCart();
    }
    public function checkIfExists()
    {
        $this->exists = (bool) Order::productExists($this->productId);
    }

    public function syncCart()
    {
        if ($this->exists) {
            $this->addToCart();
        }
        $this->updateCart();
    }
    public function checkCart()
    {
        $this->checkIfExists();
        $this->count = Order::productCartCount($this->productId);
        $this->updateCart();
    }
    public function addToCart()
    {
        Order::addToCart($this->productId, $this->count);
        $this->checkCart();
        $this->updateCart();
        $this->showAddedMessage = true;
    }
    public function updateCart()
    {
        $this->emit('updateCart');
    }
    public function render()
    {
        return view('livewire.store.product-page');
    }
}
