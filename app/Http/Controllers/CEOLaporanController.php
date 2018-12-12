<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CEOLaporanController extends Controller
{
    
    public function index()
    {
        return view('admin.laporanC');
    }
}
