@extends('layouts.app')
@section('content')
    <section class="container py-2 text-white">
        <h1>EDIT {{ $technology->name }}</h1>
        <form action="{{ route('admin.technologies.update', $technology->slug) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="fs-2">Name</label>
                <input type="text" value="{{ old('name', $technology->name) }}" class="form-control @error('name') is-invalid @enderror" name='name' id='name' required maxlength="200" minlength="3">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="fs-2">Image URL</label>
                <input type="url" value="{{ old('image', $technology->image) }}" class="form-control @error('image') is-invalid @enderror" name='image' id='image' required maxlength="200" minlength="3">
                @error('image')
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
