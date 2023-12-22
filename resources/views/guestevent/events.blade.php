@extends('guestevent.layouts')

@section('container')
    <style>
        .card-title {
            font-family: 'Century Gothic', 'Century', sans-serif;
        }

        footer {
            font-family: Arial, sans-serif;
        }
    </style>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $eror)
                    <li>{{ $eror }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <header class="py-5" style="background-color: #CBD5C0;" >
        @foreach ($acara as $val)
            <div class="container" style="display: flex; justify-content: center; flex-wrap: wrap;">
                <div class="card mb-3" style="max-width: 900px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset("$val->file") }}" width="461px" class="img-fluid rounded-start" alt="..." style="display: block;">
                        </div>
                        <div class="col-md-8" style="background-color: #DFE6DA;">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $val->judul }}</h5>
                                <p class="card-text" style="color: #454B3E;">{{ $val->deskripsi }}</p>
                                <button class="btn btn-light" style="color: #454B3E;" data-bs-toggle="modal" data-bs-target="#modalTambah{{ $val->id }}">Konfirmasi kehadiran anda</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modalTambah{{ $val->id }}">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data Anggota</h1>
                    </div>
                    <form action="{{ route('check.guest') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="kode" class="form-label">kode</label>
                                <input type="text" class="form-control" name="kode" id="kode" value="{{ $val->kode_undang }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <div class="">
                                    <input type="text" class="form-control" name='nama' id="nama">
                                </div>
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
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="tsimpan">Tambahkan</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        @endforeach
    </header>

    <footer class="text-center py-3" style="background-color: #65705A;">
        <p style="color: white;">Konfirmasi kehadiran Anda dengan menge-klik tombol pada event yang Anda pilih</p>
        <p style="color: white;">Terima kasih dan selamat bersenang-senang</p>
        <p style="color: white;">&copy; 2023 GuestEvent. All rights reserved.</p>
    </footer>
@endsection
