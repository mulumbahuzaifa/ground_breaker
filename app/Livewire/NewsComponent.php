<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class NewsComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $blogs = Blog::paginate(6);
        return view('livewire.news-component',['blogs' => $blogs]);
    }
}
