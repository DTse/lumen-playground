<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            [
                'slug' => '/',
                'title'=> 'Home',
                'meta_title'=> 'Home meta title',
                'meta_description'=> 'Meta description about the home page',
                'meta_image'=> '/images/home.jpg',
                'content' => '<span> Welcome to Razzle Playground!</span>'
            ],
            [
                'slug' => '/page1',
                'title'=> 'Sample page 1',
                'meta_title'=> 'Page 1 meta title',
                'meta_description'=> 'Meta description about the page 1',
                'meta_image'=> '/images/page1.jpg',
                'content' => '<span>This is sample page 1. <br/><br/> Enjoy!<span/>'
            ],
            [
                'slug' => '/page2',
                'title'=> 'Sample page 2',
                'meta_title'=> 'Page 2 meta title',
                'meta_description'=> 'Meta description about the page 2',
                'meta_image'=> '/images/page2.jpg',
                'content' => '<span>This is sample page 2. <br/><br/> Enjoy!<span/>'
            ],
            [
                'slug' => '/about',
                'title'=> 'About',
                'meta_title'=> 'About page meta title',
                'meta_description'=> 'This is a page that has useful info about the company,project etc',
                'meta_image'=> '/images/foo.png',
                'content' => '<span>This is a Razzle playground app!</span><em>Thank you for your time!</em>'
            ],
        ];

        DB::table('pages')->insert($pages);
    }
}
