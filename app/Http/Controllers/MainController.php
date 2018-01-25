<?php

namespace App\Http\Controllers;

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
  public function showjenisUsaha(){
      return view('public.jenisUsaha');
  }
}
