<?php

namespace App\Http\Livewire\Admin\Newsletters;

use App\Mail\NewsletterSubscribersMail;
use App\Models\NewsletterMessage;
use App\Models\Subscribers;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Create extends Component
{
    public NewsletterMessage $newsletter;

    protected $rules = [
        'newsletter.title' => 'required',
        'newsletter.subject' => 'required',
        'newsletter.action'=> 'required',
        'newsletter.body' => 'required',
    ];

    public function mount(){
        $this->newsletter = new NewsletterMessage();
    }

    public function save(){
        $this->validate();
        $this->sendNewsletters();
        $this->newsletter->save();

        $this->resetInput();
    }

    public function resetInput(){
        $this->newsletter = new NewsletterMessage();
    }

    public function render()
    {
        return view('livewire.admin.newsletters.create');
    }


    //function to send newsletters
    public function sendNewsletters()
    {
        $activeSubscribers = Subscribers::where('status', 1)->get();
        $emailDelay = 5;

        foreach($activeSubscribers as $subscriber){
            $emailContent = [
                'subject' => $this->newsletter->subject,
                'title' => $this->newsletter->title,
                'content' => $this->newsletter->body,
            ];
            Mail::to($subscriber->email)->send(new NewsletterSubscribersMail($emailContent, $subscriber->email));
            sleep($emailDelay);
        }

        $this->dispatchBrowserEvent('success', [
            'title'=>'Success',
            'icon'=>'success',
            'text'=>'Newsletters sent successfully'
        ]);
    }
}
