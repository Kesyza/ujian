<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapel = Mapel::all();
        return view('admin.mapel.index', compact('mapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mapel.create');
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
            'nama_mapel' => 'required',
        ]);

        $mapel = New Mapel;
        $mapel->nama_mapel = $request->nama_mapel;
        $mapel->save();
        Alert::success('Bagus...', 'Data Mata Pelajaran ' .$mapel->nama_mapel .' berhasil ditambah');
        return redirect()->route('mapel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mapel = Mapel::findOrFail($id);
        return view('admin.mapel.edit', compact('mapel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_mapel' => 'required',
        ]);

        $mapel = Mapel::findOrFail($id);
        $mapel->nama_mapel = $request->nama_mapel;
        $mapel->save();
        Alert::success('Mantap...', 'Data Mata Pelajaran ' .$mapel->nama_mapel .' berhasil diedit');
        return redirect()->route('mapel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mapel  $mapel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $mapel = Mapel::findOrFail($id);
        // $mapel->delete();
        // return redirect()->route('mapel.index');

        if (!Mapel::destroy($id)) {
            return redirect()->back();
        }
        Alert::success('Sip...', 'Data Mata Pelajaran berhasil dihapus');
        return redirect()->route('mapel.index');
    }
}
