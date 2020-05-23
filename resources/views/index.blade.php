@extends('layouts.app')

@section('title', __('navs.general.home') . ' | ' . app_name())

@section('content')



<div class="ui fluid icon input">
    <input type="text" placeholder="Search a very wide input...">
    <i class="search icon"></i>
</div>
@endsection
