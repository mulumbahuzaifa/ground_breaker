<?php

namespace App\Livewire\Admin;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddBlogComponent extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $image;
    public $category;

    public function updated($fields){
        $this->validateOnly($fields,[
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
    }

    public function addBlog(){
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $blog = new Blog();
        $blog->title = $this->title;
        $blog->category = $this->category;
        // $blog->created_by = Auth::user()->id;
        $blog->description = $this->description;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('blogs', $imageName);
        $blog->image = $imageName;
        $blog->save();
        return redirect()->route('admin.blogs');
        session()->flash('message', 'Blog has been created Successfully');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-blog-component');
    }
}
