<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GalleryItem extends Component
{
    public $category=null;
    public $image_url=null;
    public $category_id;
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($category, $imageUrl, $categoryId, $title)
    {
        $this->category = $category;
        $this->image_url = $imageUrl;
        $this->category_id = $categoryId;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.gallery-item');
    }
}
