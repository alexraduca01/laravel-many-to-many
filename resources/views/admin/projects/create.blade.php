@extends('layouts.app')
@section('content')
    <section class="container text-white py-3">
        <h1>Create new project</h1>
        <form action="{{ route('admin.projects.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="fs-2">Title</label>
                <input type="text" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" name='title' id='title' required maxlength="200" minlength="3">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category_id" class="fs-2">Select Category</label>
                <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}" {{old('category_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="fs-2">Body</label>
                <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" cols="30" rows="10">{{ old('body') }}</textarea>
                @error('body')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <h6>Select Technologies</h6>
                    @foreach ($technologies as $item)
                        <div class="form-check @error('technologies') is-invalid @enderror">
                            <input type="checkbox" class="form-check-input" name="technologies[]" value="{{ $item->id }}" {{ in_array($item->id, old('technologies', [])) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                {{ $item->name }}
                            </label>
                        </div>
                    @endforeach
                    @error('technologies')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="d-flex">
                <div>
                    <div class="me-3">
                        <img id="uploadPreview" src="https://via.placeholder.com/300x200" width="100">
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
                <input type="url" class="form-control @error('url') is-invalid @enderror" value="{{ old('url') }}" name='url' id='url'>
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
