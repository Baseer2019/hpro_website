<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Position;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth','isAdmin']);
    }
    /**
     * Display a listing of the resource.
     * $projects = projects::all()->last()->paginate(8);
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('position_number', 'asc')->paginate(8);
        return view('admin.employee', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *->last()->paginate(8)
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $positions = Position::all();
        return view('admin.add_user', compact('positions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $input = $request->all();

        if ($file = $request->file('profile_photo_path')) {
            $image = $file->getClientOriginalName();
            $file->move('backend/assets/img/user', $image);
            $input['profile_photo_path'] = $image;
        }
        $paswoord = encrypt($request->password);
        $input['password'] = $paswoord;

        User::create($input);
        return redirect('user')->with('message', 'User added successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Respon[ se
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit_user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function update_user(UserRequest $request, $id)
    {
        $input = $request->all();
        $user = User::findOrFail($id);
        if ($file = $request->file('profile_photo_path')) {
            $image = $file->getClientOriginalName();
            $file->move('backend/assets/img/user/', $image);
            $input['profile_photo_path'] = $image;
        }
        else{
            $input['profile_photo_path'] = $user->profile_photo_path;
        }
        $paswoord = encrypt($request->password);
        $input['password'] = $paswoord;
        $user->update($input);
        return redirect()->back()->with('message', 'updated successfully!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::findOrFail($id)->delete();
        return redirect()->back()->with('message', 'User deleted successfully');
    }




}
