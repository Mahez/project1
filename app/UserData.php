<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
     protected $fillable = [
        'first_name','last_name','education','status','address','dob','gmail_id'
    ];
    protected $table = 'user_data_tbl';
}
