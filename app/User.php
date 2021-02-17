<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    //use HasFactory;

    protected $table =null;
    public $timestamps = false;
    protected $primarykey = 'id';

    // const CREATED_AT = null;
    // const UPDATED_AT = null;
}
