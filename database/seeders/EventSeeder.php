<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            ['name' => 'Birthday'],
            ['name' => 'Wedding'],
            ['name' => 'Corporate Event'],
            ['name' => 'Other'],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
