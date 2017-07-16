<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
//    public function __construct() {
//        $this->middleware('auth')->except(['index', 'show']);
//    }
    
    public function create() {

        return view('services.create');
    }

}
