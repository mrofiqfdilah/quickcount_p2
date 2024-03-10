<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paslon;

class DatapaslonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paslon = Paslon::all();
        return view('admin.datapaslon.index', compact('paslon'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.datapaslon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nourut' =>  'required',
        'nama_lengkap' =>  'required',
        'visi' =>  'required',
        'misi' =>  'required',
        'gambar' =>  'required',
        ]);

        $gambar = $request->gambar;
        $new_gambar = time() . '_' .  $gambar->getClientOriginalName();
        $gambar->move('uploads/paslon/' , $new_gambar);

        $paslon = new Paslon;
        $paslon->nourut = $request->nourut;
        $paslon->nama_lengkap = $request->nama_lengkap;
        $paslon->visi = $request->visi;
        $paslon->misi = $request->misi;
        $paslon->gambar = 'uploads/paslon/' . $new_gambar;
        $paslon->save();

        return redirect()->route('datapaslon.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
