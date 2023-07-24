<?php

namespace App\Http\Livewire\Admin\Subscribers;

use App\Models\Subscribers;
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

    public function toggleStatus($subscriberID){
        $subscriber = Subscribers::findOrFail($subscriberID);
        $subscriber->status = !$subscriber->status;
        $subscriber->save();
    }
}
