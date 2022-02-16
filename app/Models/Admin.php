<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Admin extends Model
{
    use HasFactory;

    public static function get_records($table){
        $value = DB::table($table)->orderBy('id', 'asc')->get();
        return $value;
    
    }
}
