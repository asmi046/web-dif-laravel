<?php

namespace App\Http\Controllers;

use App\Models\Usluga;
use App\Models\PortfolioElement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function  index() {
        $uslugi = Usluga::all();
        $portfolio = PortfolioElement::all()->take(6);
        return view('home.index', ['uslugi' => $uslugi, 'portfolio' => $portfolio]);
    }
}
