<div>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Photos') }}
        </h2>
    </x-slot>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header d-flex">
                <h3>List of Photo Categories</h3>
                <a href="{{ route('admin.photo_categories.create') }}" class="btn btn-dark ms-auto">Create a new Category</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Category</th>
                                <th scope="col">Number of Photos</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr class="">
                                    <td scope="row">{{ $category->id }}</td>
                                    <td>{{ $category->title }}</td>
                                    <td>{{ count($category->photos) }} Photos</td>
                                    <td class="d-flex flex-row justify-content-center">
                                        <div class="flex-col mx-3">
                                            <a href="{{ route('admin.photo_categories.edit', $category->id) }}"
                                                class="btn btn-secondary">Edit</a>
                                        </div>
                                        <div class="flex-col mx-3">
                                            <button wire: class="btn btn-danger">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
