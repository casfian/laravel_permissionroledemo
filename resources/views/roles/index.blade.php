@extends('layouts.app')

@section('content')
<div class='row'>
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Roles Management</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New role</a>
        </div>
    </div>
</div>



@endsection