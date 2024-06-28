<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class PermissionModel extends Model
{
    use HasFactory;
    protected $table='permissions' ;
    static public function getSingleRecord($id){
        return PermissionModel::find($id);
    }
    static public function getAllRecord(){
         $getPermission=PermissionModel::groupBy('groupby')->get();
     
        $result=array();
        foreach ($getPermission as  $value) {
            # code...
            $getPermissionGroup=PermissionModel::getPermissionGroup($value->groupby);
         
            $data=array();
            $data['id']=$value->id;
            $data['name']=$value->name;
            $group=array();
            foreach ($getPermissionGroup as  $valueggroup) {
              if($value->id!=$valueggroup->id){
                $grpData=array();
                $grpData['id']= $valueggroup->id;
                $grpData['name']= $valueggroup->name;
                $group[]=$grpData;
            }
            }
            $data['group']=$group;
            $result[]= $data;
        }
        return $result;
    }
    static public function getPermissionGroup($groupby){
        return $permissionGroup=PermissionModel::where('groupby',$groupby)->get();
      
   }
}
