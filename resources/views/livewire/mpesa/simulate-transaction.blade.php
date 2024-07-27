<div>
    <div class="col-sm-12 mb-2 mt-2">
        @if (!is_null($alert))
            {{ $alert }}
            <hr />
        @endif
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label for="amount"> Amount</label>
            <input type="number" wire:model="amount" id="amount" class="form-control" placeholder="Amount">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <label for="reference">Account Reference</label>
            <input type="text" wire:model="reference" class="form-control" placeholder="Account Reference">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <label for="account">Mpesa Number to Request Payment</label>
            <input type="number" wire:model="msisdn" id="msisdn" class="form-control" placeholder="MSISDN" @if ($env == 1) required @endif>
        </div>
    </div>
    <div class="col-sm-12  mt-2 mb-2">
        <button class="form-control btn btn-primary" wire:click.prevent="simulate">Simulate Payment</button>
    </div>
</div>
