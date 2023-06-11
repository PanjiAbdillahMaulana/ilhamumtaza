<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuth extends Controller
{
    public function index(){
        $this->authorize('admin');
        return view('dashboard.index');
    }
}
