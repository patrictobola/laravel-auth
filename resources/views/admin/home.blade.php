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
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th>{{ $project->title }}</th>
                        <td>{{ substr($project->description, 0, 50) . '...' }}</td>
                        <td>{{ $project->date }}</td>
                        <td>
                            Show, Edit, Delete
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
