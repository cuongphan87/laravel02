<?php

namespace App\Http\Controllers;




use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function uploadFile(Request $request) {
        
       
        if( isset($_POST) && !empty($_FILES['file']) ) {
            $duoi = explode('.', $_FILES['file']['name']);
            $duoi = $duoi[count($duoi)-1];
            $name_file = $_FILES['file']['name'];
            
            echo $duoi;
            echo $name_file;
            if ( $duoi == 'jpg' || $duoi == 'png' || $duoi == 'git' ) {
                if (move_uploaded_file($_FILES['file']['tmp_name'], 'upload/' .$_FILES['file']['name'])) {
                    
                    die($name_file);
                    
                } else {
                    die("no ok");
                }
            } else {
                die('Chi duoc upload anh upload.php');
            }
            
            
        } else {
            echo 'no oke';
        }
     
    }
}
