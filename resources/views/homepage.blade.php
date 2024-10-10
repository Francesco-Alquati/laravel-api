@extends('layouts.app')
@section('content')

<div class="container-home mt-5">
    <div class="row mt-5">
        <div class="col-12 d-flex justify-content-center align-items-center mt-5">
            <a href="{{ route('admin.dashboard')}}"><button class="btn btn-lg btn-primary">Progetti</button></a>
        </div>
    </div>
</div>
@endsection