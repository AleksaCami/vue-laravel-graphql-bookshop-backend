<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'The Lean Startup',
            'author' => 'Dan Heath',
            'image' => 'the_lean_startup.jpg',
            'description' => 'ERIC RIES is an entrepreneur and author of the popular blog Startup Lessons Learned. He co-founded and served as CTO of IMVU, his third startup, and has had plenty of startup failures along the way. He is a frequent speaker at business events, has advised a number of startups, large companies, and venture capital firms on business and product strategy, and is an Entrepreneur-in-Residence at Harvard Business School. His Lean Startup methodology has been written about in the New York Times, the Wall Street Journal, the Harvard Business Review, the Huffington Post, and many blogs. He lives in San Francisco.',
            'link' => 'https://www.amazon.it/Zero-One-Notes-Startups-Future/dp/0804139296',
            'category_id' => '2'
        ]);

        Book::create([
            'title' => 'Launch',
            'author' => 'Gary Vaynerchuk',
            'image' => 'launch.jpg',
            'description' => 'An Internet Millionaires Secret Formula To Sell Almost Anything Online, Build A Business You Love, And Live The Life Of Your Dreams',
            'link' => 'https://www.amazon.com/Launch-Internet-Millionaires-Anything-Business/dp/1630470171/',
            'category_id' => '3'
        ]);

        Book::create([
            'title' => 'Zero To One',
            'author' => 'Peter Thiel',
            'image' => 'zero_to_one.jpg',
            'description' => 'Notes on Startups, or How to Build the Future',
            'link' => 'https://www.amazon.it/Zero-One-Notes-Startups-Future/dp/0804139296',
            'category_id' => '4'
        ]);
    }
}
