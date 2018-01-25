<?php

namespace App\Http\Controllers;

use Auth;
use App\Auth as Auth_user;
use App\Pengusaha;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PengusahaController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:pengusaha', ['except' => 'logout']);
  }
  private function pengaman(){
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('pengusaha')->user();
    return $users[2];
  }
  private function create_log_admin($id_admin, $id_status_log, $pesan)
  {
      return Pengusaha::create([
        'id_admin' =>$id_admin,
        'id_status_log' => $id_status_log,
        'pesan' => $pesan,
      ]);
  }
  public function showDaftarUsaha(){
        $s = $this->pengaman();
        $data['logged'] = $s;
        return view('pengusaha.daftarUsaha')->with('data', $data);
  }

  public function showdetailUsaha(){
        $s = $this->pengaman();
        $data['logged'] = $s;
        return view('pengusaha.detailUsaha')->with('data', $data);
  }

  public function showprofile(){
        $s = $this->pengaman();
        $data['logged'] = $s;
        return view('pengusaha.profile')->with('data', $data);
  }

  public function showtambahUsaha(){
    $s = $this->pengaman();
    $data['logged'] = $s;
    return view('pengusaha.tambahUsaha')->with('data', $data);
}


}
