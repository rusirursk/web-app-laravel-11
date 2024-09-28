<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(){
        $roles = Role::all();
        return view('admin.UserManage.role',compact('roles'));
    }

    public function storerole(Request $request){    

        $request->validate([
            'role_name' => 'required',
        ]);
        Role::create(['name' => $request->role_name]);
        return redirect()->back()->with('success','Role added successfully! ');
    }

    public function updaterole(Request $request){   

        $request->validate([
            'role_name' => 'required',
            'role_id' => 'required',
        ]);
        $update = Role::find($request->role_id);
        $update->name = $request->role_name;
        $update->save();
        return redirect()->back()->with('success','Role updated successfully! ');
    }

    public function deleteRole($id){
        $role = Role::find($id);
        $role->delete();
        return redirect()->back()->with('success','Role deleted successfully! ');
    }
    public function givePermissionToRole($id){
       $permissions = Permission::all();
       $role = Role::findOrFail($id);

       $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
       ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')->all();


       return view('admin.UserManage.givePermissionToRole',compact('permissions','role','rolePermissions'));
    }

    public function giveRoleToPermission(Request $request,$role_id){
        $request->validate([
            'permissions' => 'required',

        ]);
        $role = Role::findOrFail($role_id);
        $role->syncPermissions($request->permissions);

        return redirect()->back()->with('success','Permission added successfully! ');

    }

}
