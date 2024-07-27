<?php

namespace App\Http\Livewire\Rooms;

use Carbon\Carbon;
use App\Models\Room;
use App\Models\Order;
use Livewire\Component;
use App\Models\RoomType;
use Illuminate\Support\Facades\Log;

class AvailabilityChecker extends Component
{
    public $roomNumber = null;
    public $room = null;
    public $isForm = true;
    public $showRooms = false;
    public $roomTypeName = null;
    public $roomTypeID = null;
    public $count = null;
    public $roomId = null;
    public $rooms = null;
    public $data = null;
    public $days = 0;
    public $exists = false;
    public $quantity = 1;
    public $showAddedMessage = false;
    public $adults = null;
    public $children = null;
    public $checkInDate = null;
    public $checkOutDate = null;
    public $errorMessage = null;
    public $showRoomTypesDropDown = true;

    public function mount($roomTypeID = null)
    {
        $this->roomTypeID = $roomTypeID;
        if (is_null($this->roomTypeID)) {
            $this->showRoomTypesDropDown = true;
        }
    }


    // public function updatedQuantity()
    // {
    //     $this->count = $this->quantity;
    //     $this->syncCart();
    // }
    public function checkIfExists($roomId)
    {
        $this->exists = (bool) Order::roomExists($roomId);
        return $this->exists;
    }

    function updated()
    {
        $this->errorMessage = null;
        $this->rooms = [];
        if (!is_null($this->checkInDate) && !is_null($this->checkOutDate)) {
            $checkIn = Carbon::parse($this->checkInDate);
            $checkOut = Carbon::parse($this->checkOutDate);
            $this->days = $checkIn->diffInDays($checkOut);
        }
        $this->checkAvailability();
    }

    public function selectRoom($roomId)
    {
        $this->roomId = $roomId;
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
        $this->count = Order::roomCartCount($roomId);
        $this->updateCart();
    }

    public function addToCart($roomId)
    {
        Order::addToCart($roomId, $this->days, $this->checkInDate, $this->checkOutDate);
        $this->checkCart($roomId);
        $this->updateCart();
        $this->showAddedMessage = true;
    }

    public function updateCart()
    {
        $this->emit('updateCart');
    }

    public function changeRoomType($roomTypeID)
    {
        $this->roomTypeID = $roomTypeID;
    }

    public function changeRoomNumber($roomNumber)
    {
        $this->roomNumber = $roomNumber;
    }

    public function checkAvailability()
    {
        if ($this->checkInDate && $this->checkOutDate && $this->adults) {
            $this->rooms = Room::getAvailableRoomsByType($this->roomTypeID, $this->checkInDate, $this->checkOutDate);
            $this->showRooms = true;
            Log::info($this->rooms);
            Log::info($this->showRooms);
        } else {
            $this->errorMessage = "Fill in all the required Details to check availability";
        }
    }

    public function render()
    {
        $roomTypes = RoomType::getRoomTypes();
        $exists = function ($roomId) {
            return $this->checkIfExists($roomId);
        };
        $roomType = RoomType::getRoomTypeById($this->roomTypeID);
        $roomDetails = RoomType::getRoomTypeById($this->roomTypeID);
        return view('livewire.rooms.availability-checker', compact('roomTypes', 'roomType'));
    }
}
