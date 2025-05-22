<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SearchItem;

class SearchItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        SearchItem::insert([
            [
                'title' => 'About Us',
                'blurb' => 'Learn more about our poker platform and values.',
                'url' => url('/about'),
                'keywords' => 'poker, about, mission, company, who we are'
            ],
            [
                'title' => 'Poker Tournaments',
                'blurb' => 'Check upcoming live and online tournaments.',
                'url' => url('/events'),
                'keywords' => 'tournaments, live poker, online events, games'
            ],
            [
                'title' => 'Contact Us',
                'blurb' => 'Get in touch via email, social media or support center.',
                'url' => url('/contact'),
                'keywords' => 'email, contact, support, social media, help'
            ]
        ]);
    }
}
