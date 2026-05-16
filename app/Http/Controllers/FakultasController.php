<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = fakultas::orderByDesc("created_at")->get();
        return view('fakultas.list-fakultas', ['fakultas' => $data,]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fakultas.add-fakultas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'nama_fakultas'=>['required',"max:5"],
        'nama_dekan' => ['required',"max:5"]
        ],[
            'nama_fakultas.required' => 'Nama Fakultas Wajib Di Isi',
            'nama_dekan.required' => 'Nama Dekan Wajib Di Isi',
            'nama_fakultas.max' => 'Nama Fakultas Maksimal 5 Karakter',
            'nama_dekan.max' => 'Nama Dekan Maksimal 5 Karakter',
            
        ]);

        Fakultas::create([
            'nama_fakultas' => $request->nama_fakultas,
            'nama_dekan' => $request->nama_dekan
        ]);
        return redirect('/fakultas')->with('success','Fakultas berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fakultas $fakulta)
    {
        return view('fakultas.detail-fakultas', ['fakultas'=> $fakulta]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fakultas $fakulta)
    {
        return view('fakultas.edit-fakultas',[
            'fakultas'=> $fakulta
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fakultas $fakulta)
   {
    $validated = $request->validate([
        'nama_fakultas' => ['required', 'max:5'],
        'nama_dekan' => ['required', 'max:5']
    ], [
        'nama_fakultas.required' => 'Nama Fakultas Wajib Di Isi',
        'nama_dekan.required' => 'Nama Dekan Wajib Di Isi',
        'nama_fakultas.max' => 'Nama Fakultas Maksimal 5 Karakter',
        'nama_dekan.max' => 'Nama Dekan Maksimal 5 Karakter',
    ]);

    $fakulta->update([
        'nama_fakultas' => $request->nama_fakultas,
        'nama_dekan' => $request->nama_dekan
    ]);

    return redirect('/fakultas');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fakultas $fakulta)
    {
        $fakulta->delete();

        return redirect()->back();
    }
}
