<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Inventaris | Barang</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container">
            <a class="navbar-brand" href="#">Inventaris</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inventaris</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('user')}}">User</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('barang') }}">Barang</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('laporan')}}">Laporan</a>
                    <li class="nav-item dropdown ms-3-md">

                    <li class="nav-item dropdown ms-md-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{url('/logout') }}">Logout</a></li>

                        </ul>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-10">
                <h5>Kelola Barang</h5>

                @if(!empty(session('success')))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif()

                <div class="card">
                    <div class="card-body">
                        <div class="float-end mb-2">
                            <a href="{{ url('barang/add') }}" class="btn btn-primary">Tambah</a>
                        </div>
                        <table class="table table-striped table-responsive ">
                            <tr>
                                <th>No.</th>
                                <th>Nama Barang</th>
                                <th>Satuan</th>
                                <th>Jumlah</th>
                                <th>Keterangan</th>
                                <th>Lokasi</th>
                                <th>Aksi</th>
                            </tr>

                            @foreach($barang as $brg)
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td> {{ $brg->nama_barang }} </td>
                                <td> {{ $brg->satuan }} </td>
                                <td> {{ $brg->jumlah }} </td>
                                <td> {{ $brg->keterangan }} </td>
                                <td> {{ $brg->lokasi }} </td>
                                <td>
                                    <a href="{{ url('barang/edit/') . '/' . $brg->id }}" class="btn btn-sm btn-success">Edit</a>
                                    <a href="{{ url('barang/delete/') . '/' . $brg->id }}" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>

                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>