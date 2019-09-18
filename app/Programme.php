<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    protected $table = 'programmes';

    public $primaryKey = 'id';

    public $timestamps = true;
}
