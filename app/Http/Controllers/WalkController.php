<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Walk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WalkController extends Controller
{
    public function index()
    {

        return view('admin.Walkthrough.addWalk');

    }

    public function uploads(Request $request){


        $uploaded_file=$request->file()['file'];
        $videoName=Carbon::now()->timestamp.$uploaded_file->getClientOriginalName();
        $uploaded_file->move('Walk_video',$videoName);
        // $uploaded_file=$request->file()->store('uploads', 'public');

        session(['Walk_video' => $videoName]);
        return response()->json('success');
    }



    public function store(Request $request)
    {
        $data['walk_video']=session('Walk_video');
        $user = Auth::user();
        $walk = new Walk;
        $walk->walk=$data['walk_video'];
        $walk->title = $request->title;
        $walk->user_id = $user->id;

        if ($title_file = $request->file('titleImage')) {

            $name1 = $title_file->getClientOriginalName();
            $title_file->move('titleImage', $name1);
            $walk->titleImage = $name1;
        }
        $walk->save();
        return redirect('/dashboard/add_walk');
    }
}
