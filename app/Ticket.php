<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function payTicket()
    {
        return $this->belongsTo('App\User', 'menter_id', 'id');
    }
}
