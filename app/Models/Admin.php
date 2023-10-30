<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = "admin"; //map model vao table tuong ung
    use HasFactory;
    protected $fillable = ['name','email','password','avatar']; // dinh nghia cac truong trong bang
}
