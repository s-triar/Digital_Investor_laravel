<?php

namespace App\Http\Controllers\Auth;


use App\Auth as Auth_user;
use App\Pengusaha;
use App\Investor;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Hesto\MultiAuth\Traits\LogsoutGuard;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers, LogsoutGuard {
        LogsoutGuard::logout insteadof AuthenticatesUsers;
    }

    private $pilihan_guard = '';

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['investor.guest','pengusaha.guest'])->except('logout');
    }
    public function showLoginForm()
    {
        return view('public.login');
    }
    protected function guard()
    {
        if(Auth::guard('pengusaha')->check()){
            $this->pilihan_guard = 'pengusaha';
        }
        else if (Auth::guard('pengusaha')->check()){
            $this->pilihan_guard= 'investor';
        }
        return Auth::guard($this->pilihan_guard);
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
    }
    public function login(Request $request)
    {
        $request->remember = false;
        $validation = $this->validator($request->toArray());
        // Check has errors or not
        if(!$validation->fails()){
            $account = Auth_user::where('email', $request->email)->first();
            if(!is_null($account)){
                // check if account is active
                if($account->token_register == null){
                    if($account->id_level == 1){
                        $this->pilihan_guard = 'pengusaha';
                    }
                    else if($account->id_registered_as == 2){
                        $this->pilihan_guard = 'investor';
                    }
                    if(Auth::guard($this->pilihan_guard)->attempt(['email' => $request->email, 'password' => ($request->password)], $request->remember)){
                        $pengusaha = new Pengusaha();
                        if($pengusaha->checkIfFilledProfil(Auth::guard($this->pilihan_guard)->user()->id) != null){
                            return redirect(route($this->pilihan_guard.'.home'));
                        }
                        else{
                            return redirect(route($this->pilihan_guard.'.isiprofile'));
                        }
                    }else{
                        $request->session()->flash('login-error-password', 'Password Salah');
                        return redirect(route('authlogin'));
                    }
                }
                else{
                    $request->session()->flash('login-error', 'Akun belum aktif. Silahkan aktifkan akun terlebih dahulu.');
                    return redirect(route('authlogin'));
                }
            }
            else{
                $request->session()->flash('login-error-email', 'Email tidak terdaftar.');
                return redirect(route('authlogin'));
            }
        }else{
            // $request->session()->flash('login-error', $validation->errors());
            $errors = $validation->errors();
            return redirect(route('authlogin'))->with(compact('errors'));
        }
    }
}
