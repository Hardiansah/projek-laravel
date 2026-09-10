 @section('title','Input Data Kelas')
@extends('layout.app')
@section('content')
  <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <h1 class="mb-0 fs-3">Entry Data Kelas</h1>
              </div>
              <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Data</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kelas</li>
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
                  <form action="{{url('/simpan-data-kelas')}}" method="POST" >
                    @csrf
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Kelas</label>
                        <input
                          type="text"
                          class="form-control"
                          id="exampleInputEmail1"
                          aria-describedby="emailHelp" name="nama_kelas"
                        />
                      </div>
                    <div class="mb-3">
                        <label class="form-label" for="select-tingkat">Tingkat</label>
                        <select class="form-select" id="select-tingkat" name="tingkat">
                            <option selected>Pilih Tingkat</option>
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                        </select>
                    </div>
                     <div class="mb-3">
                        <label class="form-label" for="select-jurusan">Jurusan</label>
                        <select class="form-select" id="select-jurusan" name="jurusan">
                            <option selected>Pilih Jurusan</option>
                            @foreach ($jurusan as $j)
                                <option value="{{ $j->id_jurusan }}">{{ $j->nama_jurusan }}</option>
                            @endforeach
                        </select>
                    </div>
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