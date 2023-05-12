@extends('layouts.app')
@section('content')
{{-- ALERTAS --}}
@if ($mensaje = Session::get('success'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡Acción exitosa!","Movimiento completado de forma correcta","success", {buttons: false,timer: 1500});';
          echo '</script>';  
  @endphp

@elseif($mensaje = Session::get('warning'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡No se a efectuado la acción!","Intente despues o pruebe con otra cosa","warning", {buttons: false,timer: 3000});';
          echo '</script>';  
  @endphp

@elseif($mensaje = Session::get('PDFwarning'))
  @php
          echo '<script language="JavaScript">';
          echo 'swal("¡No se a efectuado la acción!","Recuerde llenar todos los campos y que formato permitido de archivos es .pdf","warning", {buttons: false,timer: 5000});';
          echo '</script>';  
  @endphp

@endif
{{-- ALERTAS --}}


<!--Inicio button notificaciones Area-->
<div class="pos__btnBack" >
    <div class="wrapper"> 
      <form action="/gestionCreditos">
        <button class="btn btnBack btn-light" type="submit" ><i class="fas fa-solid fa-arrow-left"></i></button>
      </form>
    </div>
</div>

<!--Icon Area-->
<div class="pos__ico">
    <img class="ico__image" src="{{ asset('images/animate.png') }}" alt="icono">
</div>

<!-----Principal Area----->
<div class="p__little">
    {{--------------------------- Encabezado de la pagina----------------------}}
      <div class="container">
        <div class="row mb-4 bg-p">
            <div class="col-md-3 center">
              <h2 class="mb-3 fw-light animate_animated animate_backInLeft">CRUD de ejemplo</h2> 
              <cite class="" title="Título fuente">Muestra de como sería una pantalla completa </cite>
            </div>
            <div class="col-md-6">
              <div class="row mt-3 text-center">
                    <div class="col-md-3">
                      <form action="/Crud/Insertar">
                         <button type="submit" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat fs-8"><i class="fa-solid fa-plus"></i>&nbsp; Insertar</button>
                      </form>
                    </div>
                    <div class="col-md-3">
                        <button  type="button" class="mb-3 animate__animated animate__backInLeft btn push2 bt__flat fs-8"><i class="fa-solid fa-download"></i>&nbsp; Exportar </button> 
                    </div>
              </div>
            </div>
        </div>
    </div> 
    
      {{--------------------------- Cuerpo de la tabla----------------------}}
    <center>
      <div class="bg-body border-0">
        <div class="table-responsive pad-table" id="mydatatable-container"> 
            
            <div class="row"> 
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col-md-4 cs5"></div> 
                                <p class="col-md-8 fw-light fs-9">Activo</p>
                            </div>
                        </div>


                        <div class="col-md-2">
                            <div class="row">
                                <div class="col-md-4 cs4"></div> 
                                <p class="col-md-6 fw-light fs-9">Inactivo</p>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="col-md-8"></div>
            </div>
          
            <table class="table table-hover" id="tblempleados">
                <thead class="table">
                    <tr class="tr-table"> 
                        <th  class="text-center fw-light">Documentos</th>
                        <th  class="text-center fw-light">Eliminar</th>
                        <th  class="text-center fw-light">Editar</th>
                        <th class="text-center fw-light">Estado</th>
                        <th class="text-center fw-light">Primer Nombre</th>
                        <th class="text-center fw-light">Segundo Nombre</th>
                        <th class="text-center fw-light">Primer Apellido</th>
                        <th class="text-center fw-light">Segundo Apellido</th>
                    </tr>
                </thead>
                
                <tbody>
                
                    <tr>
                        <!-----Herramientas de la tabla---->
                        <td class="bg-0">
                            <form action="">
                              <button class="text-s btn fa-solid fa-upload bor"  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"title="Subir Archivo"></button>
                            </form>
                        </td>

                        <td class="bg-0">
                          <form action="/Crud/Editar">
                             <button  class="fas fa-edit bor text-s btn border-0" type="submit" data-bs-toggle="tooltip" data-bs-placement="right" title="Editar" ></button>
                          </form>
                      </td>

                      <td class="bg-0">
                        <form action="/Crud/Eliminar">
                           <button  class="fas fa-trash bor text-s btn border-0" type="submit" data-bs-toggle="tooltip" data-bs-placement="right" title="Eliminar" ></button>
                        </form>
                      </td>

                      <td class="bg-0 text-center">
                          <center>
                              <div class="col-md-4 cs5"></div>
                          </center>
                      </td>

        
                      <td class="table-light text-secondary"></td>
                      <td class="table-light text-secondary"></td>
                      <td class="table-light text-secondary"></td>
                      <td class="table-light text-secondary"></td> 
                    </tr>
        
                </tbody>
            </table>

        </div>  
      </div>
    </center> 
</div>

<!-----Modal subir archivo comprobante de entrega----->
<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel" style="height:55vh;">
  <div class="offcanvas-body contenedor-light">
      <center class="">
          <button type="button" class="btn btn-outline-secondary rounded-5 fs-8" data-bs-dismiss="offcanvas" style="width: 40px;height:40px;" aria-label="Close"><i class="fa-solid fa-chevron-down"></i></button>
      </center>
      <center class="row">
          <div class="col-md-12">
              <h4 class="mt-3 mb-3 fw-light animate_animated animate_backInLeft">Subir compobante de entrga</h4> 
          </div>
      </center>

          <!-----Formulario entrega----->
          <div class="row p-3">
              <div class="row mb-3">
                  <label for="file1" class="drop-container">
                      <span class="drop-title">Suelte archivos aquí</span>
                      ó
                      <input type="file" id="file1" required>
                  </label>
              </div>

              <div class="text-center">
                  <button type="submit" class="btn btn-p col-md-2 col fw-light rounded-5 fs-8"><i class="fas fa-upload"></i>&nbsp;&nbsp; Subir</button></br></br>
             </div>
          </div>
  </div>   
</div>


<script src="{{ asset('js/simpleTabla.js') }}"></script>




@endsection