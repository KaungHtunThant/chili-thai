<?php

namespace App\Enums\Reservations;

use App\Traits\EnumTrait;

enum ReservationTypesEnum: string
{

    use EnumTrait;

    case RESERVATION = 'reservation';
    case CATERING = 'catering';
}
