<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catatan extends Model 
{
   
    protected $table = 'catatan';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'user_id','judul','catatan'
    ];


}
