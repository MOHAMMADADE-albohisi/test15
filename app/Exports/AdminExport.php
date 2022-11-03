<?php

namespace App\Exports;

use App\Models\Admin;
use Maatwebsite\Excel\Concerns\FromCollection;

class AdminExport implements FromCollection
{


    public function headinges(): array
    {
        return [
            'id',
            'Name',
            'Email',
            'Phone',
            'Salary',
            'Department',
        ];
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return collect(Admin::getAdmin());
    }
}
