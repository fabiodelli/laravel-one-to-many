@extends('layouts.admin')


@section('content')
<h1>Show posts table</h1>
<a class="btn btn-dark" href="{{route('admin.projects.create')}}" role="button">Create Post</a>

@include('partials.session_message')

<div class="table-responsive">
    <table class="table table-striped
    table-hover
    table-borderless
    table-primary
    align-middle">
        <thead class="table-light">

            <tr>
                <th>ID</th>
                <th>TITLE</th>
                <th>IMG</th>
                <th>SLUG</th>
                <th>COMPLETED</th>
                <th>ACTIONS</th>

            </tr>
        </thead>
        <tbody class="table-group-divider">


            @forelse ($projects as $project)
            <tr class="table-primary">
                <td scope="row">{{$project->id}}</td>
                <td><img height="100" src="{{$project->cover_image}}" alt="{{$project->title}}"></td>
                <td>{{$project->title}}</td>
                <td>{{$project->slug}}</td>
                <td>{{$project->completed}}</td>

                <td>
                    <a name="show" id="show" class="btn btn-primary" href="{{route('admin.projects.show', $project->slug)}}" role="button"><i class="fas fa-eye    "></i></a>
                    <a name="edit" id="edit" class="btn btn-success" href="{{route('admin.projects.edit', $project->slug)}}" role="button"><i class="fas fa-edit    "></i></a>
                    <a name="destroy" id="destroy" class="btn btn-danger" href="{{route('admin.projects.destroy', $project->slug)}}" role="button"><i class="fas fa-trash    "></i></a>
                </td>

            </tr>
            @empty
            <tr class="table-primary">
                <td scope="row">No projects yet.</td>

            </tr>
            @endforelse
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>








@endsection