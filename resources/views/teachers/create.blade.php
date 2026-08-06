@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="mb-8 border-b border-[#E5E3DB] pb-5">
            <a href="" class="text-xs uppercase tracking-[0.15em] text-slate-400 hover:text-[#A16207]">&larr; Buku
                Induk</a>
            <h1 class="font-display mt-2 text-3xl font-semibold text-[#16213A]">Catat guru Baru</h1>
            <p class="mt-1 text-sm text-slate-500">Isi data untuk mendaftarkan Guru ke buku induk.</p>
        </div>

        <form action="" method="POST" class="space-y-6 border border-[#E5E3DB] bg-white p-8">

            <div>
                <label for="nip"
                    class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">NIP</label>
                <input type="text" id="nip" name="nip" placeholder="Contoh: 198501012024"
                    class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm placeholder:text-slate-400 focus:border-[#A16207] focus:bg-white focus:outline-none">
            </div>

            <div>
                <label for="name"
                    class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Nama
                    Lengkap</label>
                <input type="text" id="name" name="name" placeholder="Nama lengkap guru"
                    class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm placeholder:text-slate-400 focus:border-[#A16207] focus:bg-white focus:outline-none">
            </div>

            <div>
                <label for="gender"
                    class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Jenis
                    Kelamin</label>
                <select id="gender" name="gender"
                    class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>

            <div>
                <label for="major"
                    class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Jurusan</label>
                <select id="major" name="major"
                    class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">
                    <option value="">Pilih jurusan</option>
                    <option value="">Akuntasi</option>
                    <option value="">Teknik Komputer dan Jaringan</option>
                    <option value="">Bisnis Digital</option>
                </select>
            </div>

            <div>
                <label for="class"
                    class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Phone</label>
                <input type="text" id="class" name="class" placeholder="Contoh: 081234560001"
                    class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm placeholder:text-slate-400 focus:border-[#A16207] focus:bg-white focus:outline-none">
            </div>

              <div>
                <label for="status"
                    class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Status</label>
                <input type="text" id="class" name="class"
                    class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm placeholder:text-slate-400 focus:border-[#A16207] focus:bg-white focus:outline-none">
            </div>

            <div class="flex justify-end gap-4 border-t border-[#EFEDE6] pt-6">
                <a href="#" class="px-4 py-2.5 text-sm font-medium text-slate-500 hover:text-[#16213A]">Batal</a>
                <button type="submit"
                    class="bg-[#16213A] px-6 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">Simpan
                    ke Buku Induk</button>
            </div>
        </form>
    </main>
    {{-- Content End --}}

    {{-- Footer Start --}}
    <footer class="border-t border-[#E5E3DB]">
        <div class="mx-auto flex max-w-5xl items-center justify-between px-6 py-6 text-xs text-slate-400">
            <span>&copy; 2026 Sistem Sekolah</span>
            <span class="uppercase tracking-[0.15em]">Media Pembelajaran SMK</span>
        </div>
@endsection