<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperLaporanController extends Controller
{
    //
    public function index()
    {
        return view('admin.laporanS');
    }
}
