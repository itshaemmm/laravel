<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back.database.index', [
            'anggota' => Anggota::latest()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $data = $request->validate([
                'nomor_anggota' => 'required|unique:anggota', 
                'angkatan_tbm' => 'nullable',
                'angkatan' => 'nullable',
                'nama' => 'required|min:3',
                'jabatan' => 'nullable',
                'nomor_hp' => 'nullable',
                'line' => 'nullable',
                'instagram' => 'nullable',
                'facebook' => 'nullable',
                'alamat' => 'nullable',
            ]);
        Anggota::create($data);

        return back()->with('success', 'Anggota has been created');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nomor_anggota' => 'required|unique:anggota',
            'angkatan_tbm' => 'required',
            'angkatan' => 'required',
            'nama' => 'required|min:3',
            'jabatan' => 'required',
            'nomor_hp' => 'required|numeric',
            'line' => 'nullable|string',
            'instagram' => 'nullable|string',
            'facebook' => 'nullable|string',
            'alamat' => 'required|string',
        ]);

        Anggota::findOrFail($id)->update($data);

        return back()->with('success', 'Anggota has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Anggota::findOrFail($id)->delete();
        return back()->with('success', 'Anggota has been deleted');
    }
}
