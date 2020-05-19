<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <meta name="authorization" content="{{ (Auth::user()) ? Auth::user()->api_token : '' }}"> --}}
    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="@yield('meta_description', __('meta.og.description'))">
    <meta name="keyword" content="@yield('meta_keyword', __('meta.og.keyword'))">
    <meta name="author" content="@yield('meta_author', config('app.name'))">
    <meta name="google-site-verification"
        content="@yield('meta_google_site_verification', __('meta.google.site_verification'))" />

    <!-- Social: Twitter -->
    <meta name="twitter:card" content="@yield('meta_og_title', __('meta.twitter.card'))">
    <meta name="twitter:site" content="@yield('meta_og_title', __('meta.twitter.site'))">
    <meta name="twitter:title" content="@yield('meta_og_title', __('meta.og.title'))">
    <meta name="twitter:description" content="@yield('meta_og_description', __('meta.og.description'))">
    <meta property="twitter:image:src" content="@yield('meta_og_image', __('meta.og.image'))">

    <!-- Social: Facebook / Open Graph -->
    <meta property="og:url" content="@yield('meta_og_url', URL::full())" />
    <meta property="og:title" content="@yield('meta_og_title', __('meta.og.title'))" />
    <meta property="og:image" content="@yield('meta_og_image', __('meta.og.image'))" />
    <meta property="og:description" content="@yield('meta_og_description', __('meta.og.description'))" />
    <meta property="og:site_name" content="@yield('title', config('app.name'))">
    <meta property="og:type" content="@yield('meta_og_type', __('meta.og.type'))" />
    <meta property="fb:app_id" content="@yield('meta_og_app_id', __('meta.facebook.app_id'))" />

    <!-- Social: Google+ / Schema.org  -->
    <meta itemprop="name" content="@yield('meta_og_title', __('meta.og.title'))" />
    <meta itemprop="description" content="@yield('meta_og_description', __('meta.og.description'))">
    <meta itemprop="image" content="@yield('meta_og_image', __('meta.og.image'))" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

    @yield('meta')

    {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
    @stack('before-styles')

    <!-- Check if the language is set to RTL, so apply the RTL layouts -->
    <!-- Otherwise apply the normal LTR layouts -->
    {{ style(mix('css/app.css')) }}

    @stack('after-styles')
</head>

<body style="position: relative; margin-top: 49px; height: calc(100% - 49px); overflow-y: overlay; ">

    <div id="app">
        {{-- @include('includes.partials.logged-in-as') --}}
        @include('includes.nav')

        <div style="margin-top: 28px; ">
            <div class="ui main container">
            {{-- @include('includes.partials.messages') --}}
            </div><!-- container -->

        {{-- @include('frontend.includes.hero') --}}

        @yield('content')

        {{-- @include('frontend.includes.footer') --}}
        </div>
    </div><!-- #app -->

    <!-- Scripts -->
    @stack('before-scripts')
    {{-- {!! script(mix('js/manifest.js')) !!}
        {!! script(mix('js/vendor.js')) !!} --}}
    {!! script(mix('js/app.js')) !!}
    @stack('after-scripts')

    {{-- @include('includes.partials.fb-customerchat') --}}
    {{-- @include('includes.partials.ga') --}}
</body>

</html>
