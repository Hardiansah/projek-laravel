@section('title','Edit  Data Siswa')
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
                  <form action="{{route('data.update',$data->id_data)}}" method="POST" >
                    @csrf
                     @method('PUT')
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                        <input
                          type="text"
                          class="form-control"
                          id="exampleInputEmail1"
                          aria-describedby="emailHelp" name="nama" value="{{$data->nama}}"
                        />
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                        <input
                          type="date"
                          class="form-control"
                          id="exampleInputEmail1"
                          aria-describedby="emailHelp"  name="tanggal" value="{{$data->tanggal}}"
                        />
                      </div>
                     <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"> Alamat</label>
                        <textarea class="form-control" aria-label="With textarea" name="alamat">{{$data->alamat}}</textarea>
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