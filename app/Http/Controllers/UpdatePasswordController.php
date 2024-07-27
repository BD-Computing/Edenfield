<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UpdatePasswordController extends Controller
{
    function __construct()
    {
        //  $this->middleware('permission:add-permission_name|update-permission_name|view-permission_name|delete-permission_name', ['only' => ['index','store']]);
        //  $this->middleware('permission:add-permission_name', ['only' => ['create','store']]);
        //  $this->middleware('permission:view-permission_name', ['only' => ['show']]);
        //  $this->middleware('permission:update-permission_name', ['only' => ['edit','update']]);
        //  $this->middleware('permission:delete-permission_name', ['only' => ['destroy']]);
    }


    public function request($id)
    {
        $user = User::getUser($id);
        return view('admin.users.change-password', compact('id', 'user'));
    }

    public function change($id, Request $request)
    {
        try {

            $data = $request->validate([
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
            $userData = $request->only(["email", "password"]);
            $userData['password'] = Hash::make($userData['password']);
            User::find($id)->update($userData);
            Session::flash('success_msg', 'User details updated successfully!');
            return redirect()->route('admin.users.show', ['user' => $id]);
            return $userData;
        } catch (Exception $error) {
            return $error;
        }
    }
}
