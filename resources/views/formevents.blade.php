<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RSVP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="container pt-4 bg-#655446">
            <div class="row">
                <div class="col-md-8 col-xl-6">
                    <h1>RSVP</h1>
                    <hr>
                    <form action="{{ url('/proses-form-request') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="code">Kode</label>
                            <input type="text" class="form-control @error('nim') is-invalid @enderror" id="code" name="code" value="{{ old('code') }}">
                            @error('code')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">No. WA</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <div class="">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="L" {{ old('jenis_kelamin')=='L'?'checked':'' }}>
                                    <label class="form-check-label" for="laki_laki">Laki-Laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P" {{ old('jenis_kelamin')=='P'?'checked':'' }}>
                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                </div>
                            </div>
                            @error('jenis_kelamin')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">Catatan</label>
                            <textarea class="form-control" name="alamat" id="alamat" rows="3">{{ old('alamat') }}</textarea>
                            <button type="submit" class="btn btn-primary -mb-2 mt-2">Daftar</button>
                            <a href="{{ route('events') }}" class="btn btn-secondary -mb-2 mt-2">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>