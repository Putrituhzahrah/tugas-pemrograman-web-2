<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pet.index', [
            'title' => 'Pets Shop',
            'pets' => Pet::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pet.create', [
            'title' => 'Create Pet',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'spesies' => 'required',
            'ras' => 'required',
            'jenis_kelamin' => 'required',
            'umur_bulan' => 'required|numeric',
            'harga' => 'required|numeric',
            'status' => 'required',
        ],
            [
                'spesies.required' => 'Spesies wajib di input',
                'ras.required' => 'Ras wajib di input',
                'jenis_kelamin.required' => 'Jenis Kelamin wajib di pilih',
                'umur_bulan.required' => 'Umur wajib di input',
                'umur_bulan.numeric' => 'Umur wajib berupa angka',
                'harga.required' => 'Harga wajib di input',
                'harga.numeric' => 'Harga wajib berupa angka',
                'status.required' => 'Status wajib di pilih',
            ]
        );

        Pet::create($validated);

        return to_route('pet.index')->withSuccess('Data Berhasil Ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet $pet)
    {
        return view('pet.edit', [
            'title' => 'Edit Pet',
            'pet' => $pet,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pet $pet)
    {
        $validated = $request->validate([
            'spesies' => 'required',
            'ras' => 'required',
            'jenis_kelamin' => 'required',
            'umur_bulan' => 'required|numeric',
            'harga' => 'required|numeric',
            'status' => 'required',
        ],
            [
                'spesies.required' => 'Spesies wajib di input',
                'ras.required' => 'Ras wajib di input',
                'jenis_kelamin.required' => 'Jenis Kelamin wajib di pilih',
                'umur_bulan.required' => 'Umur wajib di input',
                'umur_bulan.numeric' => 'Umur wajib berupa angka',
                'harga.required' => 'Harga wajib di input',
                'harga.numeric' => 'Harga wajib berupa angka',
                'status.required' => 'Status wajib di pilih',
            ]
        );

        $pet->update($validated);

        return to_route('pet.index')->withSuccess('Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet)
    {
        //
    }
}
