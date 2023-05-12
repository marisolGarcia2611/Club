<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\MenuTrait;

class MenuController extends Controller
{
  use MenuTrait;
    public function index()
    {
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
   
        return view('crud.index',compact('varpantallas','varsubmenus'));
      
    }

    public function getInsertar()
    {
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
   
        return view('crud.insertar',compact('varpantallas','varsubmenus'));
      
    }

    public function getEditar()
    {
      $varpantallas =  $this->Traermenuenc();
      $varsubmenus =   $this->Traermenudet();
   
        return view('crud.editar',compact('varpantallas','varsubmenus'));
      
    }
}
