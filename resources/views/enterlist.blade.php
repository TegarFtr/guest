<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Guest Event</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="container pt-4 bg-white">
            <div class="row">
              <div class="col-md-8 col-xl-6">
                <h1>guest</h1>
                <hr>
          
                <form action="{{ route('guests.store') }}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="nim">Kode</label>
                    <input type="text"
                    class="form-control @error('nim') is-invalid @enderror"
                    id="nim" name="nim" value="{{ old('nim') }}">
                    @error('nim')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
          
                  <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text"
                    class="form-control @error('nama') is-invalid @enderror"
                    id="nama" name="nama" value="{{ old('nama') }}">
                    @error('nama')
                      <div class="text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-primary mb-2">Daftar</button>
                </form>
            </div>
          </div>
        </div>
    </body>
</html>