<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Reservation extends Model
{
    use Notifiable;

    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'date', 'time', 'pax', 'event', 'note', 'type'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
