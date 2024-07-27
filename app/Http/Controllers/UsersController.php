<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * added Permissions
     */
    function __construct()
    {
        //  $this->middleware('permission:add-permission_name|update-permission_name|view-permission_name|delete-permission_name', ['only' => ['index','store']]);
        //  $this->middleware('permission:add-permission_name', ['only' => ['create','store']]);
        //  $this->middleware('permission:view-permission_name', ['only' => ['show']]);
        //  $this->middleware('permission:update-permission_name', ['only' => ['edit','update']]);
        //  $this->middleware('permission:delete-permission_name', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::allUsers();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:70',
            'email' => 'required|email|unique:users,email',
            'phone' => 'unique:users,phone',
            'password' => ['required', 'string', 'min:8'],
        ]);
        
       $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'is_admin' => true,
            'password' => Hash::make($data['password']),
        ]);

        return redirect()->route('admin.users.show', ['user' => $user->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $user = User::getUser($id);
        return view('admin.users.show', compact('user'));
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
