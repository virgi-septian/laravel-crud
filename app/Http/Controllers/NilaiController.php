<?php

namespace App\Http\Controllers;

use App\Models\nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function grade($a)
    {
        if ($a <= 100 && $a >= 90) {
            $b = 'A';
        } else if ($a < 90 && $a >= 80) {
            $b = 'B';
        } else if ($a < 80 && $a >= 70) {
            $b = 'C';
        } else if ($a < 70 && $a >= 50) {
            $b = 'D';
        } else if ($a < 50 && $a >= 30) {
            $b = 'E';
        } else if ($a < 30 && $a >= 0) {
            $b = 'E';
        } else {
            $b = 'Grade Error';
        }

        return $b;
    }

    public function index()
    {
        $a = nilai::all();
        return view('nilai.index', ['nilai' => $a]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nilai.create');

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
            'nis' => 'required',
            'kode_mata_pelajaran' => 'required',
            'nilai' => 'required',
        ]);

        $nilai = new nilai();
        $nilai->nis = $request->nis;
        $nilai->kode_mata_pelajaran = $request->kode_mata_pelajaran;
        $nilai->nilai = $request->nilai;
        $nilai->grade = $this->grade($nilai->nilai);
        $nilai->save();

        return redirect()->route('nilai.index')->with('success', "Data Berhasil dibuat");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nilai = nilai::findOrFail($id);
        return view('nilai.show', compact('nilai'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nilai = nilai::findOrFail($id);

        return view('nilai.edit', compact('nilai'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nis' => 'required',
            'kode_mata_pelajaran' => 'required',
            'nilai' => 'required',
        ]);

        $nilai = nilai::findOrFail($id);

        $nilai->nis = $request->nis;
        $nilai->kode_mata_pelajaran = $request->kode_mata_pelajaran;
        $nilai->nilai = $request->nilai;
        $nilai->grade = $this->grade($nilai->nilai);
        $nilai->save();
        return redirect()->route('nilai.index')->with('success', "Data Berhasil diedit");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nilai = nilai::findOrFail($id);
        $nilai->delete();
        return redirect()->route('nilai.index')->with('success', "Data Berhasil dihapus");

    }
}