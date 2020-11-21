<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\GifController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TwodController;
use App\Http\Controllers\ThreedController;
use App\Http\Controllers\VfxController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\WalkController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\VoiceController;
use Illuminate\Support\Facades\Route;
use App\Models\Gif;
use App\Models\Video;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index']);




Route::get('/all_twod',[HomeController::class,'twod']);
Route::get('/all_threed',[HomeController::class,'threed']);
Route::get('/all_vfx',[HomeController::class,'vfx']);
Route::get('/all_walk',[HomeController::class,'walk']);
Route::get('/all_brand',[HomeController::class,'brand']);
Route::get('/all_web',[HomeController::class,'web']);
Route::get('/all_voice',[HomeController::class,'voice']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

    $gifs=Gif::all()->where('status',1);
    $videos=Video::all()->where('status',1);
    return view('dashboard',['gifs'=>$gifs,'videos'=>$videos]);
})->name('dashboard');
// Start Gif
Route::get('/dashboard/add_gif',[GifController::class,'index']);
Route::get('/dashboard/all_gif',[GifController::class,'all_index']);
Route::post('/dashboard/all_gif/published/{id}',[GifController::class,'change_status']);
Route::post('/dashboard/all_gif/draft/{id}',[GifController::class,'change_status']);
Route::post('/uploads',[GifController::class,'uploads']);

Route::post('/dashboard/store_gif',[GifController::class,'store']);

Route::post('/dashboard/save_gif',[GifController::class,'save']);
//end gif


Route::get('/dashboard/all_videos',[VideoController::class,'all_index']);


Route::post('/dashboard/all_videos/published/{id}',[VideoController::class,'change_status']);
Route::post('/dashboard/all_videos/draft/{id}',[VideoController::class,'change_status']);



//start 2d
Route::get('/dashboard/add_2d',[TwodController::class,'index']);

Route::post('/2d_uploads',[VideoController::class,'uploads']);

Route::post('/dashboard/store_2d',[VideoController::class,'store']);


//end 2d


//start 3d
Route::get('/dashboard/add_3d',[ThreedController::class,'index']);

Route::post('/3d_uploads',[VideoController::class,'uploads']);

Route::post('/dashboard/store_3d',[VideoController::class,'store']);
//end 3d

//start Vfx
Route::get('/dashboard/add_vfx',[VfxController::class,'index']);

Route::post('/vfx_uploads',[VideoController::class,'uploads']);

Route::post('/dashboard/store_vfx',[VideoController::class,'store']);
//end Vfx


//start Architecture walkthrough
Route::get('/dashboard/add_walk',[WalkController::class,'index']);

Route::post('/walk_uploads',[VideoController::class,'uploads']);

Route::post('/dashboard/store_walk',[VideoController::class,'store']);
//end Architecture


//start Business Branding
Route::get('/dashboard/add_brand',[BrandController::class,'index']);

Route::post('/brand_uploads',[VideoController::class,'uploads']);

Route::post('/dashboard/store_brand',[VideoController::class,'store']);
//end Business Branding


//start web development
Route::get('/dashboard/add_web',[WebController::class,'index']);

Route::post('/web_uploads',[VideoController::class,'uploads']);

Route::post('/dashboard/store_web',[VideoController::class,'store']);
//end web development


//start voice
Route::get('/dashboard/add_voice',[VoiceController::class,'index']);

Route::post('/voice_uploads',[VideoController::class,'uploads']);

Route::post('/dashboard/store_voice',[VideoController::class,'store']);
//end voice


// Route::group(['prefix' => 'ajax'], function () {
//     Route::post('/article/more', 'HomeController@ajax');
// });
//Video model Routes
Route::post('/video/{id}',[VideoController::class,'get_video']);
Route::post('/video_brand/{id}',[VideoController::class,'get_brandvideo']);
Route::post('/video_3d/{id}',[VideoController::class,'get_3dvideo']);
Route::post('/video_2d/{id}',[VideoController::class,'get_2dvideo']);
Route::post('/video_vfx/{id}',[VideoController::class,'get_vfxvideo']);
Route::post('/video_voice/{id}',[VideoController::class,'get_voicevideo']);
Route::post('/video_walk/{id}',[VideoController::class,'get_walkvideo']);
Route::post('/video_web/{id}',[VideoController::class,'get_webvideo']);
//End video model routes


