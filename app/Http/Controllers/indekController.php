<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indekController extends Controller
{
    public function indek()
    {
        return view('/About');
    }
}
