<?php
// namespace App\Filament\Resources\LaporanResource\Widgets;

// use App\Models\laporan;
// use Filament\Widgets\StatsOverviewWidget as BaseWidget;
// use Filament\Widgets\StatsOverviewWidget\Card;
// use Carbon\Carbon;

namespace app\Filament\Resources\LaporanResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use App\Models\laporan;
use Filament\Widgets\StatsOverviewWidget\Card;
use Carbon\Carbon;

class LaporanOverview extends BaseWidget {
    // protected static string $view = 'filament.widgets.LaporanOverview';

    protected function getStats(): array {
        $jumlahKeterlambatanHariIni = Laporan::whereDate('tanggal', today())->sum('jumlah_terlambat');
        $hariPertama = Carbon::now()->startOfWeek(Carbon::MONDAY);
        $jumlahKeterlambatan = [];
        for ($i = 0; $i < 5; $i++) {
            $tanggal = $hariPertama->copy()->addDays($i);
            $jumlahKeterlambatan[] = Laporan::whereDate('tanggal', $tanggal)->sum('jumlah_terlambat');
        }

        return [
            Card::make('Kasus Keterlambatan Hari Ini', $jumlahKeterlambatanHariIni)
                ->chart($jumlahKeterlambatan)
                ->description('Total keterlambatan dari Senin hingga Jumat')
                ->color('success')
                ->extraAttributes([
                    'style' => 'color: black;',
                    'class' => 'text-white',
                ]),

            // Card::make('Menu Kasus Keterlambatan', '---')
            //     ->description('Button Redirect Ke Menu Keterlambatan')
            //     ->color('danger'),
            //     // ->extraAttributes([
            //     //     'class' => 'cursor-pointer',
            //     //     'style' => 'background-color: #F87171; color: white;',
            //     // ]),

            // Card::make('Template Word Pemanggilan Siswa', '---')
            //     ->description('Button Redirect Ke Menu Template')
            //     ->color('success'),
            //     // ->extraAttributes([
            //     //     'class' => 'cursor-pointer',
            //     //     'style' => 'background-color: #34D399; color: white;',
            //     // ]),
        ];
    }
}
