@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12" id="fm-main-block">
            <video controls width="100%">
                <source src="rooby.mp4" type="video/mp4">
                {{-- <source src="movie.ogg" type="video/ogg"> --}}
              {{-- Your browser does not support the video tag. --}}
            </video>
        </div>
    </div>
</div>
@endsection
