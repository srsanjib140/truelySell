<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class RoleModel extends Model
{
    use HasFactory;
    protected $table='roles' ;
   
  
    public function roleHasPermissions()
    {
        return $this->hasMany(RoleHasPermissionModel::class,'role_id');
    }
}
