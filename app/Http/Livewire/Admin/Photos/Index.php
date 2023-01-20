<?php

namespace App\Http\Livewire\Admin\Photos;

use App\Models\Photo;
use Livewire\Component;

class Index extends Component
{



    protected $listeners = [
        'done' => 'render'
    ];


    public function delete($id)
    {
        $photo = Photo::find($id);
        if (file_exists(public_path($photo->photo_path))) {
            # code...
            unlink(public_path($photo->photo_path));
        }
        $photo->delete();

        $this->emit('done', [
            'success' => 'Successfully Deleted a Photo'
        ]);
    }
    public function render()
    {
        return view('livewire.admin.photos.index', [
            'photos' => Photo::all()
        ]);
    }
}
