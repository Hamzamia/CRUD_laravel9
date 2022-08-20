<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    function insert(Request $req)
    {
        $name = $req->get('pname');
        $price = $req->get('pprice');
        $image = $req->file('pimage')->getClientOriginalName();

        #move upload file

        $req->pimage->move(public_path('images'), $image);
        $prod = new product();
        $prod->PName = $name;
        $prod->PPrice = $price;
        $prod->PImage = $image;
        $prod->save();
        return redirect('/');
    }

    function readData()
    {
        $pdata = product::all();
       return view('insertRead', ['data'=>$pdata]);
    }
}