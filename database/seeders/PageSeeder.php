<?php

namespace Database\Seeders;

use App\Models\WebsitePage;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run()
    {
        $pages = [
            ['page' => 'home'],
            ['page' => 'about-us'],
        ];

        foreach ($pages as $page) {
            WebsitePage::create($page);
        }
    }
}
