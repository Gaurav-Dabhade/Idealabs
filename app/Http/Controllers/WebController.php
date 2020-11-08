<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Web;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    public function index()
    {

        return view('admin.Webdevelopment.addWeb');

    }

    public function uploads(Request $request){


        $uploaded_file=$request->file()['file'];
        $videoName=Carbon::now()->timestamp.$uploaded_file->getClientOriginalName();
        $uploaded_file->move('Web_video',$videoName);
        // $uploaded_file=$request->file()->store('uploads', 'public');

        session(['Web_video' => $videoName]);
        return response()->json('success');
    }



    public function store(Request $request)
    {
        $data['web_video']=session('Web_video');
        $user = Auth::user();
        $web = new Web;
        $web->web=$data['web_video'];
        $web->title = $request->title;
        $web->user_id = $user->id;

        if ($title_file = $request->file('titleImage')) {

            $name1 = $title_file->getClientOriginalName();
            $title_file->move('titleImage', $name1);
            $web->titleImage = $name1;
        }
        $web->save();
        return redirect('/dashboard/add_web');
    }
}
