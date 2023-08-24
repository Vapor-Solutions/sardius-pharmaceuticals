<div>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Photos') }}
        </h2>
    </x-slot>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header d-flex">
                <h3>Newsletter Mailing List</h3>
                <a href="{{ route('admin.subscribers.create') }}" class="btn btn-dark ms-auto me-2">Add a new subscriber</a>
                {{-- <a href="" class="btn btn-danger me-2" wire:click.prevent="sendNewsletters">Send Newsletters</a> --}}
                <a href="" class="btn btn-success" wire:click.prevent="exportData">Export Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Email</th>
                                <th scope="col">Date Subscribed</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subscribers as $key => $subscriber)
                                <tr class="">
                                    <td>{{ $subscribers->firstItem() + $key }}</td>
                                    <td>{{ $subscriber->email }}</td>
                                    <td>{{ \Carbon\Carbon::parse($subscriber->created_at)->format('F, jS Y') }}</td>
                                    <td>
                                        @if ($subscriber->status == 1)
                                            <span class="text-success">Subscribed</span>
                                        @else
                                            <span class="text-danger">Unsubscribed</span>
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
