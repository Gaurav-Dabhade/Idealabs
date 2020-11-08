<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Threed;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ThreedController extends Controller
{
    public function index()
    {

        return view('admin.3D.add3D');

    }

    public function uploads(Request $request){


        $uploaded_file=$request->file()['file'];
        $videoName=Carbon::now()->timestamp.$uploaded_file->getClientOriginalName();
        $uploaded_file->move('3D_video',$videoName);
        // $uploaded_file=$request->file()->store('uploads', 'public');

        session(['3D_video' => $videoName]);
        return response()->json('success');
    }



    public function store(Request $request)
    {
        $data['3d_video']=session('3D_video');
        $user = Auth::user();
        $threed = new Threed;
        $threed->threed=$data['3d_video'];
        $threed->title = $request->title;
        $threed->user_id = $user->id;

        if ($title_file = $request->file('titleImage')) {

            $name1 = $title_file->getClientOriginalName();
            $title_file->move('titleImage', $name1);
            $threed->titleImage = $name1;
        }
        $threed->save();
        return redirect('/dashboard/add_3d');
    }

}
