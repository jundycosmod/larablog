<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Portfolio;
use App\Experience;

class HomeController extends Controller
{
    
    public function index(Service $services, Portfolio $portfolios, Experience $experiences) {
        $services = $services->all();
        $portfolios = $portfolios->all();
        $experiences = $experiences->all();
        
        return view('layouts.master', compact('services','portfolios','experiences'));
    }
}
