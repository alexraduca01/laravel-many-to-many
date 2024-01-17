@extends('layouts.app')
@section('content')
    <section class="container text-white py-2">
        <a href="{{ route('admin.technologies.index') }}" class="btn btn-primary" style="transform: translateX(-50px)"><i class="fa-solid fa-arrow-left"></i></a>
        <h1>{{ $technology->name }}</h1>
        @if($technology->projects)
            <ul class="list-unstyled">
                @foreach($technology->projects as $item)
                    <li><a class="text-white text-decoration-none" href="{{ route('admin.projects.show', $item->slug) }}">{{ $item->title }}</a></li>
                @endforeach
            </ul>
        @endif
    </section>
@endsection
