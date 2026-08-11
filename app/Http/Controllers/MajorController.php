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
         $title ='Sistem Sekolah - Membuat Daftar Jurusan';
        return view('majors.create', [
            'title' => $title
        ]);
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
         $title ='Sistem Sekolah - Menampilkan Jurusan';

        return view('majors.show', [
            'title' => $title
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $title ='Sistem Sekolah - Mengubah Daftar Jurusan';
        return view('majors.edit', [
            'title' => $title
        ]);
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
