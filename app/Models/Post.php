<?php

namespace App\Models;

use PhpParser\Node\Stmt\Foreach_;

class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-tulisan-pertama",
            "author"=>"Fauzan",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus veniam beatae nam labore doloribus aperiam optio assumenda illum modi quae animi eum quibusdam minus necessitatibus fugit consequatur, ad hic quasi rem amet qui? Velit deserunt saepe sed, animi quasi totam sint hic reprehenderit maxime soluta rerum iure ipsa placeat nam eius in blanditiis maiores eligendi ex, odio veritatis dolor sunt, eos rem! Id voluptas veniam, provident, quo rem deleniti architecto hic soluta sunt sequi dolore labore ad? Veniam, nihil et!"
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-tulisan-kedua",
            "author"=>"Al",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus veniam beatae nam labore doloribus aperiam optio assumenda illum modi quae animi eum quibusdam minus necessitatibus fugit consequatur, ad hic quasi rem amet qui? Velit deserunt saepe sed, animi quasi totam sint hic reprehenderit maxime soluta rerum iure ipsa placeat nam eius in blanditiis maiores eligendi ex, odio veritatis dolor sunt, eos rem! Id voluptas veniam, provident, quo rem deleniti architecto hic soluta sunt sequi dolore labore ad? Veniam, nihil et!"
        ]
    ];

    public static function all(){
        return collect(self::$blog_post);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
