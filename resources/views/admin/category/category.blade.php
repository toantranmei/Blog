@extends('admin.app')

@section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New Category
        <small>Add a category by adminstrator</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Categories</a></li>
        <li class="active">New Category</li>
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
              <form role="form" action="{{ route('category.store') }}" method="post">
                {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group">
                    <label for="name">Category Title</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name category">
                  </div>
                  <div class="form-group">
                    <label for="slug">Category Slug</label>
                    <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter category post">
                  </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('category.index') }}" class="btn btn-warning">Cancel</a>
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
