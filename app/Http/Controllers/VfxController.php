<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Vfx;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class VfxController extends Controller
{
    public function index()
    {

        return view('admin.Vfx.addVfx');

    }

    public function uploads(Request $request){


        $uploaded_file=$request->file()['file'];
        $videoName=Carbon::now()->timestamp.$uploaded_file->getClientOriginalName();
        $uploaded_file->move('Vfx_video',$videoName);
        // $uploaded_file=$request->file()->store('uploads', 'public');

        session(['Vfx_video' => $videoName]);
        return response()->json('success');
    }



    public function store(Request $request)
    {
        $data['vfx_video']=session('Vfx_video');
        $user = Auth::user();
        $vfx = new Vfx;
        $vfx->vfx=$data['vfx_video'];
        $vfx->title = $request->title;
        $vfx->user_id = $user->id;

        if ($title_file = $request->file('titleImage')) {

            $name1 = $title_file->getClientOriginalName();
            $title_file->move('titleImage', $name1);
            $vfx->titleImage = $name1;
        }
        $vfx->save();
        return redirect('/dashboard/add_3d');
    }
}
