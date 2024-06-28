<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\RoleHasPermissionModel;
use App\Models\RoleModel;
use Illuminate\Http\Request;
use App\Models\PermissionModel;
use Illuminate\Support\Facades\Redirect;
class RoleController extends Controller
{
    

    function index(){
        $permissions=PermissionModel::getAllRecord();
     
        return view('admin.role.addRole',compact('permissions'));
    }

    function store(Request $request){
     
        $role=new RoleModel;
        $role->name=$request->input('name');
      
        $role->save();
       $result= RoleHasPermissionModel::storeRoleToPermission($role->id,$request->input('permission_id'));
       if($result){
        return redirect::back()->with('success', 'Permission has sucessfully added to role');
       }else{
        return redirect::back()->with('error', 'somethings wrong!!');
       }
       
    }

   
    function update(Request $request){
     
        $role=new RoleModel;
        $role->name=$request->input('name');
      
        $role->save();
       $result= RoleHasPermissionModel::storeRoleToPermission($role->id,$request->input('permission_id'));
       if($result){
        return redirect::back()->with('success', 'Permission has sucessfully added to role');
       }else{
        return redirect::back()->with('error', 'somethings wrong!!');
       }
       
    }
    function edit(Request $request,$id){

        $permissions=PermissionModel::getAllRecord();     
        return view('admin.role.addRole',compact('permissions'));
    }
    
    function list(){
        return view('admin.role.roleList');
    }
    function role_data(Request $request){

       
  
       if ($request->ajax()) {
            $roles = RoleModel::select('*')->with('roleHasPermissions')->get();

            return datatables()->of($roles)->addColumn('permissions', function ($roles) {
                $per='';
               
               
                 
                    foreach ($roles->roleHasPermissions as $roleHasPermission) {
                     
                        $per .= '<span class="badge badge-info mb-2 me-1">' . $roleHasPermission->permission->name . '</span>';

                   
                }
                return $per;
            })
            ->rawColumns(['permissions'])
                ->make(true);
        }
          
        return view('admin.role.roleList');
    }
}
