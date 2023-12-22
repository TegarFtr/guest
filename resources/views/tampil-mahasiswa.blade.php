@dump ($mahasiswas);

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Data Mahasiswa</title>
</head>
<body>
    <div class="container text-center p-4">
        <h1>Data Mahasiswa</h1>
        <div class="row">
            <div class="m-auto">
                <ol class="list-group">
                    @forelse ($mahasiswas as $mahasiswa)
                        <li class="list-group-item">
                            {{$mahasiswa->nama}} ({{$mahasiswa->nim}}),
                            Tanggal Lahir: {{ $mahasiswa->tanggal_lahir}},
                            IPK: {{$mahasiswa->ipk }}
                        </li>
                    @empty
                        <div class="alert alert-dark d-inline-block">
                            Tidak ada data...
                        </div>
                    @endforelse
                </ol>
            </div>
        </div>
    </div>
</body>
</html>