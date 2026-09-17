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
                'id' => 1,
                'code' => 'AKL',
                'name' => 'Akuntansi Dasar',
                'description' => 'Ini adalah pelajaran menghitung pajak',
            ],
            [
                'id' => 2,
                'code' => 'BD',
                'name' => 'Bisnis Digital',
                'description' => 'Mempelajari bisnis dan pemasaran digital',
            ],
            [
                'id' => 3,
                'code' => 'TKJ',
                'name' => 'Teknik Komputer dan Jaringan',
                'description' => 'Mempelajari komputer dan jaringan',
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
        $title = 'Sistem Sekolah - Membuat Daftar Jurusan';

        return view('majors.create', [
            'title' => $title
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Melakukan penambahan data jurusan";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = 'Sistem Sekolah - Menampilkan Jurusan';

        return view('majors.show', [
            'title' => $title,
            'id' => $id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Sistem Sekolah - Mengubah Daftar Jurusan';

        return view('majors.edit', [
            'title' => $title,
            'id' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Melakukan perubahan data jurusan {$id}";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Menghapus data jurusan {$id}";
    }
}