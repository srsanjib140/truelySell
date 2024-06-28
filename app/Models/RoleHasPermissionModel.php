<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class RoleHasPermissionModel extends Model
{
    use HasFactory;
    protected $table='role_has_permissions' ;
   
  

    public function role()
    {
        return $this->belongsTo(RoleModel::class);
    }

    public function permission()
    {
        return $this->belongsTo(PermissionModel::class, 'permission_id');
    }
    static public function storeRoleToPermission($role_id,$permissions){
   
       foreach ($permissions as $permission) {
        $save = new RoleHasPermissionModel;
        $save->role_id = $role_id;
        $save->permission_id = $permission;
        $save->save();
    }
   return true;
   }


  
}
