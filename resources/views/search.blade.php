@extends('layouts.app')

@section('title', __('navs.general.home') . ' | ' . app_name())

@section('content')

    <div class="ui pagination menu">
        <a class="item" href="{{ $p }}/1">
            1
        </a>
        <a class="item" href="{{ $p }}/2">
            2
        </a>
        <a class="item" href="{{ $p }}/3">
            3
        </a>
        <a class="item" href="{{ $p }}/4">
            4
        </a>
    </div>
    <br>
    {{ $SSS }}

@endsection
