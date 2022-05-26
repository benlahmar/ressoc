<?php

use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\PostController;
use App\Models\Consultation;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', PostController::class);

Route::get('consultations/abc',[ConsultationController::class,'test1']);
Route::resource('consultations',ConsultationController::class);

Route::get('/like',function(Request $request){
     $like=new Like();
     $like->type=$request->type;
     $like->date=now();
     $like->consultation();
     $c=Consultation::find($request->idpost);
     $c->likes()->save($like);     

     return view("consultation.show",
        ['ct'=>$c]);
        //or redirect
    
});

Route::get('/consultations/{idpost}/like2',
function(Request $request, $idpost){
    if($request->ajax()){   
     $c=Consultation::find($request->idpost);
        return count($c->likes);
    }else
    return "not_ajax_call";

});