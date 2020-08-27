@extends('adminlte::page')

@section('title', 'add-new-profile')

@section('content_header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('profiles.index')}}">Profiles</a></li>
            <li class="breadcrumb-item active" aria-current="page">add</li>
        </ol>
    </nav>
@stop

@section('content')

    <div class="card">
        <div class="card-header bg-black">
           <i class="fa fa-plus fa-1x" ></i> Add New Profile.
        </div>
        <div class="card-body">
            <form method="post" action="{{route('profiles.store')}}">
                @csrf
                @method('post')
               @include('admin.pages.profiles.inc.form')
            </form>
        </div>
        <div class="card-footer bg-black"></div>
    </div>

@stop
