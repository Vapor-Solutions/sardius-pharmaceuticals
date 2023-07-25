<div>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="row">
        <div class="col-lg-4 col-6">
            <div class="small-box bg-sardius">
                <div class="inner">
                    <h3 style="font-family:Arial, Helvetica, sans-serif; font-weight:bold">
                        {{ count(App\Models\Photo::all()) }}
                    </h3>
                    <p>Photos</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-6">

            <div class="small-box bg-sardius">
                <div class="inner">
                    <h3 style="font-family:Arial, Helvetica, sans-serif; font-weight:bold">
                        {{ count(App\Models\PhotoCategory::all()) }}
                    </h3>
                    <p>Photo Categories</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-6">

            <div class="small-box bg-sardius">
                <div class="inner">
                    <h3 style="font-family:Arial, Helvetica, sans-serif; font-weight:bold">
                        {{ App\Models\Subscribers::where('status', '1')->count() }}
                    </h3>
                    <p>Active Newsletter Subscribers</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
            </div>
        </div>
    </div>
</div>
