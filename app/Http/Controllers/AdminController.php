<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Eexports\AdminExport;
use App\Exports\AdminExport as ExportsAdminExport;
use Excel;

class AdminController extends Controller
{
    //
    public function addAdmin()
    {
        $admin = [
            ["name" => "Mohamad", "email" => "mohammadalbohisi@gmail.com", "phone" => "0598595579", "salary" => "2000", "department" => "Test"],
            ["name" => "Ahmad", "email" => "mohammad@gmail.com", "phone" => "0598595579", "salary" => "2000", "department" => "Test"],
            ["name" => "علي", "email" => "mohamma@gmail.com", "phone" => "0598595579", "salary" => "2000", "department" => "Test"],
            ["name" => "ابراهيم", "email" => "mohammadsalbohisi@gmail.com", "phone" => "0598595579", "salary" => "2000", "department" => "Test"],
            ["name" => "اشرف", "email" => "mohammadalabohisi@gmail.com", "phone" => "0598595579", "salary" => "2000", "department" => "Test"],
            ["name" => "خالد", "email" => "mohammadsalbohisi@gmail.com", "phone" => "0598595579", "salary" => "2000", "department" => "Test"],
            ["name" => "محمود", "email" => "mohammadfalbohisi@gmail.com", "phone" => "0598595579", "salary" => "2000", "department" => "Test"],
        ];
        Admin::insert($admin);
        return "تم الاضارفة بنجاح";
    }

    public function exportIntoExcel()
    {
        return Excel::download(new ExportsAdminExport, 'Adminlist.xlsx');
    }
    public function exportIntoCSV()
    {
        return Excel::download(new ExportsAdminExport, 'Adminlist.csv');
    }
}
