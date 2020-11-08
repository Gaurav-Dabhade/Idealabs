<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Video;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class VideoController extends Controller
{

    public function all_index()
    {
        $videos=Video::all();
        return view('admin.allVideos',['videos'=>$videos]);

    }


    public function uploads(Request $request){


        $uploaded_file=$request->file()['file'];
        $videoName=Carbon::now()->timestamp.$uploaded_file->getClientOriginalName();
        $uploaded_file->move('Videos',$videoName);
        // $uploaded_file=$request->file()->store('uploads', 'public');

        session(['Videos' => $videoName]);
        return response()->json('success');
    }

    public function store(Request $request)
    {


        $data['video']=session('Videos');
        $user = Auth::user();
        $vid = new Video;
        $vid->video=$data['video'];
        $vid->title = $request->title;
        $vid->user_id = $user->id;
        $vid->tag=$request->tag;

        if ($title_file = $request->file('titleImage')) {

            $name1 = $title_file->getClientOriginalName();
            $title_file->move('titleImage', $name1);
            $vid->titleImage = $name1;
        }
        $vid->save();
        if($request->tag=="2d"){
            return redirect('/dashboard/add_2d');

        }elseif($request->tag=="3d"){
            return redirect('/dashboard/add_3d');
        }elseif($request->tag=="Vfx"){
            return redirect('/dashboard/add_vfx');
        }
        elseif($request->tag=="Business Branding"){
            return redirect('/dashboard/add_brand');
        }
        elseif($request->tag=="Architecture Walkthrough"){
            return redirect('/dashboard/add_walk');
        }
        elseif($request->tag=="Website and App Development"){
            return redirect('/dashboard/add_web');
        }
        elseif($request->tag=="Voiceover"){
            return redirect('/dashboard/add_voice');
        }else{
            return redirect('/dashboard');
        }

    }

// Fetch More Data
public function get_video($id){

$vid = Video::findOrFail($id);

return response()->json($vid);
}
public function get_brandvideo($id){

    $vid = Video::where('tag',"Business Branding")->where('status',1)->findOrFail($id);

    return response()->json($vid);
    }

    public function get_3dvideo($id){

        $vid = Video::where('tag',"3d")->where('status',1)->findOrFail($id);

        return response()->json($vid);
        }

        public function get_2dvideo($id){

            $vid = Video::where('tag',"2d")->where('status',1)->findOrFail($id);

            return response()->json($vid);
            }

    public function get_vfxvideo($id){

        $vid = Video::where('tag',"Vfx")->where('status',1)->findOrFail($id);

        return response()->json($vid);
    }
    public function get_voicevideo($id){

        $vid = Video::where('tag',"Voiceover")->where('status',1)->findOrFail($id);

        return response()->json($vid);
    }
    public function get_walkvideo($id){

        $vid = Video::where('tag',"Architecture Walkthrough")->where('status',1)->findOrFail($id);

        return response()->json($vid);
    }
    public function get_webvideo($id){

        $vid = Video::where('tag',"Website and App Development")->where('status',1)->findOrFail($id);

        return response()->json($vid);
    }

    public function change_status($id, Request $request)
    {
        DB::table('videos')
            ->where('id', $id)
            ->update(['status' => $request->status]);
        return response()->json("success");
    }
}
