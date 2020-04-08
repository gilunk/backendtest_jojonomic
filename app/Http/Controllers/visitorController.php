<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitor as t_user;
use App\Collection as t_cd;

class visitorController extends Controller
{
    function home()
    {
        return view('visitor');
    }
}
