<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Join extends Model
{
    use HasFactory;
    public function event()
    {
        # code...
        return $this->belongsTo(Event::class,'event_id');
    }
    public function user()
    {
        # code...
        return $this->belongsTo(User::class,'user_id');
    }
}
