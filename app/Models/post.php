<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class post extends Model
{
    protected $fillabe = ['title','body','is_approved'];
    use HasFactory;
    use SoftDeletes;
}
