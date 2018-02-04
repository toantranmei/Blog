@extends('user/app')

@section('head-section')
  <link rel="stylesheet" href="{{ asset('user/css/prism.css') }}">
@endsection

@section('bg-img', asset('user/img/post-bg.jpg'))

@section('title', $post->title)

@section('sub-heading', $post->subtitle)

@section('main-section')
  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <small class="pull-left">Created At: <b>{{ $post->created_at->diffForHumans() }}</b></small>
          <small class="pull-right">Category:
            @foreach ($post->categories as $category)
              <a href="#" style="margin-left: 15px;">{{ $category->name }}</a>
            @endforeach
          </small>
          <br>
          {!! htmlspecialchars_decode($post->body) !!}
          <br>
          <div class="tags_content">
            <h4>Tags</h4>
            <small class="pull-left">
              @foreach ($post->tags as $tag)
                <a href="#" style="padding: 5px; border: 1px solid gray; border-radius: 5px; margin-right: 10px;">{{ $tag->name }}</a>
              @endforeach
            </small>
          </div>
        </div>
      </div>
    </div>
  </article>

  <hr>
@endsection


@section('script-section')
  <script src="{{ asset('user/js/prism.js') }}" charset="utf-8"></script>
@endsection
