<?php

namespace App\Http\Livewire\Admin\Newsletters;

use App\Models\NewsletterMessage;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginatioTheme = 'bootstrap';

    public function render()
    {

        // $newsletterMessages = NewsletterMessage::select(DB::raw("CONCAT(title, ' - ', subject, ' - ', action, ' - ', body) as message"))->get();
        $newsletterMessages = NewsletterMessage::paginate(10);
        return view('livewire.admin.newsletters.index', ['newsletterMessages'=> $newsletterMessages]);
    }
}
