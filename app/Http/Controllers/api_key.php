<?php

namespace App\Http\Controllers;
use App\Models\api_key;


use Illuminate\Http\Request;
// use App\Models\api_key;

class Api_controller extends Controller
{
    public function index(){
        $api_key = rand(10000,99999);
        $secret_key = rand(10000,99999);
        // $wallet_address_exists = DB::table('api_key')->insert(
        //     [
        //         'api_key' => $account_id,
        //         'secret_key' => $blockchain_id ,
        //     ]
        // );  
        // }
    }
}
