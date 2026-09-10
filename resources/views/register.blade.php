<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: linear-gradient(135deg,#4e73df,#1cc88a);
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .register-card{
            width:100%;
            max-width:500px;
            border:none;
            border-radius:20px;
            box-shadow:0 15px 35px rgba(0,0,0,.2);
        }

        .card-header{
            background:transparent;
            border:none;
            text-align:center;
            padding-top:30px;
        }

        .card-header h2{
            font-weight:bold;
            color:#4e73df;
        }

        .btn-register{
            background:#4e73df;
            border:none;
        }
 
        .btn-register:hover{
            background:#2e59d9;
        }
    </style>
</head>
<body>

<div class="card register-card">

    <div class="card-header">
        <h2>Register</h2>
        <p class="text-muted">Silakan lengkapi data diri Anda</p>
    </div>

    <div class="card-body p-4">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        <form action="{{url('/simpan-data')}}" method="POST" >
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input
                    type="text"
                   
                    class="form-control"
                    placeholder="Masukkan nama lengkap"
                    required name="nama">
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea
                   
                    rows="3"
                    class="form-control"
                    placeholder="Masukkan alamat"
                    required name="alamat"></textarea>
            </div>

            <div class="mb-4">
                <label class="form-label">Tanggal Lahir</label>
                <input
                    type="date"
                    
                    class="form-control"
                    required name="tanggal">
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-register btn-lg">
                    Register
                </button>
            </div>

        </form>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>