<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index() {
        return view('form-pendaftaran');
    }
    // public function prosesForm(Request $request){
    //     dump($request);
    // }

    // public function prosesForm(Request $request){
    //     echo $request->nim; echo "<br>";
    //     echo $request->nama; echo "<br>";
    //     echo $request->email; echo "<br>";
    //     echo $request->jenis_kelamin; echo "<br>";
    //     echo $request->jurusan; echo "<br>";
    //     echo $request->alamat;
    // }

    public function prosesForm(Request $request){
        $validateData = $request->validate([
            'nim' => 'required|size:12',
            'nama' => 'required|min:3|max:50',
            'email' => 'required|email',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan' => 'required',
            'alamat' => ''
        ]);

        dump($validateData);

        echo $validateData['nim']."<br>";
        echo $validateData['nama']."<br>";
        echo $validateData['email']."<br>";
        echo $validateData['jenis_kelamin']."<br>";
        echo $validateData['jurusan']."<br>";
        echo $validateData['alamat']."<br>";
    }

    public function prosesFormValidator(Request $request){
        $validator = Validator::make($request->all(),[
            'nim' => 'required|size:12',
            'nama' => 'required|min:3|max:50',
            'email' => 'required|email',
            'jenis_kelamin' => 'required|in:P,L',
            'jurusan' => 'required',
            'alamat' => ''
        ],[
            'required' => ':attribute wajib di isi.',
            'size' => ':attribute harus berukuran :size karakter.',
            'max' => ':attribute maksimal berisi :max karakter.',
            'min' => ':attribute minimal berisi :min karakter.',
            'email' => ':attribute harus diisi dengan alamat email yang valid.',
            'in' => ':attribute yang dipilih tidak valid'
        ]);

        if ($validator->fails()) {
            return redirect('/')->withErrors($validator)->withInput();
        }else {
            echo $request->nim; echo "<br>";
            echo $request->nama; echo "<br>";
            echo $request->email; echo "<br>";
            echo $request->jenis_kelamin; echo "<br>";
            echo $request->jurusan; echo "<br>";
            echo $request->alamat;
        }
    }
    // public function prosesFormValidator(Request $request){
    //     $rules = [
    //         'nim' => 'required|size:12',
    //         'nama' => 'required|min:3|max:50',
    //         'email' => 'required|email',
    //         'jenis_kelamin' => 'required|in:P,L',
    //         'jurusan' => 'required',
    //         'alamat' => ''
    //     ];

    //     $error_message = [
    //         'required' => ':attribute wajib di isi.',
    //         'size' => ':attribute harus berukuran :size karakter.',
    //         'max' => ':attribute maksimal berisi :max karakter.',
    //         'min' => ':attribute minimal berisi :min karakter.',
    //         'email' => ':attribute harus diisi dengan alamat email yang valid.',
    //         'in' => ':attribute yang dipilih tidak valid'
    //     ];

    //     $validator = Validator::make($request->all(), $rules, $error_message);

    //     if ($validator->fails()) {
    //         return redirect('/')->withErrors($validator)->withInput();
    //     }else {
    //         echo $request->nim; echo "<br>";
    //         echo $request->nama; echo "<br>";
    //         echo $request->email; echo "<br>";
    //         echo $request->jenis_kelamin; echo "<br>";
    //         echo $request->jurusan; echo "<br>";
    //         echo $request->alamat;
    //     }
    // }

    public function prosesFormRequest(DaftarMahasiswa $request){
        $validateData = $request->validate();
        dump($validateData);
    }
    
}

