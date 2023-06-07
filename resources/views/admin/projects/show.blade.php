@extends('layouts.admin')

@section('content')
    <div class="container p-4">
        <div class="row">
            <div class="col">
                <div class="card d-flex">
                    <h2>{{ $projects->title }}</h2>
                    <img height='500' src="{{ $projects->cover_image }}" alt="{{ $projects->title }}">
                    <strong>Type: {{ $project->type->name ?? 'N/A' }}</strong>
                </div>
            </div>
        </div>
    </div>
@endsection
