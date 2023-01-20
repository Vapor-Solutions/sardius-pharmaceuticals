<?php

namespace App\Http\Livewire\Admin\Photos;

use App\Models\Photo;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Create extends Component
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

    public function mount()
    {
        $this->photo = new Photo();
    }

    public function save()
    {
        $this->validate();

        $this->image->storeAs('images/gallery', Str::slug($this->photo->title) . '.' . $this->image->extension(), 'public');
        $this->photo->photo_path = "images/gallery/" . Str::slug($this->photo->title) . '.' . $this->image->extension();
        $this->photo->save();

        $this->emit('done', [
            'success' => 'Successfully Added a Photo to your Gallery'
        ]);

        return redirect()->route('admin.photos.index');
    }

    public function render()
    {
        return view('livewire.admin.photos.create');
    }
}
