<div>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Photos') }}
        </h2>
    </x-slot>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>Add a new Photo to your Gallery</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" wire:model='photo.title' class="form-control" name="title"
                                id="title" aria-describedby="title" placeholder="Enter the Title of the Image">
                            @error('photo.title')
                                <small id="title" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description <small
                                    class="text-muted">(Optional)</small></label>
                            <textarea wire:model="photo.description" placeholder="Enter the Description of the Image" class="form-control"
                                name="description" id="description" rows="3"></textarea>
                            @error('photo.description')
                                <small id="title" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select wire:model="photo.photo_category_id" class="form-select form-select-lg"
                                name="category" id="category">
                                <option selected>Select one</option>
                                @foreach (App\Models\PhotoCategory::all() as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                            @error('photo.photo_category_id')
                                <small id="title" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="photo" class="form-label">Choose File</label>
                            <input type="file" wire:model="image" class="form-control" name="photo" id="photo"
                                placeholder="Choose your Image" aria-describedby="">
                            @error('image')
                                <small id="title" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                            @if ($image)
                                <img src="{{ $image->temporaryUrl() }}" class="img-thumbnail" alt="">
                            @endif
                        </div>
                    </div>

                </div>
                <button wire:click="save" class="btn btn-dark text-uppercase">
                    Save
                </button>
            </div>
        </div>
    </div>
</div>
