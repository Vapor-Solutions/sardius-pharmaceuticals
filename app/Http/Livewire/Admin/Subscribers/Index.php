<?php

namespace App\Http\Livewire\Admin\Subscribers;

use App\Mail\NewsletterSubscribersMail;
use App\Models\Subscribers;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $subscribers = Subscribers::paginate(10);
        return view('livewire.admin.subscribers.index', ['subscribers' => $subscribers]);
    }

    public function toggleStatus($subscriberID)
    {
        $subscriber = Subscribers::findOrFail($subscriberID);
        $subscriber->status = !$subscriber->status;
        $subscriber->save();
    }

    public function sendNewsletters()
    {
        $activeSubscribers = Subscribers::where('status', 1)->get();
        $emailDelay = 5;

        foreach($activeSubscribers as $subscriber){
            $emailContent = [
                'title' => 'Monthly Newsletter',
                'content' => 'This is the newsletter content for the subscriber...',
            ];
            Mail::to($subscriber->email)->send(new NewsletterSubscribersMail($emailContent));
            sleep($emailDelay);
        }

        $this->dispatchBrowserEvent('success', [
            'title'=>'Success',
            'icon'=>'success',
            'text'=>'New Customer Registered Successfully'
        ]);
    }
}
