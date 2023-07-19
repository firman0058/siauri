<?php

namespace App\Http\Controllers;
use App\Models\Monitoring;
use Illuminate\Http\Request;
use PDF;

class DataController extends Controller
{
    function index(){
        $data['list_monitoring'] = Monitoring::all();
        return view('data.index', $data);
    }

    public function downloadpdf(){
        $data['list_monitoring'] = Monitoring::all();
        $pdf = PDF::loadView('data.table', $data);
        // $pdf = PDF::loadView('data.table', $data)->setOptions(['defaultFont' => 'sans-serif']);
        // $pdf->setPaper(['A4', 'potrait']);
        return $pdf->stream('Data Monitoring.pdf');
    }
}