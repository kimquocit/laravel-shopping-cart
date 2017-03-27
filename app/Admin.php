<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

	protected $table = "Admin";
	
    protected $fillable = ['username', 'password', 'email'];

    protected $hidden = ['password', 'remember_token'];

    public $timestamps = false;
}
