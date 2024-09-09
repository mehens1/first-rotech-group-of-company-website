<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('home');

    }

    public function about()
    {
        return view('about');

    }

    // companies controllers
    public function anambra_line_ltd()
    {
        return view('companies.anambra_line_ltd');

    }

    public function rotech_automobile_and_real_estate()
    {
        return view('companies.rotech_automobile');

    }
}
