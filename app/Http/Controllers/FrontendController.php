<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{

    public function home()
    {
        return view('guestevent.home');
    }

    public function events()
    {
        $acara = Acara::get();
        return view('guestevent.events', compact('acara'));
    }
    public function eventscek(Request $request)
    {
        $kodeInput = $request->kode;
        $namaInput = $request->nama;

        // Mengecek apakah data cocok dalam tabel "guest"
        $guest = Guest::where('kode', $kodeInput)
                      ->where('nama', $namaInput)
                      ->first();

        if ($guest) {
            // Data cocok, arahkan ke menu selanjutnya
            return redirect()->route('after')->with('kode', $kodeInput);
        } else {
            // Data tidak cocok, tampilkan pesan kesalahan
            return redirect()->back()->with('error', 'Maaf, kode Anda salah atau Anda tidak terdaftar pada list undangan.');
        }
    }
    public function form()
    {
        return view('guestevent.form');
    }
    public function after(Request $request)
    {
        // Mengambil nilai kode dari sesi
        $kode = $request->session()->get('kode');

        // Mendapatkan acara berdasarkan kode undangan
        $acara = Acara::where('kode_undang', $kode)->first();

        // Memastikan acara ditemukan sebelum ditampilkan
        if ($acara) {
            return view('guestevent.after', compact('acara'));
        } else {
            // Jika acara tidak ditemukan, Anda dapat menangani kasus ini sesuai kebutuhan aplikasi Anda
            // Contoh: Redirect dengan pesan kesalahan
            return redirect()->route('events')->withErrors(['error' => 'Acara tidak ditemukan.']);
        }
    }
    public function contactus()
    {
        return view('guestevent.contactus');
    }
    public function aboutus()
    {
        return view('guestevent.aboutus');
    }
    public function login()
    {
        return view('guestevent.login');
    }
    public function enterevent()
    {
        return view('guestevent.enterevent');
    }
    public function entereventproses(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'sampul' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator->errors()->first());
        }

        $requestData = $request->all();

        $acara = Acara::latest()->first();
        $kodeAcara = 'ACR';
        if ($acara == null) {
            $nomorUrut = '0001';
        }else {
            $nomorUrut = substr($acara->kode_undang, 3, 4)+1;
            $nomorUrut = str_pad($nomorUrut, 4, "0", STR_PAD_LEFT);
        }

        $kodeUndangan = $kodeAcara . $nomorUrut;

        // Validate and store the image/sampul
        if ($request->hasFile('sampul')) {
            $fileName = time() . $request->file('sampul')->getClientOriginalName();
            $path = $request->file('sampul')->storeAs('images', $fileName, 'public');
            $requestData["sampul"] = '/storage/' . $path;
        } else {
            // Handle the case where no file is uploaded
            return redirect()
                ->back()
                ->withInput()
                ->withErrors('Please upload a valid file for the sampul.');
        }

        // Make sure 'stok' field is present in the $requestData array
        $requestData['kode_undang'] = $kodeUndangan;
        $requestData['judul'] = $request->judul;
        $requestData['file'] = $requestData['sampul'];
        $requestData['deskripsi'] = $request->deskripsi;

        // Remove 'stock' from $requestData if it's not needed in the database
        unset($requestData['sampul']);

        Acara::create($requestData);

        // Redirect with a success message
        return redirect()->route('event.index')->with('success', 'Buku successfully added!');
    }


    // Tambahkan method lainnya disini
}

