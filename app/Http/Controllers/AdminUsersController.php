<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserEditRequest;
use App\Http\Requests\UserRequest;
use App\Photo;
use App\Role;
use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Session;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $roles=Role::lists('name','id')->all();
        return view('admin.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $input =$request->all();

        if($file = $request->file('image_id'))
        {
            $name= time().$file->getClientOriginalName();
            $file->move('images',$name);
            $photo=Photo::create(['file'=>$name]);
            $input['image_id']=$photo->id;

        }
       //  echo $photo->file;
        $input['password']=bcrypt($request->password);
        User::create($input);

      return redirect('admin/users');

        //
     // User::create($request->all());
//
//        return redirect('admin/users');
       // return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user=User::findOrFail($id);
        $role=Role::lists('name','id')->all();
        return view('admin.users.edit',compact('user','role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, $id)
    {
        $user=User::findOrFail($id);
        $input=$request->all();
        if($file= $request->file('image_id')){

            $name=time().$file->getClientOriginalName();
            $file->move('images',$name);

           $photo=Photo::create(['file'=>$name]);
            $input['image_id']=$photo->id;
        }
        $input['password']=bcrypt($request->password);
        $user->update($input);

       return redirect('/admin/users');

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //C:\xampp\htdocs\log\public\images\1478771422shohag.jpg
        $user=User::findOrFail($id);
        $img_id=$user->image_id;
        $photo=Photo::findOrFail($img_id);
        unlink(public_path()."/images/".$user->image->file);

        $user->delete();
        $photo->delete();
        Session::flash('deleted user','User has been deleted');
        return  redirect('/admin/users');

    }
}
