<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description','image', 'start_date', 'end_date'];

    protected $hidden = ['created_at','updated_at'];
    // public function category()
    // {
    //     return $this->hasMany(Category::class);
    // } 
}
