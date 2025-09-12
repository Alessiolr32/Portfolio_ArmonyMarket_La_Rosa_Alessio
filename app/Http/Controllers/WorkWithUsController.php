<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkWithUsController extends Controller
{
    public function index()
    {
        return view('work.workwithus');
    }
}
