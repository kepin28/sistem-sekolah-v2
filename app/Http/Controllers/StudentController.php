<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class StudentController extends Controller
{
    public function index()
    {
        return "Ini adalah halaman daftar siswa";
    }
    public function show(string $id)
    {
        return "menampilkan detail siswa dengan ID: ($id)";
    }

     public function create()
    {
        return "menampilkan halaman siswa";
    }
    public function edit(string $id)
    {
    return "menampilkan halaman edit siswa";
    }
    public function store()
    {
        return "melakukan perubahan data siswa";
    }
    public function update(string $id)
    {
        return "melakukan perubahan data siswa";
    }
    public function destroy(string $id)
    {
        return "menghapus data siswa";
    }
}
 
 