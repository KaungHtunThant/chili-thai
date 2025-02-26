<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;

class Event extends Model
{
    use HasSlug;

    protected $fillable = ['name', 'slug'];

    public function getSlugOptions(): array
    {
        return [
            'source' => 'name',
        ];
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
