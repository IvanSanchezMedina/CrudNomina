<?php

namespace App\Http\Controllers;
use App\Empleados;
use Validator;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function __construct()
    {
        $this->empleado = new Empleados();
    }

    public function index(Request $request)
    {
        $empleados= $this->empleado->get();

        return view('Empleados.index',compact('empleados'));
    }

    public function store(Request $request)
    {
      
        $validator= $request->validate([
            'nombre'=>'required|string',
            'apellido_paterno'=>'required',
            'apellido_materno'=>'required',
            'estado'=>'required',
            'correo'=>'required|email',
            'tipo_contrato'=>'required',
            'codigo'=>'required',
        ]);
        
        if ($validator==true) {
            
            $this->empleado->create([
                'nombre'=>$request->nombre,
                'apellido_paterno'=>$request->apellido_paterno,
                'apellido_materno'=>$request->apellido_materno,
                'estado'=>$request->estado,
                'codigo'=>$request->codigo,
                'correo'=>$request->correo,
                'tipo_contrato'=>$request->tipo_contrato,
            ]);

            return back()->with('successs','Registrado Exitosamente');
        }
    }
    public function show($id)
    {
        $empleado= $this->empleado->find($id);
        return view('Empleados.show',compact('empleado'));
    }

    public function edit(Request $request,$id)
    {
      
        $validator= $request->validate([
            'nombre'=>'required|string',
            'apellido_paterno'=>'required',
            'apellido_materno'=>'required',
            'estado'=>'required',
            'correo'=>'required|email',
            'tipo_contrato'=>'required',
            'codigo'=>'required',
        ]);
        
        if ($validator==true) {
            
            $this->empleado->where('id',$id)->update([
                'nombre'=>$request->nombre,
                'apellido_paterno'=>$request->apellido_paterno,
                'apellido_materno'=>$request->apellido_materno,
                'estado'=>$request->estado,
                'codigo'=>$request->codigo,
                'correo'=>$request->correo,
                'tipo_contrato'=>$request->tipo_contrato,
            ]);

            return back()->with('successs','Registrado Exitosamente');
        }
    }

    public function delete($id)
    {
        $this->empleado->where('id',$id)->delete();
        return back()->with('successs','Empleado Eliminado Exitosamente');
    }
    public function detail($id)
    {
        $empleado= $this->empleado->find($id);
        return view('Empleados.detail',compact('empleado'));
    }

    public function status($id,$value)
    {
        
        $empleado= $this->empleado->find($id);

        if ($value==1) {
            $estadoNuevo='Activo';
        }
        if ($value==2) {
            $estadoNuevo='Inactivo';
        }
        $empleado->update([
            'estado'=>$estadoNuevo
        ]);
        return back()->with('successs','Empleado Eliminado Exitosamente');
    }
}
