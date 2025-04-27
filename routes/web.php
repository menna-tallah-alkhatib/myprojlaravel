<?php
use App\Http\Controllers\SiteOne\SiteOneController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/message',function(){ 
    return view ('message'); 
});
Route::prefix ('site1')->name('site1.')->controller(SiteOneController::class)->group 
(function(){
  Route::get('/master','master')->name('master');
  Route::get('/home','home')->name('home');
  Route::get('/Portfolio','Portfolio')->name('Portfolio');
  Route::get('/about','about')->name('about');
  Route::get('/contact','contact')->name('contact');
  Route::post('/contact','postcontact')->name('postcontact');
  Route::get('/ok','ok')->name('ok');
  Route::get('/viewcontact','viewcontact')->name('viewcontact');
  Route::get('/edit/{id}','edit')->name('edit');
  Route::post('/update','update')->name('update');
});
