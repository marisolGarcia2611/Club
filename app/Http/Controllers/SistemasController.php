<?php

namespace App\Http\Controllers;
use App\Models\Vistas;
use App\Models\Usuario_pantallas;
use App\Models\Usuario_acciones;
use Illuminate\Http\Request;
use App\Traits\MenuTrait;
use Carbon\Carbon;
use App\Traits\DatosimpleTraits;
use App\Traits\SistemasTraits;
use Illuminate\Support\Arr;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Empleados;

class SistemasController extends Controller
{
    use MenuTrait;
    use RegistersUsers;
    use DatosimpleTraits;
    use SistemasTraits;

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    { 
        $varpantallas =  $this->Traermenuenc();
        $varsubmenus =   $this->Traermenudet();
        return view('sistemas.index',compact('varpantallas','varsubmenus'));

    }

    public function indexAcciones()
    {
        $permisos = $this->forpermisos('calcular_nominas');  
            if($permisos=="registrar_permisos")
            {
                $varpantallas =  $this->Traermenuenc();
                $varsubmenus =   $this->Traermenudet();
                $varlistavistas=$this->obtenervistas();
                $varlistapuestos=$this->obtenerpuestos();
                $varlistausers=$this->obtenerusuarios();
                $varlistadepas = $this->obtenerdepartamentos();
                $varpermiso = $this->obtenerpermisos();
                return view('sistemas.acciones',compact('varpantallas','varsubmenus','varlistavistas','varlistausers','varlistadepas','varpermiso'));
            }
            else{
                return redirect()->route('panel')->with("Errorpermisos","No se logro");  
            }
          

       

    }




    protected function asignarPermiso(Request $request)
    {

        $date = Carbon::now();
        $fecha = $date->format('Y-m-d');


        $vis = new usuario_pantallas();
        $vis->idusuario=$request->get('idusuario');
        $vis->idvista=$request->get('idvista');
        $vis->iddepartamento=$request->get('iddepartamento');
        $vis->estado="A";
        $vis->created_at=$fecha;
        $vis->save();

        if($vis->save()){
            return redirect()->route('permisos')->with("success","¡Se guardaron los cambios correctamente!");
        }
        else
        {
            return redirect()->route('permisos')->with("warning","No se logro");
        }
          
    }

    public function guardar_permisos(Request $request)
    {

        $date = Carbon::now();
        $fecha = $date->format('Y-m-d');
        $id = $request->get('idusuario');

        if ( $request->has('vistas')) 
        {
            foreach ($request->get('vistas') as $idvista) 
            {
              $vardepa = $this-> obtenerdepartamentoXvista($idvista);
              foreach ($vardepa as $depa)
              $usuario_pantalas = new usuario_pantallas();
              $usuario_pantalas->idusuario=$id;
              $usuario_pantalas->idvista=$idvista;
              $usuario_pantalas->iddepartamento=$depa->iddepartamento;
              $usuario_pantalas->estado='A';
              $usuario_pantalas->created_at=$fecha;
              $usuario_pantalas->save();
            } 
        }

        if ( $request->has('caja')) 
        {
            foreach ($request->get('caja') as $peso ) {
             $varpermiso = new usuario_acciones();
             $varpermiso->idacciones=$peso;
             $varpermiso->idusuario=$id;
             $varpermiso->created_at= $fecha;
             $varpermiso->save();
  
        } 
    }
    if($varpermiso->save()){
        return redirect()->route('acciones')->with("success","¡Se guardaron los cambios correctamente!");
     }
     else{
        return redirect()->route('acciones')->with("warning","No se logro");
     }
  }

  public function IndexRegister(){

        $permisos = $this->forpermisos('calcular_nominas'); 
        if($permisos=="registrar_usuarios")
        {
        $varpantallas =  $this->Traermenuenc();
        $varsubmenus =   $this->Traermenudet();
        $varlistaempleados=  $this-> obtenerlistaempleados();
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
        return view('sistemas.registro',compact('varpantallas','varsubmenus','varlistaempleados'));
        }
        else{
            return redirect()->route('panel')->with("Errorpermisos","No se logro");  
        }


    }
    protected function createUser(Request $request){

        $date = Carbon::now();
        $fecha = $date->format('Y-m-d');
        
        

        if($request->hasFile("urlpdf")){
            $file=$request->file("urlpdf");

            $pass = bcrypt($request->get('contrasena'));
            $idempleado = $request->get('idempleado');

            $user = new User();
            $user->name=$request->get('name');
            $user->email=$request->get('email');
            $user->password = $pass;
            $user->idempleado=$idempleado;
            $user->estado_user="A";
            $user->created_at=$fecha;

            $empleados = Empleados::find($idempleado);
            $empleados->foto = 1;
            $empleados->save();
            $user->save();

            $nombre = "$idempleado".".".$file->guessExtension();
            $ruta = public_path("Images/Perfil/".$nombre);

            if($file->guessExtension()=="png"){
                copy($file, $ruta);
                return redirect()->route('registro')->with("success","¡Se guardaron los cambios correctamente!");
            }else{
                return redirect()->route('registro')->with("warning","No se logro");
            }
        }

    
          

    }

  
}
