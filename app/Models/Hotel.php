<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    // use HasFactory;
    protected $fillable = ['dest', 'adult', 'children'];
    protected $dates = ['created_at', 'updated_at'];

}
