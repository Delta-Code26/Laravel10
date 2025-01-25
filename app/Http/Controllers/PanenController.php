<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panen;

class PanenController extends Controller
{
    public function index()
    {
        return Panen::with('karyawan')->get();
    }

    public function store(Request $request)
    {
        $panen = Panen::create($request->all());
        return response()->json($panen, 201);
    }

    public function show($id)
    {
        return Panen::with('karyawan')->find($id);
    }

    public function update(Request $request, $id)
    {
        $panen = Panen::findOrFail($id);
        $panen->update($request->all());
        return response()->json($panen, 200);
    }

    public function destroy($id)
    {
        Panen::destroy($id);
        return response()->json(null, 204);
    }
}
