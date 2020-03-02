<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManagerStatic as Image;
use App\User;
use Modules\User\Entities\Unit;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        

        $users = User::latest()->paginate(10);
        $units = Unit::latest()->get();

        return view('user::User.users-index',compact(
            "users",
            "units"
        ));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('user::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $req)
    {
        
        $data = $req->validate([
            "avatar"            =>  "image",
            "first_name"        =>  "required",
            "last_name"         =>  "required",
            "phone_number"      =>  "required | unique:users",
            "password"          =>  "required",
            "password_confirm"  =>  "required | same:password",
            "unit"              =>  "required",
            "job_title"         =>  "required"
        ]);


        if($req->hasFile("avatar")){
            $image       = $req->file('avatar');
            $filename    = $image->getClientOriginalName();
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(147, 147);
            $image_resize->save(public_path('storage/avatars/' .$filename));
            $image_path = 'avatars/' .$filename;
        }else{
            $image_path = null;
        }

        if(is_null($req->is_active)){
            $active =   False;
        }else{
            $active =   True;
        }
        
        $data["is_active"]  = $active;
        $data["password"]   =   Hash::make($req->password);
        $data["avatar"]     = $image_path;
        User::create($data);

        return redirect()->route("users.index")
        ->with("message","user created !");

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('user::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($user_id)
    {   

        $user   = User::findOrFail($user_id);
        $units  = Unit::latest()->get();

        return view('user::User.users-edit',compact(
            "user",
            "units"
        ));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $req, $id)
    {
        $data = $req->validate([
            "first_name"        =>  "required",
            "last_name"         =>  "required",
            "phone_number"      =>  "required",
            "password"          =>  "required",
            "unit"              =>  "required",
            "job_title"         =>  "required"
        ]);
        


        $user = User::findOrFail($id);

        if($req->hasFile("avatar")){

            Storage::disk("public")->delete($user->avatar);

            $image       = $req->file('avatar');
            $filename    = $image->getClientOriginalName();
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(147, 147);
            $image_resize->save(public_path('storage/avatars/' .$filename));
            $image_path = 'avatars/' .$filename;
        }else{
            $image_path = $user->avatar;
        }


        if(is_null($req->is_active)){
            $active =   False;
        }else{
            $active =   True;
        }
        $data["is_active"]  = $active;
        $data["password"]   =   Hash::make($req->password);
        $data["avatar"] = $image_path;
        
        $user->update($data);

        return redirect()->route("users.index")
        ->with("message","user details is updated !");
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Change UnitID
     * @param int $unit_id
     * @return Response
     */
    public function change_unitID($unit_id) {
        
        $user_id = auth()->user()->id;

        $user = "App\User"::findOrFail($user_id);
        $user->update([
            "unit_id"   =>  $unit_id
        ]);

        return redirect()->back();

    }

    /*
    |--------------------------------------------------------------------------
    | Edit Profile
    |--------------------------------------------------------------------------
    */
    public function edit_profile($user_id) {

        $user = User::findOrFail($user_id);

        return view("user::User.edit-profile",compact("user"));

    }

    /*
    |--------------------------------------------------------------------------
    | Update Profile
    |--------------------------------------------------------------------------
    */
    public function update_profile(Request $req,$user_id) {

        $req->validate([
            "first_name"    =>  "required",
            "last_name"     =>  "required"
        ]);

        $user = User::findOrFail($user_id);

        $user->update([
            "first_name"    =>  $req->first_name,
            "last_name"     =>  $req->last_name
        ]);

        return redirect()->route("users.edit_profile",[$user_id])
        ->with("message","your profile data is updated successfully");

    }

    /*
    |--------------------------------------------------------------------------
    | Change Password Page
    |--------------------------------------------------------------------------
    */
    public function change_pass_page() {

        return view("user::User.change-pass");

    }

    /*
    |--------------------------------------------------------------------------
    | Change Password 
    |--------------------------------------------------------------------------
    */
    public function change_pass(Request $req) {

        $req->validate([
            "old_pass"      =>  "required",
            "new_pass"      =>  "required",
            "pass_confirm"  =>  "required | same:new_pass"
        ]);

        $user = User::findOrFail(auth()->user()->id);

        if (Hash::check($req->old_pass, $user->password)) {
            $user->update([
                "password"  =>  Hash::make($req->new_pass),
            ]);

            return redirect()->back()
            ->with("message","your password is changed!");

        }else{

            return redirect()->back()
            ->with("error","password is wrong");

        }

        

    }


}
