<?php

namespace App\Http\Livewire\Rooms;

use App\Models\Room;
use App\Models\Order;
use Livewire\Component;
use App\Models\RoomType;

class ViewRoom extends Component
{
    public $roomTypeID = null;
    public $room = null;
    public $count = null;
    public $roomId = null;
    public $data = null;
    public $exists = false;
    public $quantity = 1;
    public $showAddedMessage = false;

    public function mount($roomTypeID)
    {
        $this->roomTypeID = $roomTypeID;
        if ($roomTypeID) {
            // $this->room = Room::getProduct($product);
            // $this->checkCart();
        }
    }
    // public function updatedQuantity()
    // {
    //     $this->count = $this->quantity;
    //     $this->syncCart();
    // }
    public function checkIfExists($roomId)
    {
        $this->exists = (bool) Order::productExists($roomId);
        return $this->exists;
    }

    public function selectRoom($roomId)
    {
        $this->emit('roomNumberChanged', $roomId);
    }
    public function syncCart()
    {
        // if ($this->exists) {
        //     $this->addToCart();
        // }
        $this->updateCart();
    }
    public function checkCart($roomId)
    {
        $this->checkIfExists($roomId);
        $this->count = Order::productCartCount($roomId);
        $this->updateCart();
    }
    public function addToCart($roomId)
    {
        Order::addToCart($roomId);
        $this->checkCart($roomId);
        $this->updateCart();
        $this->showAddedMessage = true;
    }
    public function updateCart()
    {
        $this->emit('updateCart');
    }
    public function render()
    {
        $exists = function ($roomId) {
            return $this->checkIfExists($roomId);
        };

        $roomDetails = RoomType::getRoomTypeById($this->roomTypeID);
        $rooms = Room::getRoomsByType($this->roomTypeID);
        return view('livewire.rooms.view-room', compact('roomDetails', 'rooms', 'exists'));
    }
}
