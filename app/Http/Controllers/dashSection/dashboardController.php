<?php

namespace App\Http\Controllers\dashsection;



use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class dashboardController extends Controller
{
    function index(Request $request){
        return view('auth/dashboard/geral');
        
    }
}
