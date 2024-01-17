@extends('layouts.app')
@section('content')
    <section class="container text-white py-2">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary" style="transform: translateX(-50px)"><i class="fa-solid fa-arrow-left"></i></a>
        <h1>{{ $project->title }}</h1>
        <p>{{ $project->body }}</p>
        @if($project->category)
            <p>{{ $project->category->name }}</p>
        @endif
        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
        <div class="d-flex justify-content-end align-items-center gap-3">
            <a href="{{ $project->url }}" class="text-white fs-2"><i class="fa-brands fa-github"></i></a>
        </div>

    </section>
    @include('partials.modal_delete')
@endsection
