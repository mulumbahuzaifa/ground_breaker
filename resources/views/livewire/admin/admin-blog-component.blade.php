<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">All Blogs</div>
                            <div class="col-md-6"><a href="{{ route('admin.addBlog') }}" style="color: whitesmoke" class="btn btn-success pull-right"> Add New Blog</a></div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id }}</td>
                                        <td><img src="{{ asset('image/blogs') }}/{{ $blog->image }}" width="60" height="60" alt="{{ $blog->name }}"></td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->category }}</td>
                                        <td>{{ $blog->created_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.editBlog', ['blog_id'=> $blog->id]) }}" ><i class="fa fa-edit fa-1x"></i></a>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this Blog') || event.stopImmediatePropagation()" wire:click.prevent="deleteBlog({{ $blog->id }})" style="margin-left: 20px"><i class="fa fa-times fa-1x text-secondary"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                            {{ $blogs->links('pagination::bootstrap-4') }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
