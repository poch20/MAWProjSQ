<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\ManyToManyForms;
class ManyToManyFormsController extends Controller
{

  private $image_ext = ['jpg', 'jpeg', 'png', 'gif'];
  private $audio_ext = ['mp3', 'ogg', 'mpga'];
  private $video_ext = ['mp4', 'mpeg'];
  private $document_ext = ['doc', 'docx', 'pdf', 'odt'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $userInformation = auth('api')->user();
      $user_id = $userInformation->id;
      return User::findOrFail($user_id)->usersHaveManyToManyForms;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function getUserID_Who_Uploaded_The_File_First(){
      $userInformation = auth('api')->user();
      $user_id = $userInformation->id;
      return User::findOrFail($user_id)->usersHaveManyToManyForms;
    }
    public function checkUploadedFileFirst_Before_Storing_To_The_Server(Request $request){
      $userInformation = auth('api')->user();
      $user_id = $userInformation->id;
      User::findOrFail($user_id)->usersHaveManyToManyForms;
    }

    public function store(Request $request){
      if(isset($request['fileNameRegExAttr'])){
        echo 'dog';
      }
      $fileJSRegExMani = $request['fileNameRegExAttr'];
      $userInformation = auth('api')->user();
      $user_id = $userInformation->id;
      $max_size = (int)ini_get('upload_max_filesize') * 1000;
      $all_ext = implode(',', $this->allExtensions());
      $this->validate($request, [
          'fileNameAttr' => 'required|file|mimes:doc,pdf,docx,zip' . $all_ext . '|max:' . $max_size
      ]);
      $fetchedInputsFromInvoiceVue_APICall = ManyToManyForms::create([
        'id' => null,
        'description' => $request['descNameAttr'],
        'user_id' => $user_id,
      ]);

      $lastInsertedId = $fetchedInputsFromInvoiceVue_APICall->id;

      if($lastInsertedId != null){
        $typeAttrFile = $request['uploadFile'];
        $userSession = auth('api')->user();
        $idOfUserSession = $userSession->id;
        //------------------------------------------------------Laravel Model Eloquents------------------------------------------------------
        $associate_model_or_table = ManyToManyForms::firstWhere('id', $lastInsertedId);
        $foreign_parent = User::firstWhere('id', $user_id);
        //------------------------------------------------------Laravel Model Eloquents------------------------------------------------------

        //------------------------------------------------------Dynamic Linking------------------------------------------------------
        $attachment = $foreign_parent->usersHaveManyToManyForms()->attach($associate_model_or_table);
        //------------------------------------------------------Dynamic Linking------------------------------------------------------
        $userHasManyToManyForms = User::findOrFail($idOfUserSession)->usersHaveManyToManyForms;
        foreach ($userHasManyToManyForms as $forEachListObjects) {
          $forEachListObjects->id;
          $forEachListObjects->document_files;
        }
        $currMtMFsId = $forEachListObjects->id;
        $currDocuFileData = $forEachListObjects->document_files;

        if($typeAttrFile != $currDocuFileData){

          $uploadedFile = $request->file('fileNameAttr');
          $filenameExt = $fileJSRegExMani.'.'.$uploadedFile->getClientOriginalExtension();
          $fileType = $this->getType($filenameExt);
          $request->fileNameAttr->move('storage/', $filenameExt);

          //Storage::putFileAs('/public/'.$this->getUserDir(). '/' . $fileType . '/',$uploadedFile,$request['descNameAttr']. '.' . $filenameExt);
          //Storage::disk('local')->put('public/' . $request['descNameAttr'], file_get_contents($uploadedFile), 'public');
          // if (Storage::putFileAs('/public/' . $this->getUserDir() . '/' . $fileType . '/', $uploadedFile, $request['descNameAttr'] . '.' . $filenameExt)){
          //   echo 'dog';
          // }
          ManyToManyForms::where('id', $lastInsertedId)
                    ->where('document_files', 'sample.pdf')
                    ->update(['document_files' => $filenameExt]);


          // \Image::make($currDocuFileData)->save(public_path('file_uploads').$typeAttrFile);
          // $request->merge(['document_files' => $typeAttrFile]);
          /*
          $uniquePhotoAttrs = time().'.' . explode('/', explode(':', substr($typeAttrFile, 0, strpos($typeAttrFile, ';')))[1])[1];
          */
        }
        /*
        $data->typeAttrFile = $filename;
        //$flight = ManyToManyForms::find($lastInsertedId);
        // $flight->name = 'New Flight Name';
        $data->save();
        echo $fetchedInputsFromInvoiceVue_APICall->description;
        */
      }

    }

    public function show($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function many_to_many_forms_table() {
      $userInformation = auth('api')->user();
      $user_id = $userInformation->id;

      $userHasManyToManyForms = User::findOrFail($user_id)->usersHaveManyToManyForms;
      foreach ($userHasManyToManyForms as $value) {}
      $existingPivotDataTable = $value->id;
      $foreignKeyId = $value->user_id;
      return ManyToManyForms::where('user_id', '=', $foreignKeyId)->paginate(6);
      //return DB::table('many_to_many_forms')->where('user_id', '=', $foreignKeyId)->paginate();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
      $deleteRelatedTableById = ManyToManyForms::findOrFail($id);
      //return ['message' => 'User Deleted'];
      $deleteRelatedTableById->delete();
    }

    /*Custom Functions*/
    /*NOT USED*/
    public function returnLikeUser(){
      $userInformation = auth('api')->user();
      $user_id = $userInformation->id;

      $userHasManyToManyForms = User::findOrFail($user_id)->usersHaveManyToManyForms;
      foreach ($userHasManyToManyForms as $value) {}
      $existingPivotDataTable = $value->id;
      $foreignKeyId = $value->user_id;
      $users = ManyToManyForms::all()->where('user_id', '=', $foreignKeyId);
      return $users;

    }


    public function bulkopts(Request $request, $id=null){
      if(isset($request['checkboxNameAttrVal'])){
        //gettype($request['checkboxNameAttrVal']);

        $fileId = $request['checkboxNameAttrVal'];

        $anArr = array($fileId);
        $trueArr = explode('","', trim($fileId, '"'));

        foreach ($trueArr as $key => $value) {
          echo $value, "\n";
          $request['selectTagNameAttrBulkOpts'];
          if($request['selectTagNameAttrBulkOpts'] === 'Delete'){
            $single_user_id = explode(',' , $id);
            foreach($single_user_id as $id) {
                ManyToManyForms::findOrFail($id)->delete();
            }
            //return ['message' => 'User Deleted'];
          }
        }
      }
    }


    public function bulkoptsDelete($id){
      echo 'dog';
    }
    // public function search(){
    //
    //     if ($search = \Request::get('q')) {
    //         $users = User::where(function($query) use ($search){
    //             $query->where('name','LIKE',"%$search%")
    //                     ->orWhere('email','LIKE',"%$search%");
    //         })->paginate(20);
    //     }else{
    //         $users = User::latest()->paginate(5);
    //     }
    //
    //     return $users;
    //
    // }
    public function searchReturnsForUsers(){
      if($search = \Request::get('anyVar')){
        $usersHasManyForms = ManyToManyForms::where(function($queryStrings) use ($search){
          $queryStrings->where('description','LIKE',"%$search%")
                ->orWhere('document_files','LIKE',"%$search%");
        })->paginate(20);
      }else{
        $usersHasManyForms = ManyToManyForms::latest()->paginate(6);
      }
      return $usersHasManyForms;
    }


    private function getType($ext)
    {
        if (in_array($ext, $this->image_ext)) {
            return 'image';
        }

        if (in_array($ext, $this->audio_ext)) {
            return 'audio';
        }

        if (in_array($ext, $this->video_ext)) {
            return 'video';
        }

        if (in_array($ext, $this->document_ext)) {
            return 'document';
        }
    }
    /**
     * Get all extensions
     * @return array Extensions of all file types
     */
    private function allExtensions()
    {
        return array_merge($this->image_ext, $this->audio_ext, $this->video_ext, $this->document_ext);
    }
    private function getUserDir()
    {
        return auth('api')->user()->name . '_' . auth('api')->user()->id;
    }
}
