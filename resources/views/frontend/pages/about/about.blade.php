@extends('frontend.layouts.app')
@section('content')

    @include('frontend.pages.about.sections.breadcrumb')
    @include('frontend.pages.about.sections.about-section')
    @include('frontend.pages.about.sections.about-gallery-section')
    @include('frontend.pages.about.sections.chose-us')
    @include('frontend.pages.about.sections.team-area')

@endsection
