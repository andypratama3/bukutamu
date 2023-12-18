<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\BukuTamu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class BukuTamuController extends Controller
{
    public function index()
    {
        return view('dashboard.bukutamu.index');
    }
    public function data_table(Request $request)
    {
        $query = BukuTamu::select('id','name','instansi','hp','tujuan')->orderBy('created_at','desc');
        $date_start = $request->date_start;
        $date_end = $request->date_end;
        if ($date_start && $date_end) {
            $query = $query->whereBetween('created_at', [$date_start, $date_end])->orderBy('created_at');
        } elseif ($date_start) {
            $query = $query->where('created_at', $date_start)->orderBy('created_at');
        } elseif ($date_end) {
            $query = $query->where('created_at', $date_end)->orderBy('created_at');
        }

        return DataTables::of($query)
                ->addColumn('options', function ($row){
                    return '
                    <a href="' . route('dashboard.bukutamu.edit', $row->id) . '" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                    <button data-id="' . $row['id'] . '" class="btn btn-sm btn-danger" id="btn-delete"><i class="fa fa-trash"></i></button>
                ';
                })
                ->rawColumns(['options'])
                ->addIndexColumn()
                ->make(true);

    }
    public function edit($id)
    {
        $bukutamu = BukuTamu::where('id', $id)->firstOrFail();
        return view('dashboard.bukutamu.edit', compact('bukutamu'));
    }
    public function update(Request $request,$id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'instansi' => 'required|string',
            'hp' => 'required|string',
            'tujuan' => 'required|string',
        ]);
        $bukuTamu = BukuTamu::findOrFail($id);
        $bukuTamu->update($validatedData);

        toastr()->success('Data Berhasil Di Simpan!');
        return redirect()->route('dashboard.bukutamu.index');
    }
    public function destroy($id)
    {
        $bukutamu = BukuTamu::where('id', $id)->firstOrFail();
        $bukutamu->delete();
        if($bukutamu){
            toastr()->success('Data Berhasil Di Hapus!');
            return response()->json(['success' => 'Berhasil Menghapus BukuTamu']);
        }else{
            return response()->json(['failure' => 'Gagal Menghapus Data']);
        }
    }
}
