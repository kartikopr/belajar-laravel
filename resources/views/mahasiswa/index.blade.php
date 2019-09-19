@extends('layout.main')

@section('title', 'Daftar Mahasiswa')



@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">

            <h1 class="mt-4">Daftar Mahasiswa</h1>
            <a href="" data-toggle="modal" data-target="#formTambah" class="btn btn-secondary my-3">Tambah Data</a>
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @elseif (session('update'))
            <div class="alert alert-info">
                {{ session('update') }}
            </div>
            @endif
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NPM</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mahasiswa as $mhs)


                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$mhs->nama}}</td>
                        <td>{{$mhs->npm}}</td>
                        <td>{{$mhs->email}}</td>
                        <td>{{$mhs->jurusan}}</td>
                        <td>
                            <a href="{{$mhs->id}}/edit" data-toggle="modal" data-target="#formUpdate"
                                class="badge badge-success">Edit</a>
                            <a href="" class="badge badge-danger">Delete</a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

{{--Form tambah data--}}
<div class="modal fade" id="formTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="/mahasiswa/post">
                <div class="modal-body">

                    @csrf
                    <div class="form-group">
                        <label for="nama" class="col-form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            name="nama" placeholder="Masukkan nama" value = "{{$mhs->nama}}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{$message}}.
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="NPM" class="col-form-label">NPM</label>
                        <input type="text" class="form-control @error('npm') is-invalid @enderror" id="npm" name="npm"
                            placeholder="Masukkan NPM" value = "{{$mhs->npm}}">
                        @error('npm')
                        <div class="invalid-feedback">
                            {{$message}}.
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="jurusan" class="col-form-label">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
{{--End Form Tambah Data--}}


{{--Edit--}}
<div class="modal fade" id="formUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="/mahasiswa/{{$mhs->id}}">
                @method('patch')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama" class="col-form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            name="nama" placeholder="Masukkan nama" value = "{{$mhs->nama}}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{$message}}.
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="NPM" class="col-form-label">NPM</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="npm" name="npm"
                            placeholder="Masukkan NPM" value = "{{$mhs->npm}}">
                        @error('npm')
                        <div class="invalid-feedback">
                            {{$message}}.
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email" value = "{{$mhs->email}}">
                    </div>
                    <div class="form-group">
                        <label for="jurusan" class="col-form-label">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan"  placeholder="Masukkan jurusan" value = "{{$mhs->jurusan}}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
{{--End--}}
