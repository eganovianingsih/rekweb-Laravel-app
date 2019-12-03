@extends('templates/main')

@section('title','Daftar Mahasiswa')

@section('container')

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-3">Daftar Students</h2>
            <a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasisawa</a>
            @if(session('status'))
            <div class="alert alert-success">
              {{ session('status')}}
            </div>
            @endif
            <ul class="list-group">
            @foreach($students as $student)
   
          <li class="list-group-item d-flex justify-content-between align-items-center">
          {{ $student->nama}}
          <a href="/students/{{ $student->id) }}"
            class="badge badge-info">Show Detail</a>

          </li>
      
            </ul>

   @endforeach

        </div>
    </div>
</div>

@endsection