<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'date', 'time', 'pax', 'event', 'note', 'type'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
