<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Post;

class UpdateComposer
{
    protected $posts;

    public function __construct() {
        $this->posts = Post::latest()->take(1)->get();
    }

    public function compose(View $view)
    {
        $view->with('posts', $this->posts);
    }
}
