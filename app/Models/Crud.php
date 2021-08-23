<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * $fillable
     * 
     * @var array
     */

    protected $table = "cruds";

    protected $fillable = [
        'body',
        'created_at',
        'updated_at',
    ];
}
