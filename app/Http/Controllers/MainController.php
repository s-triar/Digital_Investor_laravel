<?php

namespace App\Http\Controllers;

use App\Jenis_usaha;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
  public function __construct()
  {
      $this->middleware('guest');
  }
  public function showAboutUs(){
        return view('public.aboutUs');
  }

  public function showPencarianUsaha(){
        return view('public.pencarianUsaha');
  }

  public function showSyaratdanKetentuan(){
    return view('public.SyaratdanKetentuan');
  }
  public function showjenisUsaha($nama){
      $jenis_usaha = Jenis_usaha::all();
      $usaha = Jenis_usaha::where('nama', $nama)->first();
      return view('public.jenisUsaha')->with(compact('jenis_usaha', 'usaha'));
  }
  public function index(){
    $jenis_usaha = Jenis_usaha::all();
    return view('welcome')->with(compact('jenis_usaha'));
}
  
}
