<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index(){
        $users = User::with('roles')->get();
        $roles = Role::pluck('name','name')->all();
        return view('admin.UserManage.user',compact('users','roles'));
    }

    public function storeuser(Request $request){

        $request->validate([
            'user_name' => 'required',
            'user_email' => 'required',
            'user_password' => 'required',
        ]);
        $user = User::create([
            'name' => $request->user_name,
            'email' => $request->user_email,
            'password' => Hash::make($request->password),
        ]);

        $user->syncRoles($request->roles);

        
        return redirect()->back()->with('success','User added successfully! ');
    }

    public function deleteuser($id){
        $delete = User::find($id);
        $delete->delete();
        return redirect()->back()->with('success','User deleted successfully! ');
    }
}
