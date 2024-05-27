<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisposalController extends Controller
{
    public function index()
    {
        return view("disposal.index");
    }
}
