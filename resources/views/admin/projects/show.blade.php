@extends('layouts.dashboard')

@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center mt-3">
                <h1 class="text-danger">{{ $project->name }}</h1>
                <img class="project-image" src="{{ $project->image != null ? asset('./storage/'.$project->image) : 'https://placehold.co/600x400' }}" alt="{{ $project->name }}">
                <p class="text-primary mt-3">{{ $project->slug }}</p>
                <p class="mt-3">{{ $project->summary }}</p>
            </div>
        </div>
    </div>
@endsection