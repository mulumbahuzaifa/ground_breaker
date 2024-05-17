<?php

namespace App\Livewire\Admin;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class AdminBlogComponent extends Component
{
    use WithPagination;

    public function deleteBlog($id){
        $blog = Blog::find($id);
        $blog->delete();
        session()->flash('message', 'Blog has been deleted successfully');
    }
    public function render()
    {
        $blogs = Blog::paginate(12);
        return view('livewire.admin.admin-blog-component',['blogs' => $blogs]);
    }
}
