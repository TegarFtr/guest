<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class CollectionController extends Controller{
    public function exercise(){
        $matkul00 = new \stdClass();
        $matkul00->namaMatkul = "Sistem Operasi";
        $matkul00->jumlahSks = 3;
        $matkul00->semester = 3;
    
        $matkul01 = new \stdClass();
        $matkul01->namaMatkul = "Algoritma dan Pemrograman";
        $matkul01->jumlahSks = 4;
        $matkul01->semester = 1;
    
        $matkul02 = new \stdClass();
        $matkul02->namaMatkul = "Kalkulus Dasar";
        $matkul02->jumlahSks = 2;
        $matkul02->semester = 1;
    
        $matkul03 = new \stdClass();
        $matkul03->namaMatkul = "Basis Data";
        $matkul03->jumlahSks = 2;
        $matkul03->semester = 3;
    
        $matkuls = collect([$matkul00, $matkul01, $matkul02, $matkul03]);
        
        $matkulsmt3 = $matkuls->groupBy('semester')->get('3')->pluck('namaMatkul')->all();
        // $matkulurut = $matkuls->sortByDesc('jumlahSks')->pluck('namaMatkul')->all();

        echo 'Nama Mata Kuliah Semester:' .implode(', ',$matkulsmt3);

    }

    
    
}