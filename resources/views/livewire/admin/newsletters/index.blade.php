<div>
            
        <div class="container-fluid">
            <div class="card">
                <div class="card-header d-flex">
                    <h3>Newsletters Sent</h3>
                    <a href="{{ route('admin.newsletters.create') }}" class="btn btn-dark ms-auto me-2">Create a new Newsletter</a>
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-danger">Back</a>
                    {{-- <a href="" class="btn btn-success" wire:click.prevent="sendNewsletters">Send Newsletters</a> --}}
                    {{-- <a href="" class="btn btn-success" wire:click.prevent="exportData">Export Data</a> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Action</th>
                                    <th scope="col">Body</th>
                                    <th scope="col">Date Sent</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($newsletterMessages as $key => $newsletterMessage)
                                    <tr class="">
                                        <td>{{ $newsletterMessages->firstItem() + $key }}</td>
                                        <td>{{ $newsletterMessage->title }}</td>
                                        <td>{{ $newsletterMessage->subject }}</td>
                                        <td>{{ $newsletterMessage->action }}</td>
                                        <td>{{ $newsletterMessage->body }}</td>
                                        <td>{{ \Carbon\Carbon::parse($newsletterMessage->created_at)->format('F, jS Y') }}</td>
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
                        @if (count($newsletterMessages))
                            {{ $newsletterMessages->links() }}
                        @endif
                    </div>

                </div>
            </div>
        </div>
        </div>
    </div>
</div>