<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class SiteController extends Controller
{
    public function index(){
        return view('pages.landing');
    }
}
