<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    //
    function index()
    {   
        $data = barang::all();
        return '$data';
    }
    function detail($id)
    {
        return"$id";
    }
}
