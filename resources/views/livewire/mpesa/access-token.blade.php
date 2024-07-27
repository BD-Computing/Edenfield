<div>
    <div class="col-sm-12 mt-2 mb-2">
        @if (!is_null($token))
            <span style="font-style: bold">ACCESS TOKEN: </span> {{ $token }}
        @endif
        {{-- <input type="text" wire:model="token" class="form-control" readonly> --}}
    </div>
    <div class="col-sm-12 mt-2 mb-2">
        <button class="btn btn-secondary form-control" wire:click.prevent="generate">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/M-PESA_LOGO-01.svg/1200px-M-PESA_LOGO-01.svg.png"
                alt="" height="25px">
            <span style="text-transform: uppercase">Generate Token</span>
        </button>
    </div>
</div>
