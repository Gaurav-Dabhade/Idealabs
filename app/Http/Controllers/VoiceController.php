<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Voice;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoiceController extends Controller
{
    public function index()
    {

        return view('admin.Voiceover.addVoice');

    }

    public function uploads(Request $request){


        $uploaded_file=$request->file()['file'];
        $videoName=Carbon::now()->timestamp.$uploaded_file->getClientOriginalName();
        $uploaded_file->move('Voice_video',$videoName);
        // $uploaded_file=$request->file()->store('uploads', 'public');

        session(['Voice_video' => $videoName]);
        return response()->json('success');
    }



    public function store(Request $request)
    {
        $data['voice_video']=session('Voice_video');
        $user = Auth::user();
        $voice = new Voice;
        $voice->voice=$data['voice_video'];
        $voice->title = $request->title;
        $voice->user_id = $user->id;

        if ($title_file = $request->file('titleImage')) {

            $name1 = $title_file->getClientOriginalName();
            $title_file->move('titleImage', $name1);
            $voice->titleImage = $name1;
        }
        $voice->save();
        return redirect('/dashboard/add_voice');
    }
}
