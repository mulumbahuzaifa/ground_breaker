<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class HomeComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $blogs = Blog::inRandomOrder()->take(3)->get();
        return view('livewire.home-component',['blogs' => $blogs]);
    }
}
