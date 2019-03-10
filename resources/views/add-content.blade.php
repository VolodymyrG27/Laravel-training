@extends('layouts.site')

@section('content')
<div class="jumbotron">
    <div class="container">
      <h1 class="display-3">{{ $header }}</h1>
      <p>{{ $message }}</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
  </div>
@endsection