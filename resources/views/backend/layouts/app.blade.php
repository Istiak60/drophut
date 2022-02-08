<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('backend.include.styles')
</head>

<body class="sb-nav-fixed">
   @include('backend.include.navbar')
    <div id="layoutSidenav">
        @include('backend.pages.sections.sidenav')
        @include('backend.pages.sections.sidecontent')
    </div>
@include('backend.include.scripts')
</body>

</html>
