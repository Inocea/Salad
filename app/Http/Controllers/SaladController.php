<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salad;

class SaladController extends Controller
{
    public function index(Salad $salad)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return $salad->get();//$postの中身を戻り値にする。
    }
}
