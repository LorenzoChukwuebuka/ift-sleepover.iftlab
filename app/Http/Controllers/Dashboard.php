<?php


namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

class Dashboard extends Controller
{
    public function __construct()
    {
        $this->middleware("vendor_or_user");
    }

    public function profile(Request $request)
    {
        if (Auth::guard("vendor")->check())
        {
            $type = "vendor";
            $user = Auth::guard("vendor")->user();
        }else
        {
            $type = "user";
            $user = Auth::guard("web")->user();
        }
        $routeName = $request->route()->getName();
        return view("profile", compact("user", "type", "routeName"));
    }

    public function profileEdit(Request $request)
    {
        if (Auth::guard("vendor")->check())
        {
            $type = "vendors";
            $model = "\App\Models\Vendor";
            $user = Auth::guard("vendor")->user();
        }else
        {
            $type = "users";
            $model = "User";
            $user = Auth::guard("web")->user();
        }

        $request->validate([
            "fname"=>"required",
            "lname"=>"required",
            "email"=>'required|email',
        ]);

        $user = Auth::guard()->user();

        $model = $model::find($user->id);
        $model->first_name = $request->fname;
        $model->last_name = $request->lname;
        $model->email = $request->email;
        $model->save();
        return back()->with("success", "Update success");
    }

    public function index(Request $request)
    {
        $user = Auth::guard()->user();
        if (Auth::guard("vendor")->check())
        {
            $type = "vendor";
        }else
        {
            $type = "user";
        }

        $routeName = $request->route()->getName();

        return view("dashboard", compact("type", "user", "routeName"));
    }

    public function showChangePassword(Request $request)
    {
        if (Auth::guard("vendor")->check())
        {
            $user = Auth::guard("vendor")->user();
            $type = "vendor";
        }else
        {
            $user = Auth::guard("web")->user();
            $type = "user";
        }
        $routeName = $request->route()->getName();

        return view("change-password", compact("type", "routeName", "user"));
    }

    public function submitChangePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6|confirmed',
        ]);

        if (Auth::guard("vendor")->check())
        {
            $user = Auth::guard("vendor")->user();
            $model = "\App\Models\Vendor";
        }else
        {
            $user = Auth::guard("web")->user();
            $model = "User";
        }
        $model = $model::find($user->id);
        if (Hash::check($request->current_password, $user->password))
        {
            $model->password = Hash::make($request->password);
            $model->save();
        }
        return back()->with("success", "password change was successful");
    }
}
