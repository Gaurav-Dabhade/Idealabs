<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Brand;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {

        return view('admin.Branding.addBrand');

    }

    public function uploads(Request $request){


        $uploaded_file=$request->file()['file'];
        $videoName=Carbon::now()->timestamp.$uploaded_file->getClientOriginalName();
        $uploaded_file->move('Brand_video',$videoName);
        // $uploaded_file=$request->file()->store('uploads', 'public');

        session(['Brand_video' => $videoName]);
        return response()->json('success');
    }



    public function store(Request $request)
    {
        $data['brand_video']=session('Brand_video');
        $user = Auth::user();
        $brand = new Brand;
        $brand->brand=$data['brand_video'];
        $brand->title = $request->title;
        $brand->user_id = $user->id;

        if ($title_file = $request->file('titleImage')) {

            $name1 = $title_file->getClientOriginalName();
            $title_file->move('titleImage', $name1);
            $brand->titleImage = $name1;
        }
        $brand->save();
        return redirect('/dashboard/add_brand');
    }
}
