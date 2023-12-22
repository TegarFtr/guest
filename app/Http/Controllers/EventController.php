<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use Illuminate\Http\Request;
use App\Models\Guest;
use Illuminate\Response;
use PhpParser\Node\Expr\Cast\String_;

class EventController extends Controller
{

    public function index(){
        $acara = Acara::get();
        $data = Guest::orderBy('kode', 'asc')->paginate(10);
        return view ('guests.index', compact('data', 'acara'));
    }
    public function create()
    {
        return view('guests.create');
    }

    public function store(Request $request)
    {

        $data =[
            'kode' => $request->kode,
            'nama' => $request->nama
        ];

        Guest::create($data);

        return redirect()->route('event.index')->with('success', 'Anggota successfully added!');
    }


    // public function show(string $id)
    // {

    // }

    public function edit($id)
    {
        $data = Guest::where('kode', $id)->first;
        return view('guest.edit')->with('data', $data);
    }

    public function update(Request $request, String $id)
    {
        $data =[
            'kode' => $request->kode,
            'nama' => $request->nama
        ];

        Guest::whereId($id)->update($data);

        return redirect()->route('event.index')->with('success', 'Guest updated successfully');
    }

    public function destroy(String $id)
    {
        $data = Guest::find($id);

        if($data){
            $data->delete();
        }
        return redirect()->route('event.index')->with('success', 'Guest deleted successfully');
    }
}
