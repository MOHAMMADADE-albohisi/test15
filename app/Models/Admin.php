<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admin extends Model
{
    use HasFactory;

    protected $tabel = "admins";

    public static function getAdmin()
    {
        $record = DB::table('admins')->select('id', 'name', 'email', 'phone', 'salary', 'department')->get()->toArray();
        return $record;
    }
}
