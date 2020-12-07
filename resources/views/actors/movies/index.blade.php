@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="javascript:void(0)" class="btn btn-success mb-2"  style="position: absolute; right: 0;margin-right:35px;" id="btn-new"><span class="fa fa-plus"></span></a>
                    <h2>Roles</h2>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Display name</th>
                            <th scope="col" style="width:120px">Action</th>
                            </tr>
                        </thead>
                        <tbody id="table-main"></tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
    @include('actors.roles.modal')
</div>
@endsection

@section('javascript')
  <script type="module" src="{{ asset('js/actors/roles/index.js') }}"></script>
@endsection