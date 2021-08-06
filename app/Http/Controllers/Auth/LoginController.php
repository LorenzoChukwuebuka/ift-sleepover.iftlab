<?php


namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends \App\Http\Controllers\Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:web')->except('logout');
        $this->middleware('guest:vendor')->except('logout');
    }

    public function showAdminLoginForm()
    {
        $action = "index";
        return view("login", compact("action"));
    }

    public function submitAdminLoginForm(Request $request)
    {
        $request->validate([
            "email"=>'required|email',
            "password"=>"required"
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/vendor/dashboard');
        }

        return back()->withInput($request->only('email', 'remember'))->with("error", "Invalid login credentials");
    }

    public function showVendorLoginForm()
    {
        $register = "vendor-register";
        return view("login", compact("register"));
    }

    public function submitVendorLoginForm(Request $request)
    {
        $request->validate([
            "email"=>'required|email',
            "password"=>"required"
        ]);

        if (Auth::guard('vendor')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/vendor/dashboard');
        }

        return back()->withInput($request->only('email', 'remember'))->with("error", "Invalid login credentials");
    }

    public function showUserLoginForm()
    {
        $register = "register";
        return view("login", compact("register"));
    }

    public function submitUserLoginForm(Request $request)
    {
        $request->validate([
            "email"=>'required|email',
            "password"=>"required"
        ]);

        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/dashboard');
        }

        return back()->withInput($request->only('email', 'remember'))->with("error", "Invalid login credentials");
    }

    public function logout()
    {
        if (Auth::check())
        {
            Auth::guard("web")->logout();
        }

        if (Auth::guard("admin")->check())
        {
            Auth::guard("admin")->logout();
        }

        if (Auth::guard("vendor")->check())
        {
            Auth::guard("vendor")->logout();
        }

        return redirect()->route("index");
    }
}
