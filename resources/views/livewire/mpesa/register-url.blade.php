<div>
    @if (!is_null($message))
    <div class="col-sm-12 mb-2 mt-2">
            <span style="color: green">{{ $message }}</span><br>
            <span>{{ $tunnel }}</span>
    </div>
    @endif
    <div class="col-sm-12 mt-2 mb-2">
        <button class="form-control btn btn-primary" wire:click.prevent="register">Register URLS</button>
    </div>
</div>
