<?php

namespace App\Http\Controllers;

use App\Mail\Sendtome;
use Illuminate\Http\Request;
use App\Models\Gif;
use App\Models\Video;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){

        $gifs=Gif::where('status',1)->take(5)->orderBy('id', 'desc')->get();
        // $twods=Twod::where('status',1)->orderBy('id','desc')->get();
        // $threeds=Threed::where('status',1)->orderBy('id','desc')->get();
        // $vfxs=Vfx::where('status',1)->orderBy('id','desc')->get();
        // $walks=Walk::where('status',1)->orderBy('id','desc')->get();
        // $brands=Brand::where('status',1)->orderBy('id','desc')->get();
        // $webs=Web::where('status',1)->orderBy('id','desc')->get();
        // $voices=Voice::where('status',1)->orderBy('id','desc')->get();
        $videos=Video::where('status',1)->paginate(6);





        return view('welcome',['gifs'=>$gifs,'videos'=>$videos]);

        // return view('welcome',['gifs'=>$gifs,'twods'=>$twods,'threeds'=>$threeds,'vfxs'=>$vfxs,'walks'=>$walks,'brands'=>$brands,'webs'=>$webs,'voices'=>$voices]);
    }



    public function twod(){

        $gifs=Gif::where('status',1)->take(5)->orderBy('id', 'desc')->get();

        $twods=Video::where('tag',"2d")->where('status',1)->paginate(6);





        return view('Twod.hometwod',['gifs'=>$gifs,'twods'=>$twods]);

        // return view('welcome',['gifs'=>$gifs,'twods'=>$twods,'threeds'=>$threeds,'vfxs'=>$vfxs,'walks'=>$walks,'brands'=>$brands,'webs'=>$webs,'voices'=>$voices]);
    }


    public function threed(){

        $gifs=Gif::where('status',1)->take(5)->orderBy('id', 'desc')->get();

        $threeds=Video::where('tag',"3d")->where('status',1)->paginate(6);


        return view('Threed.homethreed',['gifs'=>$gifs,'threeds'=>$threeds]);

        // return view('welcome',['gifs'=>$gifs,'twods'=>$twods,'threeds'=>$threeds,'vfxs'=>$vfxs,'walks'=>$walks,'brands'=>$brands,'webs'=>$webs,'voices'=>$voices]);
    }


    public function vfx(){

        $gifs=Gif::where('status',1)->take(5)->orderBy('id', 'desc')->get();
        $vfxs=Video::where('tag',"Vfx")->where('status',1)->paginate(6);
        return view('Vfx.homevfx',['gifs'=>$gifs,'vfxs'=>$vfxs]);
        // return view('welcome',['gifs'=>$gifs,'twods'=>$twods,'threeds'=>$threeds,'vfxs'=>$vfxs,'walks'=>$walks,'brands'=>$brands,'webs'=>$webs,'voices'=>$voices]);
    }

    public function walk(){

        $gifs=Gif::where('status',1)->take(5)->orderBy('id', 'desc')->get();
        $walks=Video::where('tag',"Architecture Walkthrough")->where('status',1)->paginate(6);
        return view('Walkthrough.homewalk',['gifs'=>$gifs,'walks'=>$walks]);
        // return view('welcome',['gifs'=>$gifs,'twods'=>$twods,'threeds'=>$threeds,'vfxs'=>$vfxs,'walks'=>$walks,'brands'=>$brands,'webs'=>$webs,'voices'=>$voices]);
    }
    public function brand(){

        $gifs=Gif::where('status',1)->take(5)->orderBy('id', 'desc')->get();
        $brands=Video::where('tag',"Business Branding")->where('status',1)->paginate(6);
        return view('Branding.homebrand',['gifs'=>$gifs,'brands'=>$brands]);
        // return view('welcome',['gifs'=>$gifs,'twods'=>$twods,'threeds'=>$threeds,'vfxs'=>$vfxs,'walks'=>$walks,'brands'=>$brands,'webs'=>$webs,'voices'=>$voices]);
    }
    public function web(){

        $gifs=Gif::where('status',1)->take(5)->orderBy('id', 'desc')->get();
        $webs=Video::where('tag',"Website and App Development")->where('status',1)->paginate(6);
        return view('Web_dev.homeweb',['gifs'=>$gifs,'webs'=>$webs]);
        // return view('welcome',['gifs'=>$gifs,'twods'=>$twods,'threeds'=>$threeds,'vfxs'=>$vfxs,'walks'=>$walks,'brands'=>$brands,'webs'=>$webs,'voices'=>$voices]);
    }
    public function voice(){

        $gifs=Gif::where('status',1)->take(5)->orderBy('id', 'desc')->get();
        $voices=Video::where('tag',"Voiceover")->where('status',1)->paginate(6);
        return view('Voice.homevoice',['gifs'=>$gifs,'voices'=>$voices]);
        // return view('welcome',['gifs'=>$gifs,'twods'=>$twods,'threeds'=>$threeds,'vfxs'=>$vfxs,'walks'=>$walks,'brands'=>$brands,'webs'=>$webs,'voices'=>$voices]);
    }

//     public function enquiry(Request $request){
//         $email="gauravdabhade20@gmail.com";

//         Mail::to($email)->send(new Sendtome($request->fname,$request->lname,$request->email,$request->pname,$request->description));

// return view('welcome');
//     }




}
