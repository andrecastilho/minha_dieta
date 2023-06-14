<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Respostas;

class DoadoresController extends Controller
{

    public function index()
    {
            return Inertia::render('Home', [
            'respostas' => Respostas ::all()
                    ->transform(function($respostas) {
                        return [
                            'id' =>   $respostas->id,
                        ];
                    }
                ),
            ]);
    }


    public function saveHome(Request $request)
    {
        $inserir = $_GET;
        $inserir["id"] = "";
        $inserir["tokenable_id"] = md5(microtime(true));
        Respostas::updateOrCreate($inserir);
        
        return Inertia::render('P1');
    }

    
    public function saveP(Request $request)
    {
        $p = $request['p'];

        if($request->all()['p']=="P30"){
            $respostas = Respostas::firstOrNew(['id' =>  $_COOKIE['id']]);
            $respostas->idade = $request->all()['idade'];
            $respostas->peso = $request->all()['peso'];
            $respostas->altura = $request->all()['altura'];
            $respostas->peso_desejado = $request->all()['idade'];
            $respostas->email = $request->all()['email'];
            $respostas->save();
        }
            if($request->all()['p1']){ 
                $respostas = Respostas::firstOrNew(['id' =>  Respostas::max('id')]);
                setcookie('id',$respostas->id);
                $respostas->p1 = $request[0];
                $respostas->save();
            }else{
                $respostas = Respostas::firstOrNew(['id' =>  $_COOKIE['id']]);
                $saveP = "P".(substr($p,1)-1);
                $respostas->$saveP = $request[0];
                $respostas->save();
            }

            return Inertia::render($p);
    }
}