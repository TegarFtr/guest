@extends ('layout.template')
@section('konten')

<!-- START DATA -->
<div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
          <form class="d-flex" action="" method="get">
              <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
              <button class="btn btn-secondary" type="submit">Cari</button>
          </form>
        </div>

        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">
                <i class="fa-solid fa-user-plus"></i>
                Tambah Data
            </button>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-3">Kode</th>
                    <th class="col-md-4">Nama</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->kode }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdit{{ $item->id }}">Edit</i></button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus{{ $item->id }}">Hapus</i></button>
                    </td>
                </tr>

                {{-- Modal Edit --}}
                <div class="modal fade" id="modalEdit{{ $item->id }}">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data Anggota</h1>
                        </div>
                        <form action="{{ route('event.update', $item->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="kode" class="form-label">kode</label>
                                    <select class="form-control" name="kode" id="kode">
                                        <option value="">Pilih Kode Undang</option>
                                        @foreach ($acara as $a)
                                            <option value="{{ $a->kode_undang }}">{{ $a->kode_undang }} - {{ $a->judul }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <div class="">
                                        <input type="text" class="form-control" name='nama' id="nama" value="{{ $item->nama }}">
                                    </div>
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
                <!-- /.modal -->

                {{-- Modal Hapus --}}
                <div class="modal fade" id="modalHapus{{ $item->id }}">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi Hapus Data</h1>
                        </div>
                        <div class="modal-body">
                            <h5 class="text-center">Apakah anda yakin akan menghapus data ini? <br>
                                <span class="text-danger">{{ $item->nama }} - {{ $item->kode }}</span>
                            </h5>
                        </div>
                        <div class="modal-footer">
                            <form action="{{ route('event.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" name="hsimpan">Hapus</button>
                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Batal</button>
                            </form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                @endforeach
            </tbody>
        </table>

        <div class="modal fade" id="modalTambah">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data Anggota</h1>
                </div>
                <form action="{{ route('event.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="kode" class="form-label">kode</label>
                            <select class="form-control" name="kode" id="kode">
                                <option value="">Pilih Kode Undang</option>
                                @foreach ($acara as $a)
                                    <option value="{{ $a->kode_undang }}">{{ $a->kode_undang }} - {{ $a->judul }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <div class="">
                                <input type="text" class="form-control" name='nama' id="nama">
                            </div>
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
        <!-- /.modal -->
  </div>
  <!-- AKHIR DATA -->
@endsection
