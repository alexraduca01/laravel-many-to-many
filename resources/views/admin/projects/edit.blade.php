@extends('layouts.app')
@section('content')
    <section class="container py-2 text-white">
        <h1>EDIT {{ $project->title }}</h1>
        <form action="{{ route('admin.projects.update', $project->slug) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="fs-2">Title</label>
                <input type="text" value="{{ old('title', $project->title) }}" class="form-control @error('title') is-invalid @enderror" name='title' id='title' required maxlength="200" minlength="3">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category_id" class="fs-2">Select Category</label>
                <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}" {{old('category_id', $project->category_id) == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="fs-2">Body</label>
                <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" cols="30" rows="10">{{ old('body', $project->body) }}</textarea>
                @error('body')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="d-flex">
                <div>
                    <div class="me-3">
                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" width="100">
                    </div>
                </div>
                <div class="mb-3">
                    <input type="file" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}" name='image' id='image'>
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="url" class="fs-2">url</label>
                <input type="url" class="form-control @error('url') is-invalid @enderror" value="{{ old('url', $project->url) }}" name='url' id='url'>
                @error('url')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 gap-2 d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Invia</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
    </section>
@endsection
