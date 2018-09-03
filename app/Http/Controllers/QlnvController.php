<?php

namespace App\Http\Controllers;


use App\Http\Models\Nhanvien;

class QlnvController extends Controller
{
    public function index() {
        $allData = Nhanvien::all();
        $nv002   = Nhanvien::where('manv','nv002')
                    ->take(10)
                    ->get();
        
        $nv       = Nhanvien::find('4');
        foreach ($allData as $allData){
//             echo $allData->hoten;
        }
        
        foreach ($nv002 as $nv002) {
//             echo $nv002->hoten;
        }
        
        echo $nv->email;
        return view('qlnv');
    }
    
    
}
