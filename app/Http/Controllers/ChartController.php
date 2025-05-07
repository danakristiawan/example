<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use IcehouseVentures\LaravelChartjs\Facades\Chartjs;

class ChartController extends Controller
{
    public function index()
    {
        $data1 = Flight::selectRaw("strftime('%d', created_at) as date, count (*) as aggregate")
        ->groupBy('date')
        ->get();
        $data2 = Flight::selectRaw("strftime('%m', created_at) as date, count (*) as aggregate")
        ->groupBy('date')
        ->get();
        
        $chart1 = Chartjs::build()
         ->name('barChartTest')
         ->type('bar')
         ->size(['width' => 400, 'height' => 200])
         ->labels($data1->map(fn ($data1) => $data1->date)->toArray())
         ->datasets([
             [
                'label' => 'My First dataset',
                'data' => $data1->map(fn ($data1) => $data1->aggregate)->toArray(),
                'backgroundColor' => "rgba(16, 90, 216, 0.31)",
                'borderColor' => "rgba(16, 90, 216, 0.31)",
             ],
             [
                'label' => 'My First dataset',
                'data' => $data1->map(fn ($data1) => $data1->aggregate)->toArray(),
                'backgroundColor' => "rgba(220, 13, 48, 0.31)",
                'borderColor' => "rgba(220, 13, 48, 0.31)",
             ],
         ])
         ->options([
            "scales" => [
                "y" => [
                    "beginAtZero" => true
                    ]
                ]
         ]);
         $chart2 = Chartjs::build()
         ->name('lineChartTest')
         ->type('line')
         ->size(['width' => 400, 'height' => 200])
         ->labels($data2->map(fn ($data2) => $data2->date)->toArray())
         ->datasets([
             [
                'label' => 'My First dataset',
                'data' => $data2->map(fn ($data2) => $data2->aggregate)->toArray(),
                'backgroundColor' => "rgba(16, 90, 216, 0.31)",
                'borderColor' => "rgba(16, 90, 216, 0.31)",
             ],
         ])
         ->options([
            "scales" => [
                "y" => [
                    "beginAtZero" => true
                    ]
                ]
         ]);

        return view('chart', compact('chart1', 'chart2'));
    }
}
