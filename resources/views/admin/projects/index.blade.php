@extends('layouts.dashboard')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between p-2">
                    <h2 class="text-uppercase">Progetti</h2>
                    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary btn-sm">+ Add</a>
                </div>
            </div>
            <div class="col-12">
                <table class="table table-striped border border-black">
                    <thead>
                        <tr>
                            <th class="border border-left border-black text-center">ID</th>
                            <th class="border border-left border-black">Name</th>
                            <th class="border border-left border-black">Slug</th>
                            <th class="border border-left border-black text-center">Strumenti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                        <tr>
                            <td class="border border-left border-black text-center">{{ $project->id }}</td>
                            <td class="border border-left border-black">{{ $project->name }}</td>
                            <td class="border border-left border-black">{{ $project->slug }}</td>
                            <td class="border border-left border-black">
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}" class="btn btn-sm btn-info"><i class="fa-solid fa-eye"></i></a>
                                    <a href="{{ route('admin.projects.edit', ['project' => $project->id]) }}" class="btn btn-sm btn-warning ms-1"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <form action="{{ route('admin.projects.destroy', ['project' => $project->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger ms-1" onclick="return confirm('sicuro di voler cancellare questo elemento')"><i class="fa-solid fa-trash" style="color: #000000;"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection