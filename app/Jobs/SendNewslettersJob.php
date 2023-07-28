<?php

namespace App\Jobs;

use App\Mail\NewsletterSubscribersMail;
use App\Models\Subscribers;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;

class SendNewslettersJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $subscriber;
    protected $emailContent;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Subscribers $subscriber, array $emailContent)
    {
        $this->subscriber = $subscriber;
        $this->emailContent = $emailContent;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->subscriber->email)->send(new NewsletterSubscribersMail($this->emailContent, $this->subscriber->email));
    }
}
