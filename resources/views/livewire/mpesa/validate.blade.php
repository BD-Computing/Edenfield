<div class="container pt-60">
    <h2>Validate MPESA CODE</h2>
    <div class="col-sm-12">
        <label for="code">Transacation CODE</label>
        <input type="text" wire:model="code" placeholder="Enter Transaction CODE" class="form-control">
    </div>
    <div class="col-sm-12 mt-2 mb-2">
        <button class="form-control btn btn-success" wire:click.prevent="process">
           Validate
        </button>
    </div>

    <div class="col-sm-12">
        @if (!is_null($transaction))
            @for ($i = 0; $i < count($transaction) ; $i++)
                <div class="row col-sm-12">
                    <div class="col-3">
                        {{ $transaction[$i]->FirstName }} {{ $transaction[$i]->MiddleName }}
                    </div>
                    <div class="col-3">
                        {{ $transaction[$i]->TransAmount }}
                    </div>
                    <div class="col-3">
                        {{ \Carbon\Carbon::parse($transaction[$i]->created_at)->diffForHumans() }}
                    </div>
                    <div class="col-3">
                        <button class="btn btn-primary">
                            Withdraw
                        </button>
                    </div>
                </div>
            @endfor
        @else
            {{-- <span class="alert alert-danger">
                No Such Transaction
            </span> --}}
        @endif
    </div>
</div>

