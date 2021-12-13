<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['title','city', 'country,', 'description','image', 'start_date', 'end_date'];
    protected $hidden = ['created_at','updated_at'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    } 

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function join()
    {
        return $this->hasMany(Join::class);
    }

}
