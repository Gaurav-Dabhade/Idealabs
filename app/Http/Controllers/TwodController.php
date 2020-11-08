<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Twod;
use Illuminate\Support\Facades\Auth;
class TwodController extends Controller
{


    public function index()
    {

        return view('admin.2D.add2D');

    }

    public function uploads(Request $request){


        $uploaded_file=$request->file()['file'];
        $videoName=Carbon::now()->timestamp.$uploaded_file->getClientOriginalName();
        $uploaded_file->move('2D_video',$videoName);
        // $uploaded_file=$request->file()->store('uploads', 'public');

        session(['2D_video' => $videoName]);
        return response()->json('success');
    }



    public function store(Request $request)
    {
        $data['2d_video']=session('2D_video');
        $user = Auth::user();
        $twod = new Twod;
        $twod->twod=$data['2d_video'];
        $twod->title = $request->title;
        $twod->user_id = $user->id;

        if ($title_file = $request->file('titleImage')) {

            $name1 = $title_file->getClientOriginalName();
            $title_file->move('titleImage', $name1);
            $twod->titleImage = $name1;
        }
        $twod->save();
        return redirect('/dashboard/add_2d');
    }

}
