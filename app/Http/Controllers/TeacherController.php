<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
     public function index()
    {
        return "Ini adalah halaman daftar guru";
    }
    public function show(string $id)
    {
        return "menampilkan detail guru dengan ID: ($id)";
    }

     public function create()
    {
        return "menampilkan halaman guru";
    }
    public function edit(string $id)
    {
    return "menampilkan halaman edit guru";
    }
    public function store()
    {
        return "melakukan perubahan data guru";
    }
    public function update(string $id)
    {
        return "melakukan perubahan data guru";
    }
    public function destroy(string $id)
    {
        return "menghapus data guru";
    }
}
