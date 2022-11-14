<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Usuario;

class UsuarioController extends Controller
{

    
    public function index(){

        $usuarios=Usuario::paginate(5);
        return view('usuarios.index',compact('usuarios'));
    }

 

    public function create(){

        
        return view('usuarios.crear');
    }
  

    public function store(Request $request){

        
        $usuarios =new Usuario();
        $usuarios->Nombre =$request->Nombre;
        $usuarios->Apellido =$request->Apellido;
        
        $usuarios->Correo =$request->Correo;
        
        $usuarios->save();
        
        return redirect()->route('users.index');
    }
      
    public function edit($id){
        $usuarios = Usuario::find($id);
        return view('usuarios.edit',compact('usuarios'));
    }
    
    public function show($id)
    {
        $usuarios = Usuario::find($id);
        
    
        return redirect()->route('users.index');
    } 
   
    public function destroy(Usuario $id){

        
       
      
         $id->delete();

        
     
         return redirect()->route('users.index');
       
       
    }
   
}
