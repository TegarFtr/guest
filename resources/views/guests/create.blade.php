@extends ('layout.template') 
@section('konten')

@if ($errors->any())
<div class="pt-3">
    <div class="alert alert-danger">
        <ul>
            @foreach ($error as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
    </div>
</div>
    
@endif
<!-- START FORM -->
<form action='{{ url('enterevent')}}' method='post'>
    @csrf
    @method('post')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="kode" class="col-sm-2 col-form-label">kode</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='kode' id="kode">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
</form>
    <!-- AKHIR FORM -->
@endsection