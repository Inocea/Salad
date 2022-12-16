<?php

namespace App\Http\Controllers;

use App\Models\Salad;
use App\Http\Requests\SaladRequest;
use Illuminate\Http\Request;
use Auth;

class SaladController extends Controller
{
    public function top(Salad $salad)
    {
        return view('salads/top')->with(['salads' => $salad->getPaginateByLimit()]);
    }
    
    public function index(Salad $salad)//インポートしたSaladをインスタンス化して$saladとして使用。
    {
        return view('salads/index')->with(['salads' => $salad->getPaginateByLimit()]);
    }
    
    public function show(Salad $salad)
    {
        return view('salads/show')->with(['salad' => $salad]);
    }
    
    public function create()
    {
        return view('salads/create');
    }
    
    // public function cloudinary_store(SaladRequest $request)
    // {
    //     $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
    //     dd($image_urll);  //画像のURLを画面に表示
    // }
    
    public function store(Salad $salad, SaladRequest $request)
    {
        $input = $request['salad'];
        //$image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        //dd($image_urll);  //画像のURLを画面に表示
        $salad->fill($input)->save();
        dd($input);
        return redirect('/salads/' . $salad->id);
    }
    
    public function edit(Salad $salad) //編集機能
    {
        return view('salads/edit')->with(['salad' => $salad]);
    }
    
    public function update(SaladRequest $request, Salad $salad) //編集機能
    {
        $input_salad = $request['salad'];
        $salad->fill($input_salad)->save();
    
        return redirect('/salads/' . $salad->id);
    }
    
    public function delete(Salad $salad) //削除機能
    {
        $salad->delete();
        return redirect('/');
    }
    
    public function mypage(Salad $salad) //マイページに飛ぶ
    {
        return view('salads/mypage')->with(['salads' => $salad->where('user_id', 'Auth::id')->get()]);
    }
}
