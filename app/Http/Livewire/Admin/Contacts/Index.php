<?php

namespace App\Http\Livewire\Admin\Contacts;

use App\Exports\CustomersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $contacts = Contact::paginate(10);
        return view('livewire.admin.contacts.index', ['contacts' => $contacts]);
    }

    public function exportData(){
        return Excel::download(new CustomersExport, 'customers.xlsx');
    }
}
