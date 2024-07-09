<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $pages = config('content.pages');
        foreach ($pages as $page) {
            if(!Content::wherePage($page['page'])->exists()) {
                Content::create($page);
            }
        }
    }
}
