@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
        <form action="{{ route('admin.projects.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" class="form-control" id="description" name="description" rows="4"></textarea>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Screenshot</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="">
            </div>

            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('admin.projects.index') }}" class="btn btn-info">Back to main page</a>
                <button class="btn btn-success">Submit Changes</button>
        </form>
    </div>
    </div>
@endsection
