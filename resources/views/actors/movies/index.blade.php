@extends('layouts.admin')

@section('css')
    <link href="{{ asset('css/plugins/plyr.css') }}" rel="stylesheet">
@endsection

@section('content')
<input type="hidden" id="movie-id" value="{{ $movie }}">
<input type="hidden" id="movie-trailer-url" value="{{ $trailer }}">

<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4 class="movie-title"></h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Movie details</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
            <button class="btn btn-primary" data-toggle="modal" data-target="#movie-modal">
                <i class="icon-copy dw dw-money-2"></i> Purchase ticket
            </button>
        </div>
    </div>
</div>

<div class="blog-wrap">
    <div class="container pd-0">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="blog-detail card-box overflow-hidden mb-30">
                    <div class="blog-img">
                        <div id="movie-trailer" data-type="youtube" data-video-id="{{ $trailer }}"></div>
                    </div>
                    <div class="blog-caption">
                        <h4 class="mb-10 movie-title"></h4>
                        <p style="text-indent: 5%;" id="movie-synopsis"></p>
                        <h5 class="mb-10">Ticket price: <span id="movie-ticket-price"></span></h5>
                        <h5 class="mb-10">Genre: <span id="movie-genre"></span></h5>
                        <h5 class="mb-10">Director: <span id="movie-director"></span></h5>
                        <h5 class="mb-10">Produced by:</h5>
                        <ul id="movie-producers"></ul>
                        <h5 class="mb-10">Screenplay by:</h5>
                        <ul id="movie-screenplays"></ul>
                        <h5 class="mb-10">Story by:</h5>
                        <ul id="movie-stories"></ul>
                        <h5 class="mb-10">Starring:</h5>
                        <ul id="movie-starring"></ul>
                        <h5 class="mb-10">Music by: <span id="movie-music"></span></h5>
                        <h5 class="mb-10">Cinematography: <span id="movie-cinematography"></span></h5>
                        <h5 class="mb-10">Edited by:</h5>
                        <ul id="movie-edits"></ul>
                        <h5 class="mb-10">Production, company:</h5>
                        <ul id="movie-production-company"></ul>
                        <h5 class="mb-10">Distributed by:</h5>
                        <ul id="movie-distribution"></ul>
                        <h5 class="mb-10">Released: <span id="movie-released"></span></h5>
                        <h5 class="mb-10">Running time: <span id="movie-running-time"></span></h5>
                        <h5 class="mb-10">Language: <span id="movie-language"></span></h5>
                    </div>
                </div>
            </div>
            @include('layouts.sidecontents')            
        </div>
    </div>
</div>
@endsection

@section('javascript')
  <script type="module" src="{{ asset('js/actors/movies/index.js') }}"></script>
  <script src="{{ asset('js/plugins/plyr.js') }}"></script>
  <script>
    plyr.setup({
        tooltips: {
            controls: !0
        },
    });
</script>
@endsection