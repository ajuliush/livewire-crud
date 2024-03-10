<div>
    <div class="card">
        <h5 class="card-header">{{ $customer->name }}</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $customer->email }}</h5>
            <p class="card-text">{{ $customer->phone }}</p>
            <a wire:navigate href="/customers" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>
