@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
        <form action="{{ route('admin.projects.update', $project) }}" method="post">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" class="form-control" id="description" name="description" rows="4">{{ $project->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $project->date }}">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Screenshot</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $project->thumb }}">
            </div>

            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('admin.projects.index') }}" class="btn btn-info">Back to main page</a>
                @method('put')
                @csrf
                <button class="btn btn-success">Submit Changes</button>
        </form>
    </div>
    </div>
@endsection
