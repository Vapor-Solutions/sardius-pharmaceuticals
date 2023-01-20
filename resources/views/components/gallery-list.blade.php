<!--=================================
         porfolio start-->
<section class="pq-pb-210">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="pq-filters">
                    <div class="filters pq-filter-button-group">
                        <ul>
                            <li class="active pq-filter-btn" data-filter="*">All</li>
                            @foreach (App\Models\PhotoCategory::all() as $category)
                                <li class="pq-filter-btn" data-filter=".{{ $category->id }}">{{ $category->title }}</li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <div class="pq-grid " data-next_items="3" data-initial_items="6">
                    @foreach (App\Models\Photo::all() as $photo)
                        <x-gallery-item categoryId="{{ $photo->photo_category_id }}" imageUrl="{{ $photo->photo_path }}" category="{{ $photo->category }}"
                            title="{{ $photo->title }}">
                        </x-gallery-item>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
</section>
<!--=================================
               porfolio end-->
<!--=================================
