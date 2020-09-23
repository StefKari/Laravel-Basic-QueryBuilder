<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table="cruds";

    protected $fillable = [
        'body',
        'created_at',
        'updated_at',
    ];
}
