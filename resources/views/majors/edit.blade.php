@extends('layouts.app')

@section('title', $title)

@section('content')

    <div class="mb-8 border-b border-[#E5E3DB] pb-5">

        <a href="#"
            class="text-xs uppercase tracking-[0.15em] text-slate-400 hover:text-[#A16207]">
            &larr; Daftar Jurusan
        </a>

        <h1 class="font-display mt-2 text-3xl font-semibold text-[#16213A]">
            Ubah Data Jurusan
        </h1>

        <p class="mt-1 text-sm text-slate-500">
            Memperbarui data jurusan yang sudah terdaftar.
        </p>

    </div>

    <form action="" method="POST"
        class="space-y-6 border border-[#E5E3DB] bg-white p-8">

        {{-- Kode Jurusan --}}
        <div>
            <label for="code"
                class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
                Kode Jurusan
            </label>

            <select id="code"
                name="code"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">

                <option value="">Pilih Kode Jurusan</option>
                <option value="AKL" selected>AKL</option>
                <option value="BD">BD</option>
                <option value="TKJ">TKJ</option>

            </select>
        </div>

        {{-- Nama Jurusan --}}
        <div>
            <label for="name"
                class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
                Nama Jurusan
            </label>

            <input type="text"
                id="name"
                name="name"
                value="Akuntansi dan Lembaga Keuangan"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">
        </div>

        {{-- Deskripsi --}}
        <div>
            <label for="description"
                class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">
                Deskripsi
            </label>

            <textarea id="description"
                name="description"
                rows="4"
                class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">Program keahlian di Sekolah Menengah Kejuruan (SMK) dalam bidang bisnis dan manajemen.</textarea>
        </div>

        {{-- Tombol --}}
        <div class="flex justify-end gap-4 border-t border-[#EFEDE6] pt-6">

            <a href="#"
                class="px-4 py-2.5 text-sm font-medium text-slate-500 hover:text-[#16213A]">
                Batal
            </a>

            <button type="submit"
                class="bg-[#16213A] px-6 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">
                Perbarui Catatan
            </button>

        </div>

    </form>

@endsection