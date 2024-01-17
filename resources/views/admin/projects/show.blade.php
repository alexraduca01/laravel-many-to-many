@extends('layouts.app')
@section('content')
    <section class="container text-white py-2">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary" style="transform: translateX(-50px)"><i class="fa-solid fa-arrow-left"></i></a>
        <h1>{{ $project->title }}</h1>
        <p>{{ $project->body }}</p>
        @if($project->category)
            <p class="badge bg-success rounded-pill"><a href="{{ route('admin.categories.show', $project->category->slug) }}" class="text-white text-decoration-none">{{ $project->category->name }}</a></p>
        @endif
        @if($project->technologies)
            <ul class="list-unstyled d-flex gap-2">
                @foreach ($project->technologies as $item)
                    <li><a class="text-white text-decoration-none" href="{{ route('admin.technologies.show', $item->slug) }}"><img src="{{ $item->image }}" alt="{{ $item->name }}" style="width: 30px;"></a></li>
                @endforeach
            </ul>
        @endif
        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
        <div class="d-flex justify-content-end align-items-center gap-3">
            <a href="{{ $project->url }}" class="text-white fs-2"><i class="fa-brands fa-github"></i></a>
        </div>

    </section>
    @include('partials.modal_delete')
@endsection
