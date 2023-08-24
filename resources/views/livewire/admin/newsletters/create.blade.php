<div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header d-flex">
                <h3>Create a New Newsletter Email</h3>
                <a href="{{ route('admin.newsletters.index') }}" class="btn btn-dark ms-auto me-2">Back</a>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" class="form-control" placeholder="" wire:model="newsletter.title">
            @error('newsletter.title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Subject</label>
            <input type="text" class="form-control" placeholder="" wire:model="newsletter.subject">
            @error('newsletter.subject')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Action</label>
            <input type="text" class="form-control" placeholder="" wire:model="newsletter.action">
            @error('newsletter.action')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Body</label>
            <textarea class="form-control" rows="5" wire:model="newsletter.body"></textarea>
            @error('newsletter.body')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3" wire:click.prevent="save">Send Newletter</button>
        </div>
    </div>
</div>
