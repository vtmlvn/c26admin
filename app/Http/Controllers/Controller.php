<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        return view ('welcome');
    }
    public function member(){
        return view ('admin.member');
    }
    public function customer(){
        return view ('admin.customer');
    }
    public function pegawai(){
        return view ('admin.pegawai');
    }
    public function membership()
    {
        return view('membership');
    }
    public function tentangkami()
    {
        return view('tentangkami');
    }
    public function layanan()
    {
        return view('layanan');
    }
    public function lacaklaundry()
    {
        return view('lacaklaundry');
    }
    public function ceksaldo()
    {
        return view('ceksaldo');
    }
}
