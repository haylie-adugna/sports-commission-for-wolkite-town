<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\models\matchs;
class HomeController extends Controller
{

    public function dashboard()
    {
        return view('dashboard');
    }
    public function home()
    {
        $matchs = Matchs::with(['clubs'])->get();

        return view('frontend.home', compact('matchs'));
    }


}
