@if (count($errors) > 0)
    <div class="box-body">
  @foreach ($errors->all() as $error)
      <p class="alert alert-danger">{{ $error }}</p>

  @endforeach
  </div>
@endif
