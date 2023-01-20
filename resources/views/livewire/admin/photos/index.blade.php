<div>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Photos') }}
        </h2>
    </x-slot>

    <h2>Gallery Photos</h2>

    <div class="row">
        @foreach ($photos as $photo)
            <div class="col-md-3 col-6">
                <div class="card shadow-sm">
                    <img class="card-img-top" src="/{{ $photo->photo_path }}" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">{{ $photo->title }}</h4>
                        <p class="card-text">{{$photo->description}}</p>
                    </div>
                    <div class="card-footer d-flex">
                        <div class="flex-col mx-3">
                            <a href="{{ route('admin.photos.edit', $photo->id) }}" class="btn btn-secondary">Edit</a>
                        </div>
                        <div class="flex-col mx-3">
                            <button class="btn btn-danger" onclick="confirm('Are You Sure you want to delete this photo from your Gallery?')||event.stopImmediatePropagation()" wire:click="delete({{ $photo->id }})">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <a href="{{ route('admin.photos.create') }}" class="btn btn-dark text-uppercase mt-5 mb-3">
            Add a new Image to the Gallery
        </a>
    </div>
</div>

</div>
