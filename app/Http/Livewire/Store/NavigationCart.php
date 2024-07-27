<?php

namespace App\Http\Livewire\Store;

use App\Models\Order;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class NavigationCart extends Component
{
    protected $listeners = ['updateCart' => 'getCartContents'];

    public $items = null;
    public $count = 0;

    public function mount()
    {
        $this->getCartContents();
    }
    public function getCartContents()
    {
        $this->items = Order::getCartContent();
        if ($this->items && $this->items['count']) {
            $this->count = $this->items['count'];
        }
    }
    public function render()
    {
        return view('livewire.store.navigation-cart');
    }
}
