<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home() : View
    {
        $travelPackages = TravelPackage::with('galleries')->get();

        return view('home', compact('travelPackages'));
    }

    public function detail(TravelPackage $travelPackage): View
    {
        return view('detail', compact('travelPackage'));
    }

    public function package(){
        $travelPackages = TravelPackage::with('galleries')->get();

        return view('package', compact('travelPackages'));
    }

    public function blog(){
        return view('blog');
    }
}
