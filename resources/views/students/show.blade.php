@extends('templates/main')

@section('title','Detail Students')

@section('container')

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Detail Students</h2>

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$student->nama}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$student->email}}</h6>
                    <p class="card-text">{{$student->nrp}}</p>
                    <p class="card-text">{{$student->jurusan}}</p>
                    <a href="{{$students->id}}/edit" class="btn btn-success">Ubah</a>
                    <form action="/students/{{$students->id}}" method="post" class="d-inline">@method('delete')
                    @csrf
                    <button type="submit" class="btb btn-danger">Delete</button>
                    </form>
                    <a href="{{url('students/')}}" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection