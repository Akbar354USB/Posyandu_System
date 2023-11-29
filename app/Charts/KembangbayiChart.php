<?php

namespace App\Charts;

use App\Models\Service;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class KembangbayiChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        // $tahun = date('Y');
        // $bulan = date('m');
        // for ($i = 1; $i <= $bulan; $i++){
        //     $tinggiBadan = Service::take(1)->first();
        //     $dataBulan[] = $i;
        //     $dataTinggiBadan = $tinggiBadan;
        // }
        // dd($dataTinggiBadan);
        return $this->chart->lineChart()
            ->setTitle('DATA BALITA')
            ->setSubtitle('PERKEMBANGAN TUMBUH KEMBANG BAYI')
            ->addData('Digital sales', [70, 29, 77, 28, 55, 45])
            ->addData('Digital sales', [30, 60, 40, 50, 35, 60])
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
    }
}
