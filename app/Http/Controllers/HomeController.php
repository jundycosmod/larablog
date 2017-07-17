<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Portfolio;
use App\Experience;
use App\Client;

class HomeController extends Controller
{
    
    public function index(Service $services, Portfolio $portfolios, Experience $experiences,
                          Client $clients) {
        $services = $services->all();
        $portfolios = $portfolios->all();
        $experiences = $experiences->all();
        $clients = $clients->all();
        
        return view('layouts.master', compact('services','portfolios','experiences','clients'));
    }
}
