<div>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Photos') }}
        </h2>
    </x-slot>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header d-flex">
                <h3>List of Newsletter Subscribers</h3>
                <a href="" class="btn btn-dark ms-auto">Add a new subscriber</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Email</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subscribers as $key => $subscriber)
                                <tr class="">
                                    <td >{{ $subscribers->firstItem() + $key  }}</td>
                                    <td>{{ $subscriber->email }}</td>
                                    <td>
                                        @if ($subscriber->status == 1)
                                            Subscribed
                                        @else
                                            Unsubscribed
                                        @endif
                                    </td>
                                    <td>
                                        <input type="checkbox" wire:click="toggleStatus({{ $subscriber->id }})"
                                            {{ $subscriber->status == 1 ? 'checked' : '' }}>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if (count($subscribers))
                    {{ $subscribers->links() }}
                @endif
                </div>

            </div>
        </div>
    </div>
</div>
