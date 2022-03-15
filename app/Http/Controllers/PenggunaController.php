<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengguna = Pengguna::all();
        return view('admin.pengguna.index', compact('pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'nama_sekolah' => 'required',
        ]);

        $pengguna = new Pengguna;
        $pengguna->nama = $request->nama;
        $pengguna->email = $request->email;
        $pengguna->password = $request->password;
        $pengguna->nama_sekolah = $request->nama_sekolah;
        $pengguna->save();
        Alert::success('Bagus...', 'Data Pengguna atas nama ' .$pengguna->nama .' berhasil ditambah');
        return redirect()->route('pengguna.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('admin.pengguna.edit', compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'nama_sekolah' => 'required',
        ]);

        $pengguna = Pengguna::findOrFail($id);
        $pengguna->nama = $request->nama;
        $pengguna->email = $request->email;
        $pengguna->password = $request->password;
        $pengguna->nama_sekolah = $request->nama_sekolah;
        $pengguna->save();
        Alert::success('Mantap...', 'Data Pengguna atas nama ' .$pengguna->nama .' berhasil diedit');
        return redirect()->route('pengguna.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $pengguna = Pengguna::findOrFail($id);
        // $pengguna->delete();
        // return redirect()->route('pengguna.index');

        if (!Pengguna::destroy($id)) {
            return redirect()->back();
        }
        Alert::success('Sip...', 'Data Pengguna berhasil dihapus');
        return redirect()->route('pengguna.index');
    }
}
