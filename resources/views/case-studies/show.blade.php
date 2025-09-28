@extends('layouts.app')

@section('title', $caseStudy->seo_title ?? $caseStudy->title)
@section('meta_description', $caseStudy->seo_description)

@section('content')
<h1>{{ $caseStudy->title }}</h1>
<p>{{ $caseStudy->summary }}</p>
<div>{!! nl2br(e($caseStudy->content)) !!}</div>
@endsection
