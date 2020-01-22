<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Clientes;
use App\Models\Llamados;
use DB;
use Toastr;
use Auth;

class LlamadosController extends Controller
{

	public function index(){


	$llamados = DB::table('llamados as a')
        ->select('a.id','a.respuesta','a.factible','a.estatus','a.cliente','a.usuario','a.estatus','b.nombre','b.apellido','c.name as user','c.lastname')
        ->join('clientes as b','b.id','a.cliente')
		->join('users as c','c.id','a.usuario')
		->where('a.estatus','=',1)
        ->get();     
        return view('llamados.index', compact('llamados')); 
	}



	public function create(Request $request){


          $llamados = new Llamados();
          $llamados->cliente =$request->cliente;
          $llamados->factible =$request->factible;
		  $llamados->respuesta =$request->respuesta;
          $llamados->usuario = \Auth::user()->id;
		  $llamados->estatus = $request->estatus;
          $llamados->save();		   
		
            Toastr::success('Registrada Exitosamente.', 'Llamada!', ['progressBar' => true]);

		return redirect()->action('LlamadosController@index', ["created" => true, "llamados" => Llamados::all()]);
	}    

  public function delete($id){
    $llamada = Clientes::find($id);
    $llamada->delete();

     Toastr::success('Eliminado Exitosamente.', 'Llamada!', ['progressBar' => true]);

    return redirect()->action('LlamadosController@index', ["deleted" => true, "llamada" => Llamados::all()]);
  }

  public function createView() {

  	$clientes= Clientes::where('estatus','=',1)->get();

    return view('llamados.create',compact('clientes'));
  }

    public function editView($id){
      $llamada = Llamados::where('id','=',$id)->first();
      return view('llamados.edit', compact('llamada'));
    }

      public function edit(Request $request){
          $llamados = Clientes::find($request->id);
          $llamados->cliente =$request->cliente;
          $llamados->factible =$request->factible;
		  $llamados->respuesta =$request->respuesta;
          $llamados->usuario = \Auth::user()->id;
		  $llamados->estatus = $request->estatus;
          $res = $llamados->save();
          
         Toastr::success('Modificado Exitosamente.', 'Llamada!', ['progressBar' => true]);

      return redirect()->action('LlamadosController@index', ["edited" => $res]);
    }

 
}
