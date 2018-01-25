<?php

namespace App\Http\Controllers;

use Auth;
use App\Auth as Auth_user;
use App\Pengusaha;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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

  private function checkIfFilled()
  {
    $pengusaha = new Pengusaha();
    if($pengusaha->checkIfFilledProfil(Auth::guard('pengusaha')->user()->id) != null){
        return true;
    }
    else{
        return false;
    }
  }

  protected function validatorPengusaha(array $data)
  {
        return Validator::make($data, [
            'NIK' => 'required|string|max:20|unique:pengusaha',
            'Nama' => 'required|string|max:255',
            'Agama' => 'required|string|max:255',
            'Alamat' => 'required|string|max:255',
            'Telepon' => 'required|string|max:15',
            'Tempat' => 'required|string|max:255',
            'Tanggal' => 'required|date',
            'Jenis_kelamin' => 'required',
            'Foto_ktp' => 'required|mimes:jpeg,jpg,png|min:50|max:3000',
            'Foto_profil' => 'required|mimes:jpeg,jpg,png|min:50|max:3000',
        ]);
  }
  protected function createPengusaha(array $data)
  {
      return Pengusaha::create([
          'id' => $data['id'],
          'id_auth' => Auth::guard('pengusaha')->user()->id,
          'nik' => $data['NIK'],
          'nama' => ucwords(strtolower($data['Nama'])),
          'alamat' => $data['Alamat'],
          'agama' => ucwords(strtolower($data['Agama'])),
          'telepon' => $data['Telepon'],
          'tempat_lahir' => ucwords(strtolower($data['Tempat'])),
          'tanggal_lahir' => $data['Tanggal'],
          'jenis_kelamin' => $data['Jenis_kelamin'],
          'url_foto_ktp' => $data['F_ktp'],
          'url_foto' => $data['F_profil'],
          'verified' => 0
      ]);
  }
  public function showFormIsiProfile(){
    $s = $this->pengaman();
    return view('pengusaha.formProfileFirst');
  }
  public function showDaftarUsaha(){
    if($this->checkIfFilled())
    {
      return view('pengusaha.daftarUsaha');
    }
    else
    {
      return redirect(route('pengusaha.isiprofile'));
    }
        
  }

  public function showdetailUsaha(){
    if($this->checkIfFilled())
    {
      return view('pengusaha.detailUsaha');
    }
    else
    {
      return redirect(route('pengusaha.isiprofile'));
    }
        
  }

  public function showprofile(){
      if($this->checkIfFilled())
      {
        return view('pengusaha.profile');
      }
      else
      {
        return redirect(route('pengusaha.isiprofile'));
      }
  }

  public function showtambahUsaha(){
    if($this->checkIfFilled())
    {
      return view('pengusaha.tambahUsaha');
    }
    else
    {
      return redirect(route('pengusaha.isiprofile'));
    }
    
  }

  public function postIsiProfileFirst(Request $request)
  {
    $validation = $this->validatorPengusaha($request->toArray());
    if($validation->fails()){
        $errors = $validation->errors();
        return redirect(route('pengusaha.isiprofile'))
                    ->with(compact('errors'))
                    ->withInput();
    }else{
        $rnd_str = substr(md5(microtime()), rand(0,26),5);
        $temp = abs((round(microtime(true) * 1000))%10000000);
        $check = Pengusaha::find($rnd_str.$temp);
        while($check!=null){
          $rnd_str = substr(md5(microtime()), rand(0,26),5);
          $temp = abs((round(microtime(true) * 1000))%10000000);
          $check = Pengusaha::find($rnd_str.$temp);
        }
        $request['id'] = $rnd_str.$temp;
        // $filename = md5(abs((round(microtime(true)))));
        $request['F_ktp'] = Storage::disk('pengusaha')->put('/'.$request['id'].'/ktp',  $request->file('Foto_ktp'));
        // $request['Foto_ktp'] = 'pengusaha'.'/'.$request['id'].'/ktp';
        $request['F_profil'] =Storage::disk('pengusaha')->put('/'.$request['id'].'/foto-profil', $request->file('Foto_profil'));
        // $request['Foto_profil'] = 'pengusaha'.'/'.$request['id'].'/foto-profil';
        $this->createPengusaha($request->toArray());
        return redirect(route('pengusaha.home'));
    }
  } 

  public function showHome()
  {
    if($this->checkIfFilled())
    {
      $pengusaha = Pengusaha::where('id_auth', Auth::guard('pengusaha')->user()->id)->first();
      return view('pengusaha.home')->with(compact('pengusaha'));
    }
    else
    {
      return redirect(route('pengusaha.isiprofile'));
    }
  }


}
