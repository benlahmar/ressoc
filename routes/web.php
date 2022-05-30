<?php

use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ContributionController;
use App\Http\Controllers\Permissioncontroller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Rolecontroller;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\UserController;
use App\Models\Consultation;
use App\Models\Contribution;
use App\Models\Like;
use App\Models\User;
use App\Notifications\ConsultationNotif;
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

Route::resource('contributions',ContributionController::class);
Auth::routes(['verify' => true]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('permissions',Permissioncontroller::class);

Route::resource('roles',Rolecontroller::class);
Route::get('admin/users',[UserController::class,'edit']);

Route::resource('users',UserController::class);


// La page où on présente les liens de redirection vers les providers
Route::get("login-register", [SocialiteController::class, "loginRegister"]);

// La redirection vers le provider
Route::get("redirect/{provider}", [SocialiteController::class,"redirect"])->name('socialite.redirect');

// Le callback du provider
Route::get("callback/{provider}", [SocialiteController::class,"callback"])->name('socialite.callback');


Route::get('/notif',function(){
    $user=User::find(1);

    $user->notify(new ConsultationNotif());

    return $user->notifications;
});

Route::get('/readnotif', function(){

   // $user=User::find(1);
   // $user->unreadNotifications->markAsRead();
    //auth()->user()->unreadNotifications->markAsRead();
    return auth()->user()->unreadNotifications;


});