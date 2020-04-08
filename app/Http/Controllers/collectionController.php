<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitor as t_user;
use App\Collection as t_cd;

class collectionController extends Controller
{
    function home()
    {
        return view('owner');
    }
}
