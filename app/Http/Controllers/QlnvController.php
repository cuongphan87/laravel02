<?php

namespace App\Http\Controllers;



use App\Http\Models\Nhanvien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\NhanvienRequest;

class QlnvController extends Controller
{
    
    public function checkForm( NhanvienRequest $request ){
//         var_dump($request->all());
           // echo 'qlcd  ';
          

    }
    
    public function index() {
        return view('qlnv');
    }
    
    public function selectall() {
        $nhanvien = new Nhanvien();
        
        $data = $nhanvien::all();
 
        $data->toArray();
        echo( json_encode($data));       
    }
    
    public function insertnv(Request $request) {
        $nhanvien = new Nhanvien();
        $data = Input::all();
      
         
        $nhanvien->manv = $data['manv'];
        $nhanvien->hoten = $data['hoten'];
        $nhanvien->diachi = $data['diachi'];
        $nhanvien->ngaysinh = $data['ngaysinh'];
        $nhanvien->mobile = $data['mobile'];
        $nhanvien->email = $data['email'];
        $nhanvien->luongcb = $data['luongcb'];
        $nhanvien->phucap = $data['phucap'];
        $nhanvien->tongluong = $data['tongluong'];
        $nhanvien->image = $data['image'];
        
        $nhanvien->save($data);
        $mess = array(
            "Thêm mới thành công!"
        );
        
        echo json_encode($mess);
        
    }
    
    
    public function deletenv(Request $request){
        $nhanvien = new Nhanvien();
        $data = Input::all();
        
        $manv = $data['manv'];
        
     
      $result = $nhanvien->where('manv',$manv);
        
     
      $result->delete();
        
        $mess = array(
            "Xoa thanh cong"
        );
        
        echo json_encode($mess);
        
    }
    
    public function updatenv() {
        $nhanvien = new Nhanvien();
        $data = Input::all();
        
        $manv = $data['manv'];
        
        $nhanvien->where('manv',$manv)
                            ->update($data);

        
        $mess = array(
            "cap nhat thanh cong"
        );
        
        echo json_encode($mess);
        
        
    }
    
    
    
    
    
    
    
    
    
    
}
