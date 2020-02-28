<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
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

        return view('user::users-index',compact(
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
        $login_data = $req->validate([
            "avatar"            =>  "image",
            "first_name"        =>  "required",
            "last_name"         =>  "required",
            "phone_number"      =>  "required | unique:users",
            "password"          =>  "required",
            "password_confirm"  =>  "required | same:password",
            "unit"              =>  "required",
            "job_title"         =>  "required"
        ]);


        $image       = $req->file('avatar');
        $filename    = $image->getClientOriginalName();
    
        $image_resize = Image::make($image->getRealPath());              
        $image_resize->resize(147, 147);
        $image_resize->save(public_path('storage/avatars/' .$filename));
        $image_path = 'avatars/' .$filename;

        $login_data["avatar"] = $image_path;
        User::create($login_data);

        return redirect()->route("users.index")
        ->with("messsage","user created !");

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

        $user = User::findOrFail($user_id);
        $units = Unit::latest()->get();

        return view('user::users-edit',compact(
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
    public function update(Request $request, $id)
    {
        //
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
}
