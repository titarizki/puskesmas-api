<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dokter;

class dokterController extends Controller
{
    public function index()
    {
        $dokter = dokter::all();
        return response()->json($dokter);
    }
    public function show($id)
    {
        $dokter = dokter::find($id);
        return response()->json($dokter);
    }
    public function store(Request $request)
    {
        $dokter = dokter::create($request->all());
        return response()->json("Berhasil ditambahkan");
    }
    public function update(Request $request, $id)
    {
        $dokter = dokter::find($id);
        $dokter->update($request->all());
        return response()->json("Berhasil diupdate");
    }
    public function destroy($id)
    {
        $dokter = dokter::find($id);
        $dokter->forceDelete();
        return response()->json("Berhasil Dihapus");    
    }
}