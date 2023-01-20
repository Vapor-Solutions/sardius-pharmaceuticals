<?php

namespace App\Http\Livewire\Admin\PhotoCategories;

use App\Models\PhotoCategory;
use Livewire\Component;

class Create extends Component
{
    public PhotoCategory $category;

    protected $rules = [
        'category.title' => 'required',
    ];
    public function mount()
    {
        $this->category = new PhotoCategory();
    }
    public function save()
    {
        $this->validate();
        $this->category->save();

        return redirect()->route('admin.photo_categories.index');
    }
    public function render()
    {
        return view('livewire.admin.photo-categories.create');
    }
}
