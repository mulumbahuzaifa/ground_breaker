<?php

namespace App\Livewire\Admin;

use App\Models\Blog;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditBlogComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $description;
    public $image;
    public $category;
    public $newImage;
    public $blog_id;

    public function mount($blog_id){
        $blog = Blog::where('id', $blog_id)->first();
         $this->title =$blog->title;
         $this->category =$blog->category;
         $this->description =$blog->description;
         $this->image =$blog->image;
         $this->blog_id =$blog->id;
    }



    public function updated($fields){
        $this->validateOnly($fields,[
            'title' => 'required',
            'description' => 'required',
        ]);
    }

    public function updateBlog(){
        $this->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $blog = Blog::find($this->blog_id);
        $blog->title = $this->title;
        $blog->description = $this->description;
        $blog->category = $this->category;
        if($this->newImage){
            $imageName = Carbon::now()->timestamp. '.' . $this->newImage->extension();
            $this->newImage->storeAs('blogs', $imageName);
            $blog->image = $imageName;
        }

        $blog->save();
        return redirect()->route('admin.blogs');
        session()->flash('message', 'Blog has been created Successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-blog-component');
    }
}
