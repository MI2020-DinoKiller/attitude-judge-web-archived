@extends('layouts.app')

@section('title', __('navs.general.home') . ' | ' . app_name())

@section('content')

    {{ html()->form('POST', route('getsearch'))->class(['ui', 'form'])->open() }}
    <div class="field">
        <div class="ui fluid icon input">
            <input name="searchtext" type="text" placeholder="開始搜尋......" required>
            <i class="search icon"></i>
        </div>
    </div>
    {{ form_submit("搜尋", 'massive ui button') }}
    {{ html()->form()->close() }}

@endsection
