<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Staff;
use Auth;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

//    use AuthenticatesUsers;

    public function getLogin()
    {
        return view('admin.auth.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::guard('admins')->attempt($login)) {

            return redirect('admin/index');
        } else {

            return redirect()->back()->with('status', 'Email or Password not correctly');
        }
    }

    public function getLogout()
    {
        Auth::guard('admins')->logout();

        return redirect()->route('staff.getLogin');
    }

    public function getIndex()
    {
        $staff = Staff::all();

        return view('admin.staff.index', compact('staff'));
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
//    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('guest')->except('logout');
//    }
}
