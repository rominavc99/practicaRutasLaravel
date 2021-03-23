<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notas;

class NotasController extends Controller
{
    public function index (){
        $notas = Notas::all();  //DB::table('notas')->get();
    
        return view('notas', ['notas' => $notas]);
    }

    public function agregar (){
        return view('agregar');
    }

    public function crear (Request $request){
        Notas::create([
            'titulo' => $request->input('title'),
            'contenido' => $request->input('content'),
        ]);
    
        return redirect('/notas');
    
    }

    public function editar ($id){
        $notas = Notas::find($id); //DB::table('notas')->where('id',$id)->first();
        return view('editarnota', ['notas' => $notas]);
    }

    public function update(Notas $notas, Request $request){

        $notas->update([
            'titulo' => $request->input('title'),
            'contenido' => $request->input('content'),
        ]);

        return redirect('/notas');
    }

    public function destroy($id){
        $notas = Notas::find($id);
        $notas->delete();

        return redirect('/notas');
    }
}
