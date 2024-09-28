<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index(){
        $permissions = Permission::all();
        return view('admin.UserManage.permissions',compact('permissions'));
    }

    public function storepermission(Request $request){

        $request->validate([
            'permission_name' => 'required',
        ]);
        Permission::create(['name' => $request->permission_name]);

        return redirect()->back()->with('success','Permission added successfully! ');
    }

    public function updatepermission(Request $request){
        $request->validate([
            'permission_name' => 'required',
            'permission_id' => 'required',
        ]);
        $update = Permission::find($request->permission_id);
        $update->name = $request->permission_name;
        $update->save();
        return redirect()->back()->with('success','Permission updated successfully! ');
    }

    public function deletePermission($id){
        $permission = Permission::find($id);
        $permission->delete();
        return redirect()->back()->with('success','Permission deleted successfully! ');
    }
}
