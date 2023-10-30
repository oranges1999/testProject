<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',	
        'name',	
        'slug',	
        'imageUrl',	
        'createdBy',	
        'status'	];


        // khoa ngoai: ten bang _ id
    public function admin(){
        return $this->belongsTo(Admin::class,'createdBy','id');
    }
}
