<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['user_id', 'category_id', 'priority_id', 'subject', 'message', 'status'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function priority() {
        return $this->belongsTo(Priority::class);
    }

    public function replies() {
        return $this->hasMany(TicketReply::class);
    }

    public function attachments() {
        return $this->hasMany(TicketAttachment::class);
    }
}