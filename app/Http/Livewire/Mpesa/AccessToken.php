<?php

namespace App\Http\Livewire\Mpesa;

use Livewire\Component;
use App\Http\Controllers\API\V1\payments\mpesa\MpesaAPIController;

class AccessToken extends Component
{
    public $token = null;
    public function render()
    {
        return view('livewire.mpesa.access-token');
    }
    public function generate()
    {
        $token = MpesaAPIController::getAccessToken();
        $this->token = $token;
    }
}
