<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\SearchItem;

class CrawlSiteContent extends Command
{
    protected $signature = 'crawl:site';
    protected $description = 'Simulate crawling of site content and populate search index';

    public function handle()
    {
        // Clear existing index
        SearchItem::truncate();

        $data = [
            [
                'title' => 'About Our Poker Club',
                'blurb' => 'Get to know the core of our poker community and our values.',
                'url' => url('/about'),
                'keywords' => 'poker, club, about, values, community'
            ],
            [
                'title' => 'Upcoming Tournaments',
                'blurb' => 'See the schedule for all our upcoming poker tournaments.',
                'url' => url('/events'),
                'keywords' => 'tournaments, schedule, events, games'
            ],
            [
                'title' => 'Contact and Support',
                'blurb' => 'Reach us via email, phone, or social media for assistance.',
                'url' => url('/contact'),
                'keywords' => 'contact, support, email, phone, help'
            ],
        ];

        foreach ($data as $entry) {
            SearchItem::create($entry);
        }

        $this->info('Site content crawled and indexed successfully.');
    }
}
