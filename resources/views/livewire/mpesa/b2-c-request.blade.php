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
            <label for="msisdn">Phone Number</label>
            <input type="text" wire:model="msisdn" class="form-control" placeholder="PAYE Phone Number">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <label for="occasion">Occasion</label>
            <textarea wire:model="occasion" class="form-control" cols="30" rows="3"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <label for="remarks">Remarks</label>
            <textarea wire:model="remarks" class="form-control" cols="30" rows="3"></textarea>
        </div>
    </div>
    <div class="col-sm-12  mt-2 mb-2">
        <button class="form-control btn btn-primary" wire:click.prevent="process">Simulate B2C Request</button>
    </div>
</div>
