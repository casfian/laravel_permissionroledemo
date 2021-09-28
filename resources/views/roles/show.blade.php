@extends('layouts.app')

@section('content')
<div class='row'>
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show Role</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('roles.index') }}"> back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
        <strong>Name: </strong>
        {{ $role->name }}
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
        <strong>Permissions: </strong> <br>
        @if (!empty($rolePermissions))
            @foreach ($rolePermissions as $permission)
                <label class="label label-success">{{ $permission->name }} ,</label><br>
            @endforeach
            
        @endif
        
    </div>
</div>

@endsection