<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VilaController extends Controller
{
    public function vila()
    {
        return view('Pages.Vila');
    }
}
