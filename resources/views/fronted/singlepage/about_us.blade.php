@extends('fronted.master')
@section('content')
<!-- Background image -->
<div
  class="bg-image d-flex justify-content-center align-items-center"
  style="
    background-image: url({{ url('upload/about/'.$about->image) }});
    height: 50vh;
  "
>
  
</div>
<!-- Background image -->
<h1 class="text-white text-center my-3">{{ $about->short_title }}</h1>
<span class="text-white">{{ $about->long_title }}</span>
@endsection

