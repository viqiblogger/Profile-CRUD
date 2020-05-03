<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';
    protected $fillable = ['npm_input','nama_input','kelas_input','avatar_input'];
}
