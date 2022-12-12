<?php

namespace App\Http\Controllers;

use App\Models\Salad;
use Illuminate\Http\Request;

class SaladController extends Controller
{
    public function index(Salad $salad)//インポートしたSaladをインスタンス化して$saladとして使用。
    {
        return view('salads/index')->with(['salads' => $salad->getPaginateByLimit(1)]);
    }
    
    public function show(Salad $salad)
    {
        return view('salads/show')->with(['salad' => $salad]);
    }
}
