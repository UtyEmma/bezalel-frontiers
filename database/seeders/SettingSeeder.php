<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $settings = config('settings');

        foreach ($settings as $key => $setting) {
            if(!Setting::where('slug', $key)->exists()){
                $setting['slug'] = $key;
                Setting::create($setting);
            }
        }
    }
}
