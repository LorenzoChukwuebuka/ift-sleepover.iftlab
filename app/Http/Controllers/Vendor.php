<?php


namespace App\Http\Controllers;


use App\Models\Attachment;
use App\Models\Posts;
use App\Models\Space;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Vendor extends Controller
{
    public function __construct()
    {
        $this->middleware("auth:vendor");
    }

    public function showAddSpaceForm(Request $request)
    {
        $type = "vendor";
        $routeName = $request->route()->getName();
        $user = Auth::guard()->user();
        return view("add-space", compact("type", "routeName", "user"));
    }

    public function submitAddSpaceForm(Request $request)
    {
        /**
         * create post first
         */
        $space = Space::create([
            'user_id'=>Auth::guard()->user()->id,
            'name'=>$request->title,
            'desc'=>$request->desc,
            'bed_space'=>$request->bedroom,
            'bathroom'=>$request->bathroom,
            'price'=>$request->price,
            'discount'=>$request->discount,
        ]);

        /**
         * get all images and store
         */

        if(isset($_FILES['file']))
        {
            $total = count($_FILES['file']['name']);

            for( $i=0 ; $i < $total ; $i++ ) {
                //Get the temp file path
                $tmpFilePath = $_FILES['file']['tmp_name'][$i];

                //Make sure we have a file path
                if ($tmpFilePath != ""){
                    //Setup our new file path
                    $newFilePath = "./images/uploads/" . $_FILES['file']['name'][$i].time();

                    //Upload the file into the temp dir
                    if(move_uploaded_file($tmpFilePath, $newFilePath)) {

                        Attachment::create([
                            'user_id'=>Auth::guard()->user()->id,
                            'space_id'=>$space->id,
                            'file'=>$newFilePath
                        ]);

                    }
                }
            }
        }

        return back()->with("success", "Added successfully");
    }
}
