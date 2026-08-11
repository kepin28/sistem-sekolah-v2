@extends('layouts.app')

@section('title', $title)

@section('content')
            <div>
                <label for="code"
                    class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Code Jurusan</label>
                <select id="code" name="code"
                    class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">
                    <option value="L" selected>AKL</option>
                    <option value="P">BID</option>
                    <option value="P">TKJ</option>
                </select>
            </div>

            <div>
                <label for="major"
                    class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Nama Jurusan</label>
                <select id="major" name="major"
                    class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">
                    <option value="">Akuntasi dan Lembaga Keungan</option>
                    <option value="">Bisnis Digital</option>
                    <option value="">Teknik Komputer dan Jaringan</option>
                </select>
            </div>

             <div>
                <label for="major"
                    class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Deskripsi</label>
                <select id="major" name="major"
                    class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">
                    <option value="">Program keahlian di Sekolah Menengah Kejuruan (SMK) dalam bidang bisnis dan manajemen</option>
                    <option value="">Bidang studi yang memadukan ilmu manajemen bisnis, strategi pemasaran, kewirausahaan, dan teknologi informasi</option>
                    <option value="">program keahlian di Sekolah Menengah Kejuruan (SMK) yang mempelajari cara merakit komputer, menginstal sistem operasi, serta membangun, mengatur, dan memperbaiki jaringan komputer</option>
                </select>
            </div>

            <div class="flex justify-end gap-4 border-t border-[#EFEDE6] pt-6">
                <a href="" class="px-4 py-2.5 text-sm font-medium text-slate-500 hover:text-[#16213A]">Batal</a>
                <button type="submit"
                    class="bg-[#16213A] px-6 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">Perbarui
                    Catatan</button>
            </div>
        </form>
@endsection
