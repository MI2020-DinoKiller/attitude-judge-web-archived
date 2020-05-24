@extends('layouts.app')

@section('title', __('navs.general.home') . ' | ' . app_name())

@section('content')

    {{ html()->form('POST', route('index'))->class(['ui', 'form'])->open() }}
    <div class="field">
        <div class="ui fluid icon input">
            <input type="text" placeholder="Search a very wide input...">
            <i class="search icon"></i>
        </div>
    </div>
    {{ html()->form()->close() }}

@endsection
