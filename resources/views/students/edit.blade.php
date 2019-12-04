@extends('templates/main')

@section('judul','Detail Students')

@section('container')

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Form Ubah Data Mahasiswa</h2>
            <form method="post" action="/students/{{$student->id}}">
            @method('patch')
            @csrf
                <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukin nrp" name="nrp" value="{{$student->nrp}}">
                    @error('nrp')
                        </div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama">NAMA</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukin nama" name="nama" value="{{$student->nama}}">
                    @error('nama')
                        </div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukin email" name="email" value="{{$student->email}}">
                    @error('email')
                        </div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukin jurusan" name="jurusan" value="{{$student->jurusan}}">
                    @error('jurusan')
                        </div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data Mahasiswa</button>
                </form>
           
        </div>
    </div>
</div>  
@endsection