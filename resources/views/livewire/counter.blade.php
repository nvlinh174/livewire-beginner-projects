<div class="container">
    <div class="d-flex align-items-center">
        <button class="btn btn-danger" wire:click="decrement">-</button>
        <h1 class="mx-3">{{ $count }}</h1>
        <button class="btn btn-primary" wire:click="increment">+</button>
    </div>
</div>
