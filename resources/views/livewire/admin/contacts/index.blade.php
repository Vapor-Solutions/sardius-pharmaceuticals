<div>
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
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $key => $contact)
                                    <tr class="">
                                        <td>{{ $contacts->firstItem() + $key }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->phone_number }}</td>
                                        <td>{{ $contact->subject }}</td>
                                        <td>{{ $contact->message }}</td>
                                        {{-- <td>
                                            @if ($subscriber->status == 1)
                                                <span class="text-success">Subscribed</span>
                                            @else
                                                <span class="text-danger">Unsubscribed</span>
                                            @endif
                                        </td>
                                        <td>
                                            <input type="checkbox" wire:click="toggleStatus({{ $subscriber->id }})"
                                                {{ $subscriber->status == 1 ? 'checked' : '' }}>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @if (count($contacts))
                            {{ $contacts->links() }}
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
