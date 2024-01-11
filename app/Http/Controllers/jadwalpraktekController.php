<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwalpraktek;

class jadwalpraktekController extends Controller
{
    public function index()
    {
        $jadwalpraktek = jadwalpraktek::all();
        return response()->json($jadwalpraktek);
    }
    public function show($id)
    {
        $jadwalpraktek = jadwalpraktek::find($id);
        return response()->json($jadwalpraktek);
    }
    public function store(Request $request)
    {
        $jadwalpraktek = jadwalpraktek::create($request->all());
        return response()->json("Berhasil ditambahkan");
    }
    public function update(Request $request, $id)
    {
        $jadwalpraktek = jadwalpraktek::find($id);
        $jadwalpraktek->update($request->all());
        return response()->json("Berhasil diupdate");
    }
    public function destroy($id)
    {
        $jadwalpraktek = jadwalpraktek::find($id);
        $jadwalpraktek->delete();
        return response()->json("Berhasil dihapus");
    }
}