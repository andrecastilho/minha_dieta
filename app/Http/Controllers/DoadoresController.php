<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Respostas;

class DoadoresController extends Controller
{

    public function index()
    {
            return Inertia::render('Home');
    }


    public function saveHome(Request $request)
    {
        if(array_keys($_GET)=='sexo'){
        $inserir = $_GET;
        $inserir["id"] = "";
        $inserir["tokenable_id"] = md5(microtime(true));
        Respostas::updateOrCreate($inserir);
        
        return Inertia::render('P1');
        }else{
            return Inertia::render('P1');
        }
    }

    
    public function saveFormulario(Request $request)
    {
      //  dd($request);
        $respostas = Respostas::firstOrNew(['id' =>  $_COOKIE['id']]);
        $respostas->idade = $request->all()['idade'];
        $respostas->peso = $request->all()['peso'];
        $respostas->altura = $request->all()['altura'];
        $respostas->peso_desejado = $request->all()['idade'];
        $respostas->email = $request->all()['email'];
        $respostas->save();
      
        return Inertia::render('Loading',[
                            'idade' =>   $respostas->idade,
                            'peso' =>   $respostas->peso,
                            'altura' =>   $respostas->altura,
                            'peso_desejado' =>   $respostas->peso_desejado,
                            'sexo' =>   $respostas->sexo,
                 
            ]);
    }

    public function redirectVendas(Request $request)
    {
        $respostas = Respostas::firstOrNew(['id' =>  $_COOKIE['id']]);
      
      //dd($request);
        return Inertia::render('P30',[
                            'idade' =>   $respostas->idade,
                            'peso' =>   $respostas->peso,
                            'altura' =>   $respostas->altura,
                            'peso_desejado' =>   $respostas->peso_desejado,
                            'sexo' =>   $respostas->sexo,
                 
            ]);
    }

    public function saveP(Request $request)
    {
        //dd($request->all());
        
        $p = $request['p'];
               
        if($request->all()['p']=="P8"){

            $respostas = Respostas::firstOrNew(['id' =>  $_COOKIE['id']]);
            $respostas->p8 = implode("|",$request->all());
            $respostas->save();
            return Inertia::render($p);

        }

        if($request->all()['p']=="P9"){

            $respostas = Respostas::firstOrNew(['id' =>  $_COOKIE['id']]);
            $respostas->p9 = implode("|",$request->all());
            $respostas->save();
            return Inertia::render($p);

        }

        if($request->all()['p']=="P10"){

            $respostas = Respostas::firstOrNew(['id' =>  $_COOKIE['id']]);
            $respostas->p10 = implode("|",$request->all());
            $respostas->save();
            return Inertia::render($p);

        }
        if($request->all()['p']=="P11"){

            $respostas = Respostas::firstOrNew(['id' =>  $_COOKIE['id']]);
            $respostas->p11 = implode("|",$request->all());
            $respostas->save();
            return Inertia::render($p);

        }

        if($request->all()['p']=="P12"){

            $respostas = Respostas::firstOrNew(['id' =>  $_COOKIE['id']]);
            $respostas->p12 = implode("|",$request->all());
            $respostas->save();
            return Inertia::render($p);

        }

        if($request->all()['p']=="P17"){

            $respostas = Respostas::firstOrNew(['id' =>  $_COOKIE['id']]);
            $respostas->p17 = implode("|",$request->all());
            $respostas->save();
            return Inertia::render($p);

        }

        if($request->all()['p']=="P24"){

            $respostas = Respostas::firstOrNew(['id' =>  $_COOKIE['id']]);
            $respostas->p24 = implode("|",$request->all());
            $respostas->save();
            return Inertia::render($p);

        }
        $kes = array_keys($request->all());
        //dd($kes);
            if($request->all()['p1']){ 
                $respostas = Respostas::firstOrNew(['id' =>  Respostas::max('id')]);
                setcookie('id',$respostas->id);
                $respostas->p1 = $kes[2];
                $respostas->save();
                return Inertia::render($p);
            }else{
                $respostas = Respostas::firstOrNew(['id' =>  $_COOKIE['id']]);
                $saveP = "P".(substr($p,1)-1);
                $respostas->$saveP = $kes[2];
                $respostas->save();
                return Inertia::render($p);
            }

            
    }
}