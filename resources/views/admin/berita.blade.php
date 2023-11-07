<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Tambah Berita</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <!-- <div class="container">
            <a class="navbar-brand" href="/"></a>
        </div> -->
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Politeknik Negeri Bengkalis | D-IV Rekayasa Perangkat Lunak</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="/admin/home">Home</a>
                    <a class="nav-link active" href="{{ route('admin.berita') }}">Berita</a>
                    <a class="nav-link" href=" {{ route('admin.lulusan') }}">Data Profil Lulusan</a>
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </div>
            </div>

    </nav>
    <div class="container">
        <div class="container mt-3">
            @if (Session::get('success'))
                <div class="alert alert-success alert-dismissible fadeshow" role="alert">
                    <strong>Berhasil!</strong> {{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs- dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (Session::get('failed'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Gagal!</strong> {{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs- dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <div class="row mt-3">
            <div class="col">
                <form action="{{ route('postBerita') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Judul Berita</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="judul_berita">
                            <span class="text-danger">
                                @error('judul_berita')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tanggal">
                            <span class="text-danger">
                                @error('tanggal')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Penulis</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="penulis">
                            <span class="text-danger">
                                @error('penulis')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="gambar">
                            <span class="text-danger">
                                @error('gambar')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Isi Berita</label>
                        <div class="col-sm-10">
                            <textarea name="isi_berita" class="form-control" id="" cols=" 30" rows="10"></textarea>
                            <span class="text-danger">
                                @error('isi_berita')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col"></div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
