<?php

namespace App\Http\Controllers\Staff\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Timesheet;
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
          return view('staff.auth.login');
      }

      public function postLogin(LoginRequest $request)
      {
          $login = [
              'email' => $request->email,
              'password' => $request->password,
          ];
          if (Auth::guard('staffs')->attempt($login)) {

              return redirect('staff/index');
          } else {

              return redirect()->back()->with('status', 'Email or Password not correctly');
          }
      }

      public function getLogout()
      {
          Auth::guard('staffs')->logout();

          return redirect()->route('admin.getLogin');
      }

      public function getIndex()
      {
          $timesheet = Timesheet::all();

          return view('staff.timesheet.index', compact('timesheet'));
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
