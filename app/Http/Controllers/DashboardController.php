<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $role = Auth::user()->role;

        if($role == 'monitor')
        {
            return view('monitor.dashboard');
        }elseif($role == 'supplier'){
            return view('supplier.dashboard');
        }elseif($role == 'collector'){
            return view('collector.dashboard');
        }else{
            return ('/');
        }
    }
}
