@extends('layouts.dashboard')

@section('main-content')
    <div class="container-fluid h-100 bg-dark">
        <div class="row">
            <div class="col-12 text-center mt-3">
                <h1 class="text-black mt-3 text-uppercase text-white text-decoration-underline">{{ $project->name }}</h1>
                <h4 class="text-warning mt-4 text-uppercase">{{ $project->type !=null ? $project->type->name : '-Progetto senza tipologia-' }}</h4>
                <img class="project-image" src="{{ $project->image != null ? asset('./storage/'.$project->image) : 'https://placehold.co/400x400' }}" alt="{{ $project->name }}">
                <p class="text-primary mt-3 fs-3 ">{{ $project->slug }}</p>
                <p class="text-info"> 
                    @forelse($project->technologies as $technology)
                        {{ $technology->name }},
                    @empty
                        <span class="text-danger">-nessuna technologia per il progetto-</span>
                    @endempty
                </p>
                <p class="mt-3 fs-3 text-white">{{ $project->summary }}</p>
            </div>
        </div>
    </div>
@endsection