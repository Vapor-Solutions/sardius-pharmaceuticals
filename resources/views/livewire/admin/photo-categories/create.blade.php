<div>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Photo Categories') }}
        </h2>
    </x-slot>

    <div class="container-fluid">
        <div class="card shadow-sm">
            <div class="card-header">
                <h3>Add a new Photo Category</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input wire:model="category.title" type="text" class="form-control" name="title" id="title"
                                aria-describedby="title" placeholder="Enter the Title of your Category">
                            `@error('category.title')
                                <small id="title" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <button wire:click="save" class="btn btn-dark">Save</button>
            </div>
        </div>

    </div>
