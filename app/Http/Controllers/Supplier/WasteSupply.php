<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WasteSupply extends Controller
{
    public function index(){
        return view('common.supply-waste');
    }
}
