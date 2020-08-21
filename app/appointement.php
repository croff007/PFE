<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appointement extends Model
{
    protected $fillable = ['title','start_date','end_date'];
}
