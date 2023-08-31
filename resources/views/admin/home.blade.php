@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date of creation</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th>{{ $project->title }}</th>
                        <td>{{ substr($project->description, 0, 50) . '...' }}</td>
                        <td>{{ $project->date }}</td>
                        <td>
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-success me-2" href="{{ route('projects.show', $project) }}">Show</a>
                                <a class="btn btn-warning me-2" href="{{ route('projects.edit', $project) }}">Edit</a>
                                <form action="" method="POST">
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
