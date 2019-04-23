<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function redirectTo()
    {
       if(Auth::user()->role == 1){
           return '/admin';
       }else{
           return '/';
       }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticated(Request $request, $user) // mặc định Laravel nó đã có rồi đâu cần code thê, ? minh dang dung version 5.6 ah
    {
        if (!$user->verified) {
            auth()->logout();
            return back()->with('warning', 'Tài khoản chưa được kích hoạt ! Vui lòng đăng nhập Gmail và nhấn vào đường link kích hoạt tài khoản');
        }
        return redirect()->intended($this->redirectPath());
    }
}
//bac bo cai nay di 