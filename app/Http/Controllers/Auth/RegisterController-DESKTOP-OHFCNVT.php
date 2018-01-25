<?php

namespace App\Http\Controllers\Auth;

use App\Level;
use App\Auth as Auth_user;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;

use Illuminate\Support\Facades\Notification;
use App\Notifications\confirmationAccount;
use Illuminate\Http\Request;
use Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    use Notifiable;


    private $pilihan_guard = '';
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['pengusaha.guest', 'investor.guest']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:auth',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Auth
     */
    protected function create(array $data)
    {
        return Auth_user::create([
            'nama' => $data['nama'],
            'email' => $data['email'],
            'id_level' => $data['level'],
            'token_register' => $data['token_register'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function showRegisterForm()
    {
        $level = Level::all();
        return view('public.register')->with(compact('level'));
    }
    protected function guard()
    {
        return Auth::guard($this->pilihan_guard);
    }

    protected function register(Request $request){
        $validation = $this->validator($request->toArray());
        
        if($validation->fails()){
            $errors = $validation->errors();
            return redirect(route('authregister'))
                        ->with(compact('errors'))
                        ->withInput();
        }else{
            if($request['password'] === $request['password_confirmation']){
                $checked = Auth_user::where('email', $request['email'])->first();
                if($checked == null){
                    $this->pilihan_guard = $this->checkRegisterAsforGuard($request['level']);
                    $request['token_register'] = str_random(25).(string)date('YmdHis');
                    $data = $this->create($request->toArray())->toArray();
                    $new_member = Auth_user::find($data['id']);
                    Notification::send($new_member,new confirmationAccount($request['nama'], $request['token_register']));
                    $request->session()->flash('register_success', 'Kami sudah mengirimkan link aktivasi pada alamat email anda, silakan periksa email anda!.');
                    return redirect(route('authlogin'));
                }
                // return redirect(route('register')); // email sudah digunakan
            }
            return redirect(route('authregister')); //password tidak cocok dengan confirm password
        }
        
  }

  public function confirmRegister(Request $request, $token_register){
    $checked = Auth_user::where('token_register', $token_register)->first();
    if($checked != null){
        $checked->token_register = null;
        $checked->save();
        $request->session()->flash('account-active', 'Akun Anda sudah aktif. Silahkan login.');
        return redirect(route('authlogin'));
    }
    return redirect(url('/404'));
  }

  public function checkRegisterAsforGuard($id){
      if($id == 1){
        return 'pengusaha';
      }
      else if($id == 2){
        return 'investor';
      }
  }

}
