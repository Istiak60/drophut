@extends('frontend.layouts.app')
@section('content')
    @include('frontend.pages.blog.sections.breadcrumb')
    @include('frontend.pages.blog.sections.blog-detail')
    @include('frontend.pages.blog.sections.blog-pagination')
@endsection
