<?php

namespace App\Exports;

use App\Models\Subscribers;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class NewsletterSubscribersExport implements WithHeadings,FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Subscribers::all();
        $subscribersData = Subscribers::select('id', 'email', 'created_at')->where('status', 1)->orderBy('id', 'Desc')->get();
        return $subscribersData;
    }

    public function headings(): array{
        return['Id', 'Email', 'Subscribed on'];
    }
}
