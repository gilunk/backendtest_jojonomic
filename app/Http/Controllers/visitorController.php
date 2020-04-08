<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitor as t_user;
use App\Collection as t_cd;

class visitorController extends Controller
{
    function home()
    {
        $data = t_cd::all();
        $rented = t_user::all();
        return view('visitor', compact('data', 'rented'));
    }
}
