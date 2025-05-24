<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['subject', 'user_id', 'message'];

    public function user() {
    return $this->belongsTo(User::class);
    }
    public function replies() {
        return $this->hasMany(Reply::class);
    }
}
