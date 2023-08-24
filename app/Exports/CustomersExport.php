<?php

namespace App\Exports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CustomersExport implements WithHeadings,FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //export all contacts data
        // return Contact::all();

        $customers = Contact::select('id', 'name', 'email', 'phone_number', 'subject', 'message', 'created_at')->orderBy('id', 'Desc')->get();
        return $customers;
    }
    public function headings(): array{
        return['Id','Name', 'Email', 'Mobile', 'Subject', 'Message', 'Recieved on'];
    }
}
