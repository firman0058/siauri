<?php

namespace App\Http\Controllers;
use App\Models\Monitoring;
use Illuminate\Http\Request;

class TestController extends Controller
{
    function index(){
        $data['list_monitoring'] = Monitoring::all();
        return view('data.table', $data);
    }
}
