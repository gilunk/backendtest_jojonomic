<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitor as t_user;
use App\Collection as t_cd;

class collectionController extends Controller
{
    function home()
    {
        $data = t_cd::all();
        $rented = t_user::all();
        return view('owner', compact('data', 'rented'));
    }

    function add()
    {
        return view('add_cd');
    }

    function create(Request $req)
    {
        $post = t_cd::create([
            'title'      => $req->title,
            'rate'       => $req->rate,
            'category'   => $req->category,
            'quantity'   => $req->quantity
        ]);

        return redirect('/owner')->with('successadd', 'Congrats! New CD has been added');
    }

    function edit($id)
    {
        $cd = t_cd::find($id);
        return view('edit_cd')->with('cd', $cd);
    }

    function update(Request $req, $id)
    {
        $put = t_cd::find($id);

        $put->title     = $req['title'];
        $put->rate      = $req['rate'];
        $put->category  = $req['category'];
        $put->quantity  = $req['quantity'];
        $put->save();

        return redirect('/owner')->with('successupdate', 'Congrats! CD has been updated');
    }

    function delete($id)
    {
        $drop = t_cd::find($id);

        $drop->delete($drop);
        return redirect('/owner')->with('successdelete', 'Congrats! CD has been deleted');
    }
}
