<?php

namespace App\Http\Controllers;

use App\Models\BukuTamu;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BukuTamuController extends Controller
{
    public function index()
    {
        return view('bukutamu.index');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'instansi' => 'required|string',
            'hp' => 'required|string',
            'tujuan' => 'required|string',

        ],
        [
            'name.required' => 'Nama Tidak Boleh Kosong!',
            'instansi.required' => 'Instansi is Tidak Boleh Kosong!',
            'hp.required' => 'Nomor HP is Tidak Boleh Kosong!',
            'tujuan.required' => 'Tujuan is Tidak Boleh Kosong!',
        ]);

        $BukuTamu = BukuTamu::create([
            'name' => $request->input('name'),
            'instansi' => $request->input('instansi'),
            'hp' => $request->input('hp'),
            'tujuan' => $request->input('tujuan'),
        ]);

        if($BukuTamu){
            return response()->json(['success' => 'Berhasil Menambahkan BukuTamu']);
        }else{
            return response()->json(['failure' => 'Gagal Menambahkan Data']);
        }
    }
    public function data_table()
    {
        $query = BukuTamu::select('id','name','instansi','hp','tujuan')->orderBy('created_at','desc');
        return DataTables::of($query)
                ->addColumn('options', function ($row){
                    return '
                    <button data-id="' . $row['id'] . '" class="btn btn-sm btn-primary" id="button_edit" data-bs-toggle="modal" data-bs-target="#modal_edit"><i class="fa fa-edit"></i></button>

                ';
                })
                ->rawColumns(['options'])
                ->addIndexColumn()
                ->make(true);
    }
    public function show($id)
    {
        $bukuTamu = BukuTamu::where('id', $id)->firstOrFail();
        return response()->json(['message' => 'Id Ada', 'data' => $bukuTamu], 200);
    }
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'instansi' => 'required|string',
            'hp' => 'required|string',
            'tujuan' => 'required|string',
        ]);
        $bukuTamu = BukuTamu::findOrFail($id);
        $bukuTamu->update($validatedData);

        return response()->json(['message' => 'Data updated successfully', 'data' => $bukuTamu], 200);
    }
    public function destroy($id)
    {
        $bukuTamu = BukuTamu::where('id', $id)->firstOrFail();
        $bukuTamu->delete();
        if($bukuTamu){
            return response()->json(['success' => 'Berhasil Menghapus BukuTamu']);
        }else{
            return response()->json(['failure' => 'Gagal Menghapus Data']);
        }
    }
}
