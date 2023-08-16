<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function about()
    {
        return view('user.about');
    }


    public function package()
    {
        $destinations = Destination::all();
        return view('user.package', compact('destinations'));
    }
    
}
