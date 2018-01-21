@extends('admin.app')

@section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New Post
        <small>Add a post by adminstrator</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Posts</a></li>
        <li class="active">New Post</li>
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
                  @if (count($errors) > 0)
                      <div class="box-body">
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>

                    @endforeach
                    </div>
                  @endif
              <!-- form start -->
              <form role="form" action="{{ route('post.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter title post">
                  </div>
                  <div class="form-group">
                    <label for="subtitle">Post SubTitle</label>
                    <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Enter subtitle post">
                  </div>
                  <div class="form-group">
                    <label for="slug">Post Slug</label>
                    <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter slug post">
                  </div>
                  <div class="form-group">
                    <label for="image">Upload Image</label>
                    <input type="file" id="image" name="image">

                    <p class="help-block">Uploaded Image for post here.</p>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="status"> Publish
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
                      <textarea name="body" class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 200px; outline: none; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                </div>

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Post</button>
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
