@if ($status == 'Aktif')

    <span class="inline-flex rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">
        Aktif
    </span>

@else

    <span class="inline-flex rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-700">
        Tidak Aktif
    </span>

@endif