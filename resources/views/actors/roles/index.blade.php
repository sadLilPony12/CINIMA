@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/plugins/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/responsive.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- Simple Datatable start -->
<input type="hidden" id="list-role-id" value="{{ $role }}">

<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Roles</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $role == 2 ? 'Administrator' : 'Customer' }}</li>
                </ol>
            </nav>
        </div>
    </div>
</div>	

<div class="card-box mb-30">
    <div class="pd-10"></div>
    <div class="pb-20">
        <table class="table stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus">E-mail</th>
                    <th>Username</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="roles-table"></tbody>
        </table>
    </div>
</div>
<!-- Simple Datatable End -->
@endsection

@section('javascript')
  <script type="module" src="{{ asset('js/actors/roles/index.js') }}"></script>
  <script type="module" src="{{ asset('js/actors/genres/index.js') }}"></script>
  <script src="{{ asset('js/plugins/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('js/plugins/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('js/plugins/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('js/plugins/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('js/plugins/datatable-setting.js') }}"></script>
@endsection