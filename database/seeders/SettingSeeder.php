<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            ['key' => 'company-name', 'value' => 'Laravel Restaurant'],
            ['key' => 'company-location', 'value' => 'Al Rigga metro station, Al Rigga Rd - Deira - Al Rigga - Dubai - United Arab Emirates'],
            ['key' => 'company-phone', 'value' => '+97141234567'],
            ['key' => 'company-email', 'value' => '3199busi@gmail.com'],
            ['key' => 'company-calendar-id', 'value' => 'ca3c34e2f1348b2806d0a6e2ce18836e58ff3c67441bf95d2491c0d866dcd7db@group.calendar.google.com'],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
