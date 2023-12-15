<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataController extends Controller
{
    public function show(){
        return view('dashboardData');
    }

    public function submitData(Request $request){
        $data = [
            'NIK' => $request->input('NIK'),
            'Nama' => $request->input('Nama'),
            'Provinsi' => $request->input('Provinsi'),
            'Kota' => $request->input('Kota'),
            'Nomor' => $request->input('Nomor'),
        ];

        return view('dashboardAdmin',$data);
    }
}
