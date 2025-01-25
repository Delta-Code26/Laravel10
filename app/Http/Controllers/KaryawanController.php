<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function index() {
        return Karyawan::all();
    }

    public function store(Request $request) {
        $karyawan = Karyawan::create($request->all());
        return response()->json($karyawan, 201);
    }

    public function show($id) {
        return Karyawan::find($id);
    }

    public function update(Request $request, $id) {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->update($request->all());
        return response()->json($karyawan, 200);
    }

    public function destroy($id) {
        Karyawan::destroy($id);
        return response()->json(null, 204);
    }
}
