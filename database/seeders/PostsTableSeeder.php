<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [

['title'=>"Tailwind",
'excerpt'=>"Developing New",
'body'=>"Body involving tailwind",
'image_path'=>"Empty",
'is_published'=>false,
'min_to_read'=>2

        ],
        ['title'=>"Java",
'excerpt'=>"Developing N",
'body'=>"Body involving java",
'image_path'=>"Empty",
'is_published'=>false,
'min_to_read'=>2

    ],
    ['title'=>"CSS",
'excerpt'=>"Developing New",
'body'=>"Body involving css",
'image_path'=>"Empty",
'is_published'=>false,
'min_to_read'=>2

        ]
        
        ];
    foreach($posts as $key => $value){
       Post::create($value);
    }
    }
}
