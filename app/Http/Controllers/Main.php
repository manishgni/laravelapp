<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;



use Illuminate\Http\Request;

class Main extends Controller
{
    public function __construct()
    {
        $users = new Admin();
        
    }

    public function index(){
        $userinfo = Admin::get_records('tbl_admin',['id',1],'*');
        print_r($userinfo);
        echo 'herebcontroller';
    }

    // public function login(Request $req){
    //     $all = 

    // }
}
