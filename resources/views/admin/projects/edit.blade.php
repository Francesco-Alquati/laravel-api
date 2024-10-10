@extends('layouts.dashboard')

@section('main-content')
    <div class="container p-3">
        <div class="row">
            <div class="col-12">
                <h1>Modifica Progetto</h1>
            </div>
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.projects.update', ['project' => $project->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label class="label-form">Nome Progetto</label>
                            <input type="text" name="name" id="" class="form-control form-control-sm" placeholder="Nome Progetto" value="{{ old('name', $project->name) }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mt-3 mb-3">
                            @if($project->image != null)
                                <img class="project-image" src="{{ asset('./storage/'.$project->image) }}" alt="{{ $project->name }}">
                            @else
                                <img class="project-image" src="https://placehold.co/600x400" alt="{{ $project->name }}">
                            @endif
                        </div>
                        <div class="col-12 mt-3 mb-3">
                            <label for="" class="control-label">Immagine Progetto</label>
                            <input type="file" name="image" id="image" class="form-control form-control-sm">
                        </div>
                        <div class="col-12">
                            <label class="label-form">Descrizione Progetto</label>
                            <textarea name="summary" id="" cols="30" rows="10" class="form-control form-control-sm">{{ old('summary', $project->summary) }}</textarea>
                        </div>
                        <div class="col-12 mt-3 text-center">
                            <button type="submit" class="btn btn-success">Salva</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection