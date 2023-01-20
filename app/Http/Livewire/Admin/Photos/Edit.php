<?php

namespace App\Http\Livewire\Admin\Photos;

use App\Models\Photo;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public Photo $photo;
    public $image;

    protected $rules = [
        'photo.photo_category_id' => 'required',
        'photo.title' => 'required',
        'photo.description' => 'nullable',
        'image' => 'required|image|max:2048|mimes:jpg,jpeg,png'
    ];

    public function mount($id)
    {
        $this->photo = Photo::find($id);
    }

    public function save()
    {
        $this->validate();

        $this->image->storeAs('gallery', Str::slug($this->photo->title) . '.' . $this->image->extension(), 'public');
        $this->photo->photo_path = "/gallery/" . Str::slug($this->photo->title) . '.' . $this->image->extension();
        $this->photo->save();

        $this->emit('done', [
            'success' => 'Successfully Added a Photo to your Gallery'
        ]);

        return redirect()->route('admin.photos.index');
    }

    public function render()
    {
        return view('livewire.admin.photos.edit');
    }
}
