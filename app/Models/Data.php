<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = "data";
    use HasFactory;

    public $fillable = ['id','name','email','department','title'];
}
