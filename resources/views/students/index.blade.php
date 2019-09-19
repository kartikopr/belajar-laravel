@extends('layout.main')

@section('title', 'Daftar Mahasiswa')



@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">

            <h1 class="mt-4">Daftar Mahasiswa</h1>

            <a href="/students/create" class="btn btn-primary my-3">Create New</a>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @elseif (session('hapus'))
            <div class="alert alert-danger">
                {{ session('hapus') }}
            </div>
            @elseif (session('update'))
            <div class="alert alert-info">
                {{ session('update') }}
            </div>
            @endif
            <ul class="list-group">
                @foreach($students as $student)
                <li class="list-group-item d-flex justify-content-between align-items-center">

                    {{$student->nama}}

                    <a href="/students/{{$student->id}}" class="badge badge-info">Detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
