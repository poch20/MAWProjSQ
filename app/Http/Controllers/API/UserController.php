<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserController extends Controller {


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth:api');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return User::where('type', '=', 'user')->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

      $this->validate($request, [
        'name' => 'required|string|max:191',
        'email' => 'required|string|email|max:191|unique:users',
        'password' => 'required|string|min:6',
      ]);

      //$inverseOfMtMFs = ManyToManyForms::findOrFail()->many_to_many_forms_tableHasManyUsersTable;
      $pangPaLusotLang = 'lusot.jpg';
      $createModalForm = User::create([
        'id' => null,
        'name' => $request['name'],
        'email' => $request['email'],
        'type' => $request['type'],
        'bio' => $request['bio'],
        'photo' => $pangPaLusotLang,
        'password' => Hash::make($request['password']),
      ]);

      $lastInsertedId = $createModalForm->id;
      if($lastInsertedId != null){
        $newlyCreatedUserByAdmin = User::findOrFail($lastInsertedId);
      }



    }


    public function updateProfileInfo(Request $request) {
      $storeTheUser = auth('api')->user();

      $this->validate($request, [
        'name' => 'required|string|max:191',
        'email' => 'required|string|email|max:191|unique:users,email,'.$storeTheUser->id,
        'password' => 'sometimes|required |min:6',
      ]);

      //return ['message' => "Success"];
      $currPhoto = $storeTheUser->photo;
      if($request->photo != $currPhoto){
        $uniquePhotoAttrs = time().'.' . explode('/', explode(':', substr($request->photo, 0, strpos($request->photo, ';')))[1])[1];

        \Image::make($request->photo)->save(public_path('img/profile/').$uniquePhotoAttrs);


        $deleteStackPhotoUploads = public_path('img/profile/').$currPhoto;
        if(file_exists($deleteStackPhotoUploads)) {
          @unlink($deleteStackPhotoUploads);
        }

        //Not this
        //$request->photo = $uniquePhotoAttrs;

        //Modifying $request to the server to its unique name
        $request->merge(['photo' => $uniquePhotoAttrs]);

      }

      if(!empty($request->password)){
        $request->merge(['password' => Hash::make($request['password']) ]);
      }

      $storeTheUser->update($request->all());
      return ['message' => 'Successful!'];
    }
    public function profile() {
      return auth('api')->user();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        $updateByUserId = User::findOrFail($id);

        $this->validate($request, [
          'name' => 'required|string|max:191',
          'email' => 'required|string|email|max:191|unique:users,email,'.$updateByUserId->id,
          'password' => 'sometimes|min:6',
        ]);


        $updateByUserId->update($request->all());
        return ['message' => 'Updated the user info'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $deleteUserById = User::findOrFail($id);
        //return ['message' => 'User Deleted'];
        $deleteUserById->delete();
    }

    public function searchReturnsForAdmin(){
      if($search = \Request::get('anyVar')){
        $usersHasManyForms = User::where(function($queryStrings) use ($search){
          $queryStrings->where('name','LIKE',"%$search%")
                ->orWhere('email','LIKE',"%$search%");
        })->paginate(20);
      }else{
        $usersHasManyForms = User::where('type', '=', 'user')->paginate(10);
      }
      return $usersHasManyForms;
    }
}
