<?php

namespace App\Http\Controllers;
use App\Moto;
use App\Categoria;
use App\Marca;
use Illuminate\Http\Request;
use App\Http\Requests\MotoRequest;
class MotosController extends Controller
{
            public function index(){
                $motos=Moto::get();
                return view('sistema.motos.index', compact('motos'));

            }

            public function index2(){
                $motos=Moto::get();
                return view('sistema.formulariomotos', compact('motos'));


        }

        public function create(){

                $marcas = Marca::all();
                $categorias = Categoria::all();
            return view('sistema.motos.create',compact('marcas'),  compact('categorias'));;

        }

        public function store(MotoRequest $request){

            $motos=request()->except('_token');


       Moto::insert($motos);



        return  redirect('motos');
return back()->with ('mensaje','haz agregado una informacion a tu lista');


        }



        public function edit($id){
            $marcas = Marca::all();
            $categorias = Categoria::all();
            $moto=Moto::findOrFail($id);
            $moto=Moto::findOrFail($id);
            return view('sistema.motos.edit', compact('moto'), compact('categorias','marcas'));

        }


        public function  update(Request $request, $id){
                $moto=Moto::find($id);
                $moto->update($request->all());
                return redirect()->route('motos.index');


        }
        public function delete($id){
            $moto=Moto::destroy($id);
            return redirect('motos');
        }

        }

