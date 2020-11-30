<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectCMSNotes;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\ManyToManyForms;
use App\Models\HasManyThroughTables;
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

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});




Auth::routes();

/*Auth::routes([
  'register' => false,
  'verify' => true,
  'reset' => false
]);*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('{path}','App\Http\Controllers\HomeController@index')->where( 'path','([-a-z0-9_\s]+)' );



Route::get('/ProjectNoteCMS', [ProjectCMSNotes::class, 'cmsNotes'] )->name('proj.cms');

Route::get('/ProjDocu', [ProjectCMSNotes::class, 'staticHTML'] )->name('docu.static');

//Route::get('/ProjectFullNotesCMS', [ProjectCMSNotes::class, 'cmsNotesFull'] )->name('projfull.notes');


Route::get('/LaravelSuide/{id}', function($id){
  echo User::findOrFail($id)->usersHaveManyToManyForms;
});

Route::get('/OutputResultTemplateWebDesign', [ProjectCMSNotes::class, 'webTemplates']);
Route::get('ReadGet', 'App\Http\Controllers\ViewPDFController@index');
Route::get('ReadGet/{id}', 'App\Http\Controllers\ViewPDFController@show');
Route::get('ReadGet/download/{file}', 'App\Http\Controllers\ViewPDFController@download');


/*PDFJS_EXPRESS*/
Route::get('Pdfjsindex', 'App\Http\Controllers\ViewPDFController@pdfjsindex');
Route::get('Pdfjsformhtml', 'App\Http\Controllers\ViewPDFController@pdfjsformhtml');
Route::get('Pdfjstronhtml', 'App\Http\Controllers\ViewPDFController@pdfjstronhtml');
/*PDFJS_EXPRESS*/

/*The way*/
Route::get('/Laravelguide', [ProjectCMSNotes::class, 'laravelGuide']);
Route::get('/WebDevMisc', [ProjectCMSNotes::class, 'VarietyDevsDo']);



  /*Route::get('/laravel-guide-cheet-sheet', [ProjectCMSNotes::class, 'laravelGuide']);

  Bat kailangan mag log-in parang tanga
  */
