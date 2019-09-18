@extends('layout.main')

@section('title', 'Daftar Mahasiswa')



@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">

            <h1 class="mt-4">Daftar Mahasiswa</h1>

            <table class = "table">
                <thead class = "thead-dark">
                    <tr>
                        <th scope ="col">#</th>
                        <th scope ="col">Nama</th>
                        <th scope ="col">NPM</th>
                        <th scope ="col">E-mail</th>
                        <th scope ="col">Jurusan</th>
                        <th scope ="col">Aksi</th>
                    </tr>
                </thead>
                 <tbody>
                     <tr>
                         <th scope = "row">1</th>
                             <td>Kartiko Pramudito</td>
                             <td>55414792</td>
                                <td>kartiko@intra.tunasgroup.com</td>
                             <td>Teknik Informatika</td>
                             <td>
                                 <a href ="" class = "badge badge-success">Edit</a>
                                 <a href ="" class = "badge badge-danger">Delete</a>

                             </td>

                             
                         
                     </tr>
                 </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
