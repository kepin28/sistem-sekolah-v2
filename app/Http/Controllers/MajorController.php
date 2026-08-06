<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
        {
        $title = 'Sistem Sekolah - Daftar Jurusan';
        $majors = [
        [
            'code' => 'AKL',
            'name' => 'Akuntasi Dasar',
            'description' => 'Ini adalah pelajaran menghitung pajak',
        ],
        ];
        return view('majors.index', [
            'title' => $title,
            'majors' => $majors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return "Menampilkan halaman tambah jurusan";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $id)
    {
        return "Menampilkan detail jurusan dengan ID: {$id}";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         return "Menampilkan detail jurusan dengan ID: {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
          return "Menampilkan halaman edit jurusan dengan ID: {$id}";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         return "Melakukkan perubahan data jurusan {$id}";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         return "Menghapus data jurusan {$id}";
    }
}
