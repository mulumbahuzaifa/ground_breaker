<div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Edit Blog
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.blogs') }}" style="background: rgb(10, 10, 10)"  class="btn btb-success pull-right"> All Blogs</a>
                            </div>
                        </div>
                    </div>
                    @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endif
                    <div class="panel-body">
                        <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateBlog">
                            <div class="form-group">
                                <label for="" class="col-md-3 control-lable">Blog Name</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="Blog Name" class="form-control input-md" wire:model="title">
                                    @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-3 control-lable">Blog Category</label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="Blog Category" class="form-control input-md" wire:model="category">
                                    @error('category')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-3 control-lable">Blog Image</label>
                                <div class="col-md-8">
                                    <input type="file"  class="input-file" wire:model="newImage">
                                    @if($newImage)
                                        <img src="{{ $newImage->temporaryUrl() }}" width="120" alt="">
                                    @else
                                        <img src="{{ asset('image/blogs') }}/{{ $image }}" width="120" alt="">
                                    @endif
                                    {{-- @error('newImage')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror --}}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-3 control-lable">Description</label>
                                <div class="col-md-8" wire:ignore>
                                    <textarea name="description" id="summernote" class="form-control" wire:model="description">Description</textarea>
                                </div>
                                @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-3 control-lable"></label>
                                <div class="col-md-8">
                                    <Button type="submit" class="btn btn-primary">Update</Button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('scripts')

        <script type="text/javascript">
        $('#summernote').summernote({
            tabsize: 2,
            minHeight: 200,
            callbacks: {
                onChange: function(contents, $editable) {
                    if($('#summernote').summernote('isEmpty')){
                        @this.set('description', ''); //Summernote is never really empty it has '<br>' or '<p><br></p>' when it's "empty"
                    } else {
                        @this.set('description', contents);
                    }
                }
            }
        });
        // $('.tinymce-editor').tinymce({
        //     height: 500,
        //     menubar: false,
        //     plugins: [
        //        'a11ychecker','advlist','advcode','advtable','autolink','checklist','markdown',
        //        'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
        //        'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
        //     ],
        //     toolbar: 'undo redo | a11ycheck casechange blocks | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist checklist outdent indent | removeformat | code table help'
        //   });
        //   tinymce.init({
        //     selector: 'textarea.tinymce-editor',
        //     plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        //     toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        // });

        //     tinymce.init({
        //     selector: 'textarea.tinymce-editor',
        //     height: 300,
        //     menubar: false,
        //     plugins: [
        //         'advlist autolink lists link image charmap print preview anchor',
        //         'searchreplace visualblocks code fullscreen',
        //         'insertdatetime media table paste code help wordcount', 'image'
        //     ],
        //     toolbar: 'undo redo | formatselect | ' +
        //         'bold italic backcolor | alignleft aligncenter ' +
        //         'alignright alignjustify | bullist numlist outdent indent | ' +
        //         'removeformat | help',
        //     content_css: '//www.tiny.cloud/css/codepen.min.css'
        // });
        </script>
    @endsection
</div>
