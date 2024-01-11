<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\obat;

class obatController extends Controller
{
    public function index()
    {
        $obat = obat::all();
        return response()->json($obat);
    }
    public function show($id)
    {
        $obat = obat::find($id);
        return response()->json($obat);
    }
    public function store(Request $request)
    {
        $obat = obat::create($request->all());
        return response()->json("Berhasil ditambahkan");
    }
    public function update(Request $request, $id)
    {
        $obat = obat::find($id);
        $obat->update($request->all());
        return response()->json("Berhasil diupdate");
    }
    public function destroy($id)
    {
        $obat = obat::find($id);
        $obat->delete();
        return response()->json("Berhasil dihapus");
    }
}