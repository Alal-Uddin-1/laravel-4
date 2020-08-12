<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class substraction extends Controller {

    
    public function sub($num1,$num2)
    {
        
        $result=$num1-$num2;
        return view('sub', ['result'=> $result]);
        
    }

}