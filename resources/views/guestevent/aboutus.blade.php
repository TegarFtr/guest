@extends('guestevent.layouts')

@section('container')
<style>
    .cell {
            flex: 0 0 30%; /* Mengatur lebar kolom */
            padding: 10px;
            border: 1px solid #ddd;
            box-sizing: border-box;
            background-color: #CBD5C0; /* Warna latar belakang */
            align: center;
        }

        .cell h3,
        .cell p {
            color:#454B3E; /* Warna teks */
        }
        .foto{
            align-items: center;
            width: 140px;
            height: auto;
        }
</style>
<div class="table text-center">
        <div class="cell">
            <!-- Kolom 1 -->
            <div class="cell">
                <img src="{{ asset('images/lidya.png') }}" alt="Pengembang website 1" class="foto">
                <h3>Maulidya Alfia Rohmah</h3>
                <p>Full stack developer</p>
            </div>
            
            <!-- Kolom 2 -->
            <div class="cell">
                <img src="{{ asset('images/karina.png') }}" alt="Pengembang website 1" class="foto">
                <h3>Karina Aurel Naviezenia</h3>
                <p>Developer</p>
            </div>
            
            <!-- Kolom 3 -->
            <div class="cell">
                <img src="{{ asset('images/intan.png') }}" alt="Pengembang website 1" class="foto">    
                <h3>Intan Amalliyah Saumi</h3>
                <p>Developer</p>
            </div>
        </div>
    </div>

@endsection