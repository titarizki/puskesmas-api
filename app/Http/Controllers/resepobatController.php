<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resepobat;

class resepobatController extends Controller
{
    public function index()
    {
        $resepobat = resepobat::all();
        return response()->json($resepobat);
    }
    public function show($id)
    {
        $resepobat = resepobat::find($id);
        return response()->json($resepobat);
    }
    public function store(Request $request)
    {
        $resepobat = resepobat::create($request->all());
        return response()->json("Berhasil ditambahkan");
    }
    public function update(Request $request, $id)
    {
        $resepobat = resepobat::find($id);
        $resepobat->update($request->all());
        return response()->json("Berhasil diupdate");
    }
    public function destroy($id)
    {
        $resepobat = resepobat::find($id);
        $resepobat->delete();
        return response()->json("Berhasil dihapus");
    }
}