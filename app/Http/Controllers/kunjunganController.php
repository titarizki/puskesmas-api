<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kunjungan;

class kunjunganController extends Controller
{
    public function index()
    {
        $kunjungan = kunjungan::all();
        return response()->json($kunjungan);
    }
    public function show($id)
    {
        $kunjungan = kunjungan::find($id);
        return response()->json($kunjungan);
    }
    public function store(Request $request)
    {
        $kunjungan = kunjungan::create($request->all());
        return response()->json("Berhasil ditambahkan");
    }
    public function update(Request $request, $id)
    {
        $kunjungan = kunjungan::find($id);
        $kunjungan->update($request->all());
        return response()->json("Berhasil diupdate");
    }
    public function destroy($id)
    {
        $kunjungan = kunjungan::find($id);
        $kunjungan->delete();
        return response()->json("Berhasil dihapus");
    }
}