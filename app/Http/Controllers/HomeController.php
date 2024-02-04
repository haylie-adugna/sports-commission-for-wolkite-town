<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Helpers\Qs;
use App\Repositories\UserRepo;

class HomeController extends Controller
{

    public function index()
    {
        return view('dashboard');
    }


}
