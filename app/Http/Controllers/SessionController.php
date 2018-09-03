<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSession(Request $request) {
        if( $request->session()->has('my_name') ) {
            echo $request->session()->get('my_name');
        } else {
            echo 'No data session';
        }
    }
    
    public function setSession(Request $request) {
        $request->session()->put('my_name','cuong phan');
        echo 'add data sesion successfull';
    }
    
    public function delSession(Request $request) {
        $request->session()->forget('my_name');
        echo 'Delete data sesion successfull';
    }
}
