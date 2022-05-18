<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class СounterpartyController extends Controller
{
    //
    public function index()
    {
        return view('counterparty.index');
    }

    public function form()
    {
        //return 'ddsdsd';
        return view('counterparty.form');
    }
}
