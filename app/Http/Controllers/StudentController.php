<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Models\Nhanvien;
use Illuminate\Http\Request;
use App\Http\Models\Student;

class StudentController extends Controller
{
    public function insert(Request $request) {
        $student = new Student();
        
        $student->name = $request->input('namenv');
        
       $student->save();
        echo 'Insert Name successfull: ' .$student->name;
           
    }
    
    public function update(Request $request) {
        $student = new Student();
        $name = $request->name;
        $student->where('id',1)
                ->update(['name' => $name]);
    }
    
    public function delete(Request $request) {
        $student = new Student();
        $id = $request->id;
        $nv = $student->find($id);

   
        $nv->delete();
        
        echo 'Da xoa thanh cong: '.$id;
        
    }
    
}
