<?php

namespace App\Http\Livewire\Rooms;

use Livewire\Component;
use App\Models\RoomType;
use Illuminate\Support\Facades\Log;

class Rooms extends Component
{
    public $roomTypeId = null;
    public function mount()
    {
    }
    public function pickRoomType($roomTypeId)
    {
        $this->roomTypeId = $roomTypeId;
        $this->emit('roomTypeChanged', $roomTypeId);
    }
    public function render()
    {
        $roomTypes = RoomType::getRoomTypes();
        return view('livewire.rooms.rooms', compact('roomTypes'));
    }
}
