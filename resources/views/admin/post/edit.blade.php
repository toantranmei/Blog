@extends('admin.app')

@section('headSection')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('admin/bower_components/select2/dist/css/select2.min.css') }}">
@endsection

@section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Post
        <small>Edit a post by adminstrator</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Posts</a></li>
        <li class="active">Edit Post</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">

            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Titles</h3>
              </div>
              <!-- /.box-header -->
              @include('includes.messages')
              <!-- form start -->
              <form role="form" action="{{ route('post.update', $post->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="box-body">
                  <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}" placeholder="Enter title post">
                  </div>
                  <div class="form-group">
                    <label for="subtitle">Post SubTitle</label>
                    <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Enter subtitle post" value="{{ $post->subtitle }}">
                  </div>
                  <div class="form-group">
                    <label for="slug">Post Slug</label>
                    <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter slug post" value="{{ $post->slug }}">
                  </div>
                  <div class="form-group">
                    <label>Select Categories</label>
                    <select class="form-control select2 select2-hidden-accessible" name="categories[]" multiple="" data-placeholder="Select a Category" style="width: 100%;" tabindex="-1" aria-hidden="true">
                      @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                          @foreach ($post->categories as $postCategory)
                            @if ($postCategory->id == $category->id)

                              selected

                            @endif
                          @endforeach

                        >{{ $category->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Select Tags</label>
                    <select class="form-control select2 select2-hidden-accessible" name="tags[]" multiple="" data-placeholder="Select a Tag" style="width: 100%;" tabindex="-1" aria-hidden="true">
                      @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}"

                          @foreach ($post->tags as $postTag)
                            @if ($postTag->id == $tag->id)

                              selected

                            @endif
                          @endforeach
                        >{{ $tag->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="image">Upload Image</label>
                    <input type="file" id="image" name="image">

                    <p class="help-block">Uploaded Image for post here.</p>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="status" value="1" @if ($post->status == 1)
                        checked
                      @endif> Publish
                    </label>
                  </div>
                </div>
                <!-- /.box-body -->

                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Content Post
                      <small>Something text and image...</small>
                    </h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body pad">
                    <textarea name="body" id="editor1" placeholder="Place some text here"
                              style="width: 100%; height: 200px; outline: none; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $post->body }}</textarea>
                </div>
                </div>

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Save</button>

                  <a href="{{ route('post.index') }}" class="btn btn-warning">Cancel</a>
                </div>
              </form>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection


@section('footerSection')
  <script src="{{ asset('admin/bower_components/select2/dist/js/select2.full.min.js') }}" charset="utf-8"></script>
  <script type="text/javascript">
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2();
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
  });
  </script>
@endsection
