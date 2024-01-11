<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pasien;

class pasienController extends Controller
{
    public function index()
    {
        $pasien = pasien::all();
        return response()->json($pasien);
    }
    public function show($id)
    {
        $pasien = pasien::find($id);
        return response()->json($pasien);
    }
    public function store(Request $request)
    {
        $pasien = pasien::create($request->all());
        return response()->json("Berhasil ditambahkan");
    }
    public function update(Request $request, $id)
    {
        $pasien = pasien::find($id);
        $pasien->update($request->all());
        return response()->json("Berhasil diupdate");
    }
    public function destroy($id)
    {
        $pasien = pasien::find($id);
        $pasien->delete();
        return response()->json("Berhasil dihapus");
    }
}