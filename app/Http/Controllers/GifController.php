<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Gif;
use Illuminate\Support\Facades\Auth;

class GifController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {

        return view('admin.Gif.addGif');

    }
    public function all_index()
    {

        $gifs=Gif::all();

        return view('admin.Gif.allGif',['gifs'=>$gifs]);

    }

    public function uploads(Request $request){


        $uploaded_file=$request->file()['file'];
        $videoName=Carbon::now()->timestamp.$uploaded_file->getClientOriginalName();
        $uploaded_file->move('Gif',$videoName);
        // $uploaded_file=$request->file()->store('uploads', 'public');

        session(['Gif' => $videoName]);
        return response()->json('success');
    }



    public function store(Request $request)
    {
        $data['gif']=session('Gif');
        $user = Auth::user();
        $gif = new Gif;
        $gif->gif=$data['gif'];
        $gif->title = $request->title;
        $gif->user_id = $user->id;
        $gif->save();
        return redirect('/dashboard/add_gif');
    }

    public function save(Request $request)
    {
        $data['gif']=session('Gif');
        $user = Auth::user();
        $gif = new Gif;
        $gif->gif=$data['gif'];
        $gif->title = $request->title;
        $gif->user_id = $user->id;
        $gif->status=0;
        $gif->save();
        return redirect('/dashboard/add_gif');
    }



    public function change_status($id, Request $request)
    {
        DB::table('gifs')
            ->where('id', $id)
            ->update(['status' => $request->status]);
        return response()->json("success");
    }
}
