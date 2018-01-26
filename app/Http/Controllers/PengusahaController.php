<?php

namespace App\Http\Controllers;

use Auth;
use App\Auth as Auth_user;
use App\Pengusaha;
use App\Usaha;
use App\Jaminan;
use App\Jenis_usaha;
use App\Jenis_jaminan;
use App\Foto_usaha;
use App\Foto_jaminan;
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

  private function getPengusaha()
  {
    $pengusaha = Pengusaha::where('id_auth', Auth::guard('pengusaha')->user()->id)->first();
    return $pengusaha;
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
            'NIK' => 'required|string|max:15|unique:pengusaha',
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
  protected function validatorUsaha(array $data)
  {
        return Validator::make($data, [
          'nama' => 'required|string|max:191',
          'alamat' => 'required|string|max:191',
          'keterangan' => 'required|string|max:191',
          'modal' => 'required|numeric',
          'isFinal' => 'required',
          'Foto_usaha' => 'required|mimes:jpeg,jpg,png|min:50|max:3000'
        ]);
  }
  protected function createUsaha(array $request)
  {
      return Usaha::create([
          'id' => $request['id'],
          'id_pengusaha' => $this->getPengusaha()->id,
          'nama' => $request['nama'],
          'jenis' => $request['jenis_usaha'],
          'alamat' => $request['alamat'],
          'keterangan' => $request['keterangan'],
          'modal' => $request['modal'],
          'isFinal' => $request['isFinal'],
          'verified' => 1,
          'closed' => 0,
      ]);
  }
  protected function validatorJaminan(array $data)
  {
        return Validator::make($data, [
          'Nama_Jaminan' => 'required|string|max:191',
          'Keterangan' => 'required|string|max:191',
          'Foto_jaminan' => 'required|mimes:jpeg,jpg,png|min:50|max:3000'
        ]);
  }
  protected function createJaminan(array $request)
  {
      return Jaminan::create([
          'id_usaha' => $request['id_usaha'],
          'id_jenis_jaminan' => $request['jenis_jaminan'],
          'nama' => $request['Nama_Jaminan'],
          'keterangan' => $request['Keterangan'],
      ]);
  }
  public function showFormIsiProfile(){
    $s = $this->pengaman();
    return view('pengusaha.formProfileFirst');
  }
  public function showDaftarUsaha(){
    if($this->checkIfFilled())
    {
      $usaha = new Usaha();
      $usaha = $usaha->with(['foto_usaha','jenis_usaha'])->where('id_pengusaha', $this->getPengusaha()->id)->get();
      return view('pengusaha.daftarUsaha')->with(compact('usaha'));
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
      $jenis_usaha = Jenis_usaha::all();
      return view('pengusaha.tambahUsaha')->with(compact('jenis_usaha'));
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
      $pengusaha = $this->getPengusaha();
      return view('pengusaha.home')->with(compact('pengusaha'));
    }
    else
    {
      return redirect(route('pengusaha.isiprofile'));
    }
  }
  public function uploadUsaha(Request $request)
  {
    $validation = $this->validatorUsaha($request->toArray());
    if($validation->fails()){
        $errors = $validation->errors();
        return redirect(route('pengusaha.tambahUsaha'))
                    ->with(compact('errors'))
                    ->withInput();
    }else{
      $rnd_str = $request['jenis_usaha'];
      $temp = abs((round(microtime(true) * 1000))%10000000);
      $check = Usaha::find($rnd_str.$temp);
      while($check!=null){
            $temp = abs((round(microtime(true) * 1000))%10000000);
            $check = Usaha::find($rnd_str.$temp);
      }
      $request['id'] = $rnd_str.$temp;

      $new_usaha = $this->createUsaha($request->toArray());

      $link = Storage::disk('pengusaha')->put('/'.$this->getPengusaha()->id.'/usaha'.'/'.$new_usaha->id,  $request->file('Foto_usaha'));
      $new_foto_usaha = new Foto_usaha();
      $new_foto_usaha->id_usaha = $new_usaha->id;
      $new_foto_usaha->url_foto = $link;
      $new_foto_usaha->save();
      return redirect(route('pengusaha.tambahJaminan' ,['id_usaha'=>$new_usaha->id]));
    }
  }

  public function showFormJaminan($id_usaha)
  {
    if($this->checkIfFilled())
    {
      $jenis_jaminan = Jenis_jaminan::all();
      return view('pengusaha.tambahJaminan')->with(compact('id_usaha', 'jenis_jaminan'));
    }
    else
    {
      return redirect(route('pengusaha.isiprofile'));
    }
  }
  public function uploadJaminan(Request $request)
  {
    $validation = $this->validatorJaminan($request->toArray());
    if($validation->fails()){
        $errors = $validation->errors();
        return redirect(route('pengusaha.tambahJaminan'))
                    ->with(compact('errors'))
                    ->withInput();
    }else{
      $new_jaminan = $this->createJaminan($request->toArray());
      $link = Storage::disk('pengusaha')->put('/'.$this->getPengusaha()->id.'/usaha'.'/'.$new_jaminan->id_usaha,  $request->file('Foto_jaminan'));
      $new_foto_jaminan = new Foto_jaminan();
      $new_foto_jaminan->id_jaminan = $new_jaminan->id;
      $new_foto_jaminan->url_foto = $link;
      $new_foto_jaminan->save();
      return redirect(route('pengusaha.daftarUsaha'));
    }
  }

}
