<?php

namespace App\Http\Controllers;

use App\Models\Survei;
use Illuminate\Http\Request;

class SurveiController extends Controller
{
    public function index()
    {
    
        return view('survei.index');
    }
    public function store(Request $request)
    {
        $option = $request->option;
        if($option === 'Buruk'){
            $reaction = 1;
        }elseif($option === 'Baik'){
            $reaction = 2;
        }elseif($option === 'Cukup'){
            $reaction = 3;
        }elseif($option === 'Sangat Baik'){
            $reaction = 4;
        }
        $survei = Survei::create([
            'reaction' => $reaction,
        ]);
        if($survei){
            return response()->json(['success' => $reaction]);
        }else{
            return response()->json(['failure' => 'Gagal Menambahkan Data']);
        }
    }
}
