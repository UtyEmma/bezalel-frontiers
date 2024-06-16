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

        foreach ($settings as $setting) {
            if(!Setting::where('slug', $setting['slug'])->exists()){
                Setting::create($setting);
            }
        }
    }
}
