@extends('layouts.admin')

@section('css')
    <link href="{{ asset('css/plugins/bootstrap-tagsinput.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/jquery.bootstrap-touchspin.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Welcome to Cinema!</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><span>Feel free to browse all our available movies.</span></li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
            <div class="dropdown">
                <button class="btn btn-primary" data-toggle="modal" data-target="#movie-modal">
                    <i class="icon-copy dw dw-add-file-2"></i> Add a movie
                </button>
            </div>
        </div>
    </div>
</div>
<div class="blog-wrap">
    <div class="container pd-0">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="blog-list">
                    <ul>
                        <li>
                            <div class="row no-gutters">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="blog-img">
                                        <!-- <img src="vendors/images/img2.jpg" alt="" class="bg_img"> -->
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <div class="blog-caption">
                                        <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h4>
                                        <div class="blog-by">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                            <div class="pt-10">
                                                <a href="#" class="btn btn-outline-primary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="blog-pagination">
                    <div class="btn-toolbar justify-content-center mb-15">
                        <div class="btn-group">
                            <a href="#" class="btn btn-outline-primary prev"><i class="fa fa-angle-double-left"></i></a>
                            <a href="#" class="btn btn-outline-primary">1</a>
                            <a href="#" class="btn btn-outline-primary">2</a>
                            <span class="btn btn-primary current">3</span>
                            <a href="#" class="btn btn-outline-primary">4</a>
                            <a href="#" class="btn btn-outline-primary">5</a>
                            <a href="#" class="btn btn-outline-primary next"><i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card-box mb-30">
                    <h5 class="pd-20 h5 mb-0">Categories</h5>
                    <div class="list-group" style="max-height: 275px; overflow: auto; -webkit-overflow-scrolling: touch;">
                        <a href="#" class="list-group-item d-flex align-items-center justify-content-between">Action <span class="badge badge-primary badge-pill">7</span></a>
                        <a href="#" class="list-group-item d-flex align-items-center justify-content-between">Adventure <span class="badge badge-primary badge-pill">10</span></a>
                        <a href="#" class="list-group-item d-flex align-items-center justify-content-between active">Comedy <span class="badge badge-primary badge-pill">8</span></a>
                        <a href="#" class="list-group-item d-flex align-items-center justify-content-between">Crime <span class="badge badge-primary badge-pill">15</span></a>
                        <a href="#" class="list-group-item d-flex align-items-center justify-content-between">Drama <span class="badge badge-primary badge-pill">5</span></a>
                        <a href="#" class="list-group-item d-flex align-items-center justify-content-between">Fantasy <span class="badge badge-primary badge-pill">15</span></a>
                        <a href="#" class="list-group-item d-flex align-items-center justify-content-between">History <span class="badge badge-primary badge-pill">5</span></a>
                        <a href="#" class="list-group-item d-flex align-items-center justify-content-between">Horror <span class="badge badge-primary badge-pill">15</span></a>
                        <a href="#" class="list-group-item d-flex align-items-center justify-content-between">Musical <span class="badge badge-primary badge-pill">5</span></a>
                        <a href="#" class="list-group-item d-flex align-items-center justify-content-between">Mystery <span class="badge badge-primary badge-pill">5</span></a>
                        <a href="#" class="list-group-item d-flex align-items-center justify-content-between">Romance <span class="badge badge-primary badge-pill">5</span></a>
                        <a href="#" class="list-group-item d-flex align-items-center justify-content-between">Sci-Fi <span class="badge badge-primary badge-pill">5</span></a>
                        <a href="#" class="list-group-item d-flex align-items-center justify-content-between">War <span class="badge badge-primary badge-pill">5</span></a>
                    </div>
                </div>
                <div class="card-box mb-30">
                    <h5 class="pd-20 h5 mb-0">Now showing worldwide!</h5>
                    <div class="latest-post">
                        <ul>
                            <li>
                                <h4><a href="#">Spider-Man: Homecoming</a></h4>
                                <span>₱ 150.00 - per ticket</span>
                            </li>
                            <li>
                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h4>
                                <span>Css</span>
                            </li>
                            <li>
                                <h4><a href="#">Ut enim ad minim veniam, quis nostrud exercitation ullamco</a></h4>
                                <span>jQuery</span>
                            </li>
                            <li>
                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h4>
                                <span>Bootstrap</span>
                            </li>
                            <li>
                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h4>
                                <span>Design</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-box overflow-hidden">
                    <h5 class="pd-20 h5 mb-0">Archives of movies from certain years!</h5>
                    <div class="list-group">
                        <a href="#" class="list-group-item d-flex align-items-center justify-content-between">2020</a>
                        <a href="#" class="list-group-item d-flex align-items-center justify-content-between">2019</a>
                        <a href="#" class="list-group-item d-flex align-items-center justify-content-between">2018</a>
                        <a href="#" class="list-group-item d-flex align-items-center justify-content-between">2017</a>
                        <a href="#" class="list-group-item d-flex align-items-center justify-content-between">2016</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add movie modal -->
<div class="modal fade bs-example-modal-lg" id="movie-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Add a movie</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <!-- Form grid Start -->
                <form id="set-Model">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>Director</label>
                                <input type="text" name="director" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
							<div class="form-group">
								<label>Running time</label>
								<input type="number" name="running_time" placeholder="Minutes">
							</div>
						</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label>Trailer URL</label>
                                <input type="text" name="trailer_url" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label>Status</label>
                                <input type="text" name="status" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label>Date showing</label>
                                <input class="form-control datetimepicker-range" name="date_showing" type="text">
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Producer(s)</label>
                                <input type="text" class="form-control" name="producers" data-role="tagsinput">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Starring</label>
                                <input type="text" class="form-control" name="starring" data-role="tagsinput">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Screenplay by</label>
                                <input type="text" class="form-control" name="screenplay_by" data-role="tagsinput">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Story by</label>
                                <input type="text" class="form-control" name="story_by" data-role="tagsinput">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label>Distributed by</label>
                                <input type="text" name="distributed_by" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label>Production/Company</label>
                                <input type="text" name="production_company" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label>Ticket price</label>
                                <input type="number" name="ticket_price">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label>Release date</label>
                                <input class="form-control date-picker" name="release_date" type="text">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label>Genre</label>
                                <input type="text" name="genre" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label>Language</label>
                                <input type="text" name="language" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Edited by</label>
                                <input type="text" name="edited_by" class="form-control" data-role="tagsinput">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>Music by</label>
                                <input type="text" name="music_by" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group">
                                <label>Cinematography</label>
                                <input type="text" name="cinematography" class="form-control">
                            </div>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Synopsis</label>
                                <textarea class="form-control" name="synopsis"></textarea>
                            </div>
                        </div>
                    </div>                
                </form>	
				<!-- Form grid End -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btn-movie">Add movie</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
    <script src="{{ asset('js/plugins/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ asset('js/plugins/advanced-components.js') }}"></script>    
    <script type="module" src="{{ asset('js/actors/movies/index.js') }}"></script>
@endsection