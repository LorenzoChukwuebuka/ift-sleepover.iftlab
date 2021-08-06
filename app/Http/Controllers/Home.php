<?php


namespace App\Http\Controllers;


use App\Models\Space;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function showVendorUrl(Request $request)
    {
        /**
         * this method controls what users view as the vendors product
         */
        /**
         * before we continue, we will make sure user exist
         */
        $user = \App\Models\Vendor::where("franchise", $request->name)->first();
        if (empty($user))
        {
            abort(403, 'Vendor Not Found.');
        }

        /**
         * first thing is to generate search data
         */
        $q =  $request->input('q');
        $category =  $request->input('category');
        $bedroom =  $request->input('bedroom');
        $bathroom =  $request->input('bathroom');

        $spaces = Space::where("status", 1)
            ->where('bed_space', 'like', '%'.$bedroom.'%')
            ->orWhere('bathroom', 'like', '%'.$bathroom.'%')
            ->paginate(2);

        $spaces->append([
            "q"=>$q,
            "category"=>$category,
            "bedroom"=>$bedroom,
            "bathroom"=>$bathroom
        ]);

        $franchise = $request->name;
        return view("vendor.index", compact('spaces', 'franchise'));
    }

    public function showSpecificProperty(Request $request)
    {
        $headerClass = false;
        $space = Space::find($request->id);
        $images = [];
        return view("view-space", compact("headerClass", "space", "images"));
    }
}
