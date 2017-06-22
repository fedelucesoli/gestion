<?php

namespace Src\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  protected $table = "users";
  protected $fillable = ['usuario', 'password', 'email', 'address', 'created_at', 'updated_at'];


}
