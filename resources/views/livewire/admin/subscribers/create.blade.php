<div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header d-flex">
                <h3>Create a New Newsletter Subscriber</h3>
                <a href="{{ route('admin.subscribers.index') }}" class="btn btn-dark ms-auto me-2">Back</a>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="" wire:model="subscriber.email">
            @error('subscriber.email')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3" wire:click.prevent="save">Add Subscriber</button>
        </div>
    </div>
</div>
