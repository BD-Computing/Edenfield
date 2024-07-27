<?php

namespace App\Http\Livewire\Mpesa;

use Livewire\Component;
use App\Models\MpesaTransaction;
use Illuminate\Support\Facades\DB;

class Validate extends Component
{
    public $transaction = null;
    public $code = null;

    public function mount($code = null)
    {
        $this->code = $code;
        if(!is_null($this->code)){
            $this->fetchTransaction();
        }
        else{
            $this->transaction = null;
        }
    }
    public function fetchTransaction()
    {
        if(!is_null($this->code)){
            // $this->transaction = MpesaTransaction::where('TransID', 'LIKE', $this->code)->get()->first();
            $this->transaction = DB::select("SELECT * FROM mpesa_transactions WHERE MSISDN LIKE $this->code ORDER BY created_at DESC LIMIT 3");
        }
        else{
            $this->transaction = null;
        }
    }
    public function render()
    {
        return view('livewire.mpesa.validate');
    }
    public function process()
    {
        $this->fetchTransaction();
    }
}
