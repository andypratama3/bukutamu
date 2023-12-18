<?php

namespace App\Http\Controllers;

use App\Models\Survei;
use Illuminate\Http\Request;

class SurveiController extends Controller
{
    public function index()
    {
        $survei = Survei::count();
        $data_buruk = Survei::where('reaction', 1)->count();
        $data_baik = Survei::where('reaction', 2)->count();
        $data_cukup = Survei::where('reaction', 3)->count();
        $data_sangatBaik = Survei::where('reaction', 4)->count();

        if($survei > 0){
            $percent_sangatBaik = round(($data_sangatBaik / $survei) * 100);
            $percent_cukup = round(($data_cukup / $survei) * 100);
            $percent_baik = round(($data_baik / $survei) * 100);
            $percent_buruk = round(($data_buruk / $survei) * 100);
        }else {
            //do nothing
        }
        // dd($percent_sangatBaik);
        return view('survei.index', compact('percent_buruk','percent_baik','percent_cukup','percent_sangatBaik'));
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
