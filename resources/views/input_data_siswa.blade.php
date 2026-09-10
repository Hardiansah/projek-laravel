 @section('title','Input Data Siswa')
@extends('layout.app')
@section('content')
  <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <h1 class="mb-0 fs-3">Entry Data Siswa</h1>
              </div>
              <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Data</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Siswa</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="app-content">
          <div class="container-fluid">
            <div class="row g-4">
              <div class="col-12">
                
              </div>

              <!-- Quick Example -->
              <div class="col-md-12">
                <div class="card card-primary card-outline mb-4">
                  <div class="card-header">
                    <div class="card-title">Entry Data</div>
                  </div>
                  <form action="{{url('/simpan-data-siswa')}}" method="POST" >
                    @csrf
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">NIS</label>
                        <input
                          type="text"
                          class="form-control"
                          id="exampleInputEmail1"
                          aria-describedby="emailHelp" name="nis"
                        />
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama</label>
                        <input
                          type="text"
                          class="form-control"
                          id="exampleInputEmail1"
                          aria-describedby="emailHelp"  name="nama"
                        />
                      </div>
                       <label class="form-label" for="select-jurusan">Kelas</label>
                        <select class="form-select" id="select-kelas" name="kelas">
                            <option selected>Pilih Kelas</option>
                            @foreach ($kelas as $k)
                                <option value="{{ $k->id_kelas }}">{{ $k->nama_kelas }}</option>
                            @endforeach
                        </select>
                      </br>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection