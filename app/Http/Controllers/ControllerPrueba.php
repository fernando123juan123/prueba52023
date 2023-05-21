<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ControllerPrueba extends Controller
{
    
    public function index(){
        $var=12;
        return view('ejemplo1',compact('var'));
    }
    public function ejemplo1(){
        $valor1=12;
        $valor2=134;
        // Introduccior dos numero distintos y mostrar el numero mayor
        if($valor1>$valor2){
            $res=$valor1;
        }else{
            $res=$valor2;
        }
        return view("ejemplo2", compact('res'));
    }
    public function ejemplo3(){
        return view("ejemplo3");
    }
    public function ejemplo3_res(Request $request){
        $valor1=$request->post('valor1');
        $valor2=$request->post('valor2');
        // Introduccior dos numero distintos y mostrar el numero mayor
        if($valor1>$valor2){
            $res=$valor1;
        }else{
            $res=$valor2;
        }
        echo json_encode(array('0' =>$res));
    }
}
