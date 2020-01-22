<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Clientes;
use DB;
use Toastr;
use Auth;

class ClientesController extends Controller
{

	public function index(){


	$clientes = DB::table('clientes as a')
        ->select('a.id','a.nombre','a.apellido','a.estatus','a.email','a.usuario','a.estatus','a.telefono','a.direccion','c.name as user','c.lastname')
		->join('users as c','c.id','a.usuario')
		->where('a.estatus','=',1)
        ->get();     
        return view('clientes.index', compact('clientes')); 
	}



	public function create(Request $request){


          $clientes = new Clientes();
          $clientes->nombre =$request->nombre;
          $clientes->apellido =$request->apellido;
		  $clientes->email =$request->email;
          $clientes->usuario = \Auth::user()->id;
		  $clientes->telefono = $request->telefono;
		  $clientes->direccion = $request->direccion;
		  $clientes->estatus = 1;
          $clientes->save();		   
		
            Toastr::success('Registrado Exitosamente.', 'Cliente!', ['progressBar' => true]);

		return redirect()->action('ClientesController@index', ["created" => true, "analisis" => Clientes::all()]);
	}    

  public function delete($id){
    $clientes = Clientes::find($id);
    $clientes->estatus = 0;
    $clientes->save();

     Toastr::success('Eliminado Exitosamente.', 'Cliente!', ['progressBar' => true]);

    return redirect()->action('ClientesController@index', ["deleted" => true, "clientes" => Clientes::all()]);
  }

  public function createView() {

    return view('clientes.create');
  }

    public function editView($id){
      $cliente = Clientes::where('id','=',$id)->first();
      return view('clientes.edit', compact('cliente'));
    }

      public function edit(Request $request){
          $clientes = Clientes::find($request->id);
          $clientes->nombre =$request->nombre;
          $clientes->apellido =$request->apellido;
		  $clientes->email =$request->email;
          $clientes->usuario = \Auth::user()->id;
		  $clientes->telefono = $request->telefono;
		  $clientes->direccion = $request->direccion;
		  $clientes->estatus = 1;
          $res = $clientes->save();
          
               Toastr::success('Modificado Exitosamente.', 'Cliente!', ['progressBar' => true]);

      return redirect()->action('ClientesController@index', ["edited" => $res]);
    }

 
}
