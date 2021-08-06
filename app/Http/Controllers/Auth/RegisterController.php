<?php


namespace App\Http\Controllers\Auth;


use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

class RegisterController extends \App\Http\Controllers\Controller
{
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:web');
        $this->middleware('guest:vendor');
    }

    public function showRegisterForm()
    {
        return view("register");
    }


    public function submitVendorRegisterForm(Request $request)
    {
        $routeName = Route::currentRouteName();

        switch ($routeName)
        {
            case "submit-vendor-register":
                $this->validate($request, [
                    'fname'   => 'required',
                    'lname'   => 'required',
                    'email'   => 'required|email|unique:vendors',
                    'password' => 'required|min:6|confirmed',
                    'franchise'=>'required|unique:vendors'
                ]);

                /**
                 * here we know its the vendor that's trying to register
                 * so we assign an model, $data
                 */
                $model = new Vendor();
                $data = [
                    "first_name"=>$request->fname,
                    "last_name"=>$request->lname,
                    "email"=>$request->email,
                    "password"=>Hash::make($request->password),
                    "franchise"=>$request->franchise
                ];
                break;
            default:
                $this->validate($request, [
                    'fname'   => 'required',
                    'lname'   => 'required',
                    'email'   => 'required|email|unique:users',
                    'password' => 'required|min:6|confirmed'
                ]);
                /**
                 * here we know its the user thats trying to register
                 */
                $model = new User();
                $data = [
                    "first_name"=>$request->fname,
                    "last_name"=>$request->lname,
                    "email"=>$request->email,
                    "password"=>Hash::make($request->password),
                ];
                break;
        }

        $model::create($data);

        return redirect()->route("vendor-login")->with("success", "Registration success");
    }

    public function showVendorRegisterForm()
    {
        $login = "vendor-login";
        return view("register", compact("login"));
    }

    public function showUserRegisterForm()
    {
        $login = "login";
        return view("register", compact("login"));
    }
}
