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
        $rented = t_user::all()->where('status_rent', 'like', 'Unreturned');
        return view('visitor', compact('data', 'rented'));
    }

    function addrent($id_cd)
    {
        $id = t_cd::find($id_cd);
        return view('add_rent')->with('cd', $id);
    }

    function createrent(Request $req, $id_cd)
    {
        $id_col = t_cd::find($id_cd);

        if($req->many_cds > $id_col->quantity)
        {
            return redirect('/visitor/'.$id_cd.'/addrent')->with('errorstock', 'Please do not rent exceeds than our quantitiy/stocks');
        }
        $post = new t_user();
        $post->name = $req->name;
        $post->id_cd = $id_cd;
        $post->days = $req->days;
        $post->many_cds = $req->many_cds;
        $post->status_rent = 'Unreturned';
        $post->save();

        $id_col->quantity -= $post->many_cds; // mengurangi stok CD setelah di sewa
        $id_col->save();

        return redirect('/visitor')->with('successrent', 'Congrats! Your new rent data has been added');
    }

    function returningcd($id_rent, $id_cd)
    {
        $id_vis = t_user::find($id_rent);
        $id_col = t_cd::find($id_cd);

        $id_vis->total_price = $id_col->rate * $id_vis->days; // untuk hitung total harga
        $id_vis->status_rent = 'Returned';
        $id_vis->save();

        $id_col->quantity += $id_vis->many_cds; // untuk menambah stok setelah mengembalikan
        $id_col->save();

        return redirect('/visitor')->with('successreturn', 'Congrats! You have returned the book');
    }
}
