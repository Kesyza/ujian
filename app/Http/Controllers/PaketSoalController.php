<?php

namespace App\Http\Controllers;

use App\Models\PaketSoal;
use Illuminate\Http\Request;

class PaketSoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paketSoal = PaketSoal::all();
        return view('admin.paketSoal.index', compact('paketSoal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.paketSoal.create');
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
            'paketSoal' => 'required',
        ]);

        $paketSoal = New PaketSoal;
        $paketSoal->paketSoal = $request->paketSoal;
        $paketSoal->save();
        return redirect()->route('paketSoal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaketSoal  $paketSoal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaketSoal  $paketSoal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paketSoal = PaketSoal::findOrFail($id);
        return view('admin.paketSoal.edit', compact('paketSoal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaketSoal  $paketSoal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'paketSoal' => 'required',
        ]);

        $paketSoal = PaketSoal::findOrFail($id);
        $paketSoal->paketSoal = $request->paketSoal;
        $paketSoal->save();
        return redirect()->route('paketSoal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaketSoal  $paketSoal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paketSoal = PaketSoal::findOrFail($id);
        $paketSoal->delete();
        return redirect()->route('paketSoal.index');
    }
}
