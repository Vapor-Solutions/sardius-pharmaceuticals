<?php

namespace App\Http\Livewire\Admin\Subscribers;

use App\Models\Subscribers;
use Livewire\Component;

class Create extends Component
{
    public Subscribers $subscriber;

    protected $rules = [
        'subscriber.email' => 'required',
    ];

    public function mount(){
        $this->subscriber = new Subscribers();
    }

    public function save(){
        $this->validate();
        $this->subscriber->status = 1;
        $this->subscriber->save();

        $this->resetInput();

        $this->dispatchBrowserEvent('success', [
            'title'=>'Success',
            'icon'=>'success',
            'text'=>'Subscriber added successfully'
        ]);
    }

    public function resetInput(){
        $this->subscriber = new Subscribers();
    }

    public function render()
    {
        return view('livewire.admin.subscribers.create');
    }
}
