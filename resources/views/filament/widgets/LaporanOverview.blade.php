<div style="background-color: #60A5FA; border-radius: 0.5rem; padding: 1rem; color: white;">
    <div style="display: flex; align-items: center; gap: 0.5rem; ">
        <div style="background-color: white; padding: 0.5rem; border-radius: 9999px;">
            <img src="{{ asset('path/to/icon.png') }}" alt="Icon" style="width: 1.5rem; height: 1.5rem;">
        </div>
        <div>
            <h3 style="font-weight: bold; font-size: 1.125rem;">KASUS</h3>
            <p style="font-size: 0.875rem;">Keterlambatan Hari Ini: {{ $jumlahKeterlambatanHariIni }}</p>
        </div>
    </div>
    <button style="margin-top: 1rem; background-color: #374151; color: white; padding: 0.25rem 1rem; border-radius: 0.25rem;"
        onclick="window.location.href='{{ route('filament.resources.keterlambatans.index') }}'">
        INSERT
    </button>
</div>
