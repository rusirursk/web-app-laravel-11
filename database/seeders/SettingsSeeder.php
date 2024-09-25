<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            ["key"=> "site_name", "value"=>"WEB APP"],
            ['key' => 'site_description','value' => 'Laravel'],
            ['key' => 'site_keywords','value' => 'Laravel'],
            ['key' => 'site_author','value' => 'Laravel'],
            ['key' => 'site_email','value' => 'Laravel'],
            ['key' => 'site_phone','value' => 'Laravel'],
            ['key' => 'site_fax_phone','value' => 'Laravel'],
            ['key' => 'site_address','value' => 'Laravel'],
            ['key' => 'site_logo','value' => 'Laravel'],
            ['key' => 'site_favicon','value' => 'Laravel'],
            ['key' => 'site_google_analytics','value' => 'Laravel'],
            ['key' => 'site_google_map','value' => 'Laravel'],
            ['key' => 'site_google_map_key','value' => 'Laravel'],
            ['key' => 'site_copyright','value' => 'Laravel'],
            ['key' => 'site_currency','value' => 'Laravel'],
            ['key' => 'facebook_link', 'value' => 'https://facebook.com/mywebsite'],
            ['key' => 'twitter_link', 'value' => 'https://twitter.com/mywebsite'],
            ['key' => 'linkedin_link', 'value' => 'https://linkedin.com/in/mywebsite'],
            ['key' => 'instagram_link', 'value' => 'https://instagram.com/mywebsite'],
            ['key' => 'maintenance_mode', 'value' => '0'],
            ['key' => 'maintenance_mode_text', 'value' => 'Laravel'],
        ];

        foreach ($settings as $setting) {
            Settings::updateOrCreate(
                ['key' => $setting['key']],
                ['value' => $setting['value']]
            );
        }
    }
}
