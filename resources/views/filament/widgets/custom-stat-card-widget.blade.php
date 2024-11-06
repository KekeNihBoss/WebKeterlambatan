<div class="p-4 bg-white rounded-lg shadow">
    <h3 class="text-lg font-semibold text-gray-700">Kasus Keterlambatan Hari Ini</h3>
    <p class="text-2xl font-bold text-green-600">{{ $jumlahKeterlambatanHariIni }}</p>
    <p class="text-sm text-gray-500">Total keterlambatan dari Senin hingga Jumat</p>

    <!-- Chart -->
    <div>
        {!! $this->chart($jumlahKeterlambatan) !!}
    </div>

    <!-- Button -->
    <a href="{{ route('filament.resources.siswas.index') }}"
       class="mt-4 inline-flex items-center px-4 py-2 bg-primary-600 text-white rounded hover:bg-primary-700">
       Lihat Data Siswa
    </a>
</div>
