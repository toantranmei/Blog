@extends('user/app')

@section('bg-img', asset('user/img/home-bg.jpg'))

@section('title', 'Sky Albert Blog')

@section('sub-heading', 'Blog For Developer Life')

@section('main-section')
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        @foreach ($posts as $post)
          <div class="post-preview">
            <a href="{{ route('post', $post->slug) }}">
              <h2 class="post-title">
                {{ $post->title }}
              </h2>
              <h3 class="post-subtitle">
                {{ $post->subtitle }}
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Trần Toản</a>
              | {{ $post->created_at->diffForHumans() }}</p>
          </div>
          <hr>
        @endforeach

        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr>
@endsection
