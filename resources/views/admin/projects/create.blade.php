@extends('layouts.dashboard')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Aggiungi Progetto</h1>
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
                <form action="{{ route('admin.projects.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <label class="label-form">Nome Progetto</label>
                            <input type="text" name="name" id="" class="form-control form-control-sm" placeholder="Progetto" value="{{ old('name') }}" required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12  mt-2 mb-2">
                            <label for="" class="control-label">Immagine Progetto</label>
                            <input type="file" name="image" id="image" class="form-control form-control-sm">
                        </div>
                        <div class="col-12 mt-2 mb-2">
                            <label for="" class="control-label">Tipologia Progetto</label>
                            <select name="type_id" id="" class="form-select form-select-sm">
                                <option value="">Seleziona Tipologia</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}" @selected($type->id == old('$type_id'))>{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 mt-2 mb-2">
                            <label for="" class="control-label">Seleziona Tecnologie</label>
                            <div>
                                @foreach ($technologies as $technology)
                                    <div class="form-check-inline">
                                        <input type="checkbox" class="form-check-inline" name="technologies[]" id="" value="{{ $technology->id }}" {{ is_array(old('technologies')) && in_array($technology->id, old('technologies')) ? 'checked' : '' }}>
                                        <label for="" class="form-check-label">{{ $technology->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-12 mt-2 mb-2">
                            <label class="label-form">Descrizione Progetto</label>
                            <textarea name="summary" id="" cols="30" rows="10" class="form-control form-control-sm">{{ old('summary') }}</textarea>
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