@extends('layouts.app')
@section('content')
    <section class="container text-white py-3">
        <h1>Create new technology</h1>
        <form action="{{ route('admin.technologies.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="fs-2">Name</label>
                <input type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" name='name' id='name' required maxlength="200" minlength="3">
                @error('name')
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
