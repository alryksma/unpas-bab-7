<?php

namespace App\Models;

use PhpParser\Node\Stmt\Static_;

class Post 
{
    private static $blog_posts  =[
        [
            'title' => 'post 1',
            'author' => 'post esfwfeeasf',
            'slug' => 'post-1',
            'body' => 'post esfwfeeasf efjkwefkgefkusjfhbcwugebukywagbfukyagbeukywagfekuybawe',
    
        ],
        [
            'title' => 'post 2 jejej',
            'author' => 'post qfesfwefesfwfeeasf',
            'slug' => 'post-2',
            'body' => 'post esfwfeeasf efjkwefkgefkusjfhbcwugebukywagbfukyagbeukywagfekuybawe',
    
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public Static function find($slug)
    {
        $posts = static::all();
    //     $post = [];
    //     foreach($posts as $p){
    //         if($p['slug'] === $slug){
    //            $post = $p;
    //         }
    //    }

       return $posts->firstWhere('slug', $slug);

    }
}
