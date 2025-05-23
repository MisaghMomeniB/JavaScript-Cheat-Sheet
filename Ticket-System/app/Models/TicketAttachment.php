<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicketAttachment extends Model
{
    protected $fillable = ['ticket_id', 'ticket_reply_id', 'file_path'];

    public function ticket() {
        return $this->belongsTo(Ticket::class);
    }

    public function reply() {
        return $this->belongsTo(TicketReply::class, 'ticket_reply_id');
    }
}