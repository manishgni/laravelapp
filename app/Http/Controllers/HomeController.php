<?php

namespace App\Http\Controllers;
use App\Models\api_key;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function api(){
        $api_key = md5(rand(10000,99999));
        $secret_key = md5(rand(10000,99999));
         dd(session('user'));
        $api_address = DB::table('api_key')->insert(
            [
                'api_key' => $api_key,
                'secret_key' => $secret_key ,
            ]
        );  
        dd($api_address);
        
    }

   
}
