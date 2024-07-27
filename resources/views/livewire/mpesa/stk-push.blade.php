<div>
    <div class="col-sm-12">
        <label for="Amount">Amount</label>
        <input type="number" wire:model="amount" class="form-control" placeholder="Amount to Pay">
    </div>
    <div class="col-sm-12">
        <label for="msisdn">Phone Number</label>
        <input type="text" wire:model="msisdn" placeholder="Phone Number to Request the Amount" class="form-control">
    </div>
    <div class="col-sm-12 mt-2 mb-2">
        <button class="form-control btn btn-success" wire:click.prevent="process()">
            Pay Using STK Push
        </button>
    </div>
</div>
