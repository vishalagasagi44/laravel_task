@extends('layouts.app')

@section('title', __('Case Studies'))

@section('content')
<h1>{{ __('Case Studies') }}</h1>
<ul>
    @foreach($caseStudies as $caseStudy)
        <li>
            <a href="{{ route('case-studies.show', $caseStudy->slug) }}">
                {{ $caseStudy->title }}
            </a>
        </li>
    @endforeach
</ul>
{{ $caseStudies->links() }}
@endsection
