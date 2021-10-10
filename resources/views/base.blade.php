<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('metaTitle')</title>
    <meta name="description" content="@yield('metaDescription')">
    <meta name="keywords" content="@yield('metaKeywords')">
    <!-- Tags coming from view -->
    @yield('metaTags')
    <meta name="author" content="Gabriel Cabola">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}" type="text/css" media="all" />
    @yield('headSection')
</head>

<body>

<div class="content relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="ax-w-6xl mx-auto sm:px-6 lg:px-8">
        <a href="{{ url('articles/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Articles</a>
        @yield('contentSection')
    </div>
</div>
</body>
</html>
