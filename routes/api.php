<?php
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources(['user' => 'App\Http\Controllers\API\UserController']);

Route::get('profile', 'App\Http\Controllers\API\UserController@profile');
Route::get('findAnyUsersOnAdmin', 'App\Http\Controllers\API\UserController@searchReturnsForAdmin');

Route::put('profile', 'App\Http\Controllers\API\UserController@updateProfileInfo');

Route::apiResources(['keyOfMtMFs' => 'App\Http\Controllers\API\ManyToManyFormsController']);

Route::get('readDataMtMFTable', 'App\Http\Controllers\API\ManyToManyFormsController@many_to_many_forms_table');
Route::get('vuejsCommu', 'App\Http\Controllers\API\ManyToManyFormsController@vueCompReturns');
Route::get('findAny', 'App\Http\Controllers\API\ManyToManyFormsController@searchReturnsForUsers');
Route::get('customGetMtMFs', 'App\Http\Controllers\API\ManyToManyFormsController@returnLikeUser');


Route::get('uploadedFile', 'App\Http\Controllers\API\ManyToManyFormsController@getUserID_Who_Uploaded_The_File_First');
Route::put('uploadedFile', 'App\Http\Controllers\API\ManyToManyFormsController@checkUploadedFileFirst_Before_Storing_To_The_Server');

Route::post('/bulk-opts/{id}', 'App\Http\Controllers\API\ManyToManyFormsController@bulkopts');
Route::delete('/bulk-opts-del/{id}', 'App\Http\Controllers\API\ManyToManyFormsController@bulkoptsDelete');
Route::apiResources(['viewKeyPDFs' => 'App\Http\Controllers\ViewPDFController']);
