<?php

namespace App\Http\Livewire\Admin\PhotoCategories;

use App\Models\PhotoCategory;
use Livewire\Component;

class Index extends Component
{
    public function delete($id)
    {
        $category = PhotoCategory::find('id');
        $category->delete();

        $this->emit('done', [
            'success'=>"Successfully Deleted the Category"
        ]);


    }
    public function render()
    {
        return view('livewire.admin.photo-categories.index', [
            'categories' => PhotoCategory::all()
        ]);
    }
}
