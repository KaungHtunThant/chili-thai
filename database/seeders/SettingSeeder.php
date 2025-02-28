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
            ['key' => 'company-email', 'value' => 'contact.chilithai@gmail.com']
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
