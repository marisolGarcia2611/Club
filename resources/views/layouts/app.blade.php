<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Club') }} | </title>
    <link rel="icon" type="image/png" href="{{ asset('Images/logo.png') }}">

         <!-- Scripts -->
         <link href="{{ asset('bootstrap-5.2.2-dist/js/bootstrap.min.js') }}" rel="stylesheet">
         <link href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
  
 
         {{-- Styles --}}
         <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
         <link href="{{ asset('bootstrap-5.2.2-dist/css/bootstrap.min.css') }}" rel="stylesheet">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

         <!-- Alerts -->
         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
         

         <!-- Icocnos -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">  

         <!-- animate -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>  
</head>

<style>
  
    :root {
        --bg: rgb(228, 228, 228);
        --navBg:#FFF;
        --menuBag:#f3f3f3;
        --etiquetaSBprincipal:rgb(0, 109, 160);   
        --etiquetaSBdegradado:linear-gradient(270deg, #0bc8cb 0, #1fbae1 25%, #53bcf2 50%, #539dca 75%, #4f81a4 100%);
        --etiquetaSBsecundario:rgba(101, 101, 101, 0.281);
        --scrollColor:#05597d;
        --font: Montserrat, Roboto, Helvetica, Arial, sans-serif;
        --text-etiquetaP:#32394B;
        --text-etiquetaS:#32394B;
        --text-etiquetaPHover:#fff;
        --text-etiquetaSHover:#32394B;
    }
    body{
      background-color: #f6f6f6;
    }

     /* -------------------Dropdown menu------------------ */
    .dropdown {
        position: relative;
        display: inline-block;
      }

      .dropdown-content {
        text-align: end;
        margin-top: -10px;
        display: none;
        position: absolute;
        background-color: #841d1d00;
        min-width: 100px;
        padding: 5px 6px;
        z-index: 1;
      }

      .dropdown:hover .dropdown-content {
        display: block;
      }
    /* -------------------Navbar style y medias------------------ */
    .link_none{text-decoration: none;}
    .nv__style{height:35px;width: 100%;z-index: 999;top: 0vh;position: fixed;margin-top: -3px;box-shadow: 0px 2px 20px 0px rgba(0, 0, 0, 0.132);background-color: var(--menuBag);}
    .e__sidebar {float: none;border-radius: 30px;font-size: 13px;-webkit-transition: all 0.3s ease;color: var(--text-etiquetaP);transition: all 0.3s ease;border-radius: 20px;}
    .e__sidebar:hover {background-color: #2e923f;background-image: linear-gradient(45deg,#2e923f,#0e8269);color: var(--text-etiquetaPHover);-webkit-transform: scale(1.1) !important;transform: scale(1.04) !important;}
    .e__sidebar1 {float: none;border-radius: 30px;-webkit-transition: all 0.3s ease;transition: all 0.3s ease;font-size:13px;border-radius: 20px;color: var(--text-etiquetaP);padding: 20px;padding-bottom: 16px;padding-top: 16px;}
    .e__sidebar1:hover {background-color: #2e923f;background-image: linear-gradient(45deg,#2e923f,#0e8269);color: var(--text-etiquetaPHover);-webkit-transform: scale(1.1) !important;transform: scale(1.04) !important;}
    .e__sidebar2 {float: none;border-radius: 30px;-webkit-transition: all 0.3s ease;transition: all 0.3s ease;font-size: 12px;border-radius: 20px;color: var(--text-etiquetaS);text-decoration: none;display: block;}
    .e__sidebar2:hover {background-color: var(--etiquetaSBsecundario);-webkit-transform: scale(1.1) !important;color: var(--text-etiquetaSHover);transform: scale(1.04) !important;}
    .a__state{border-radius:20px;margin-top:5px;}
    .icon{margin-right:10px;}
    .b__lateral{border-top-right-radius:50px;box-shadow: 0px 2px 20px 0px rgba(0, 0, 0, 0.132);}
    /* -------------------Letras y tamaños------------------ */

    .font_little{font-size: 11px;}
    .cont_1{margin-top: 100px;}
    .p__little{font-size: 11px;}
    .middle__font{font-size: 14px;}

    /* -------------------Animaciones------------------ */

    .push{-webkit-transition: all 0.3s ease;transition: all 0.3s ease;}
    .push:hover {-webkit-transform: scale(1.1) !important;transform: scale(1.04) !important;}
    .push2{-webkit-transition: all 0.3s ease;transition: all 0.3s ease;}   
    .push2:hover {-webkit-transform: scale(1.1) !important;transform: scale(1.06) !important;}
    .push0{-webkit-transition: all 0.3s ease;transition: all 0.3s ease;}
    .push0:hover {-webkit-transform: scale(1.1) !important;transform: scale(1.01) !important;}

    .zoom{-webkit-transition: all 0.3s ease;transition: all 0.3s ease;}
    .zoom:hover {-webkit-transform: scale(1.1) !important;transform: scale(3.05) !important;border-radius: 3px; box-shadow: 0px 2px 20px 0px rgba(0, 0, 0, 0.132);position: absolute;z-index: 999;}
    /* -------------------Formularios con estylo rouded------------------ */

    .offcanvas-body input{border-radius: 40px;background-color: #eaeaea;border:.5px solid #fff;font-size: 11px;color: #686868;}
    .offcanvas-body textarea{border-radius: 10px;background-color: #eaeaea;border:.5px solid #fff;font-size: 11px;color: #686868;text-transform:uppercase;}
    .offcanvas-body select{border-radius: 40px;background-color: #eaeaea;border:.5px solid #fff;font-size: 11px;color: #686868;}
    .offcanvas-body label{color: #575656;margin-top: 5px;font-size: 12px;}

    .form input{border-radius: 40px;background-color: #fefefe;border:.5px solid #d6d6d6;font-size: 11px;color: #686868;}
    .form textarea{border-radius: 10px;background-color: #f0f0f0;border:.5px solid #d6d6d6;font-size: 11px;color: #686868;text-transform:uppercase;}
    .form select{border-radius: 40px;background-color: #f2f2f2;border:.5px solid #d6d6d6;font-size: 11px;color: #686868;}
    .form label{color: #575656;margin-top: 5px;font-size: 12px;}
    /* -------------------Botnes de Herramientas------------------ */

    .card-flat{color:rgb(32, 48, 85);background-color:#fff;border-radius:30px;padding:40px;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);margin:20px;width:50vh;}
    .footer__size{height:400px;padding-top: 50px;}
    .bt__flat{background-color: #fff;border-radius:40px;color:rgb(95, 94, 94);box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.24);}
    .bt__flat:hover{background-color: #fff;border-radius:40px;color:rgb(95, 94, 94);box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);}
    /* ------------------TABLE--------------------------- */

    #tblempleados tfoot input{width: 100% !important;border-radius: 30px;background-color: #f4f3f3a0;}
    #tblempleados tfoot {display: table-header-group !important;font-size: 10px!important;}
    #mydatatable-container input{border-radius: 30px;background-color: #e5e5e5a0;border: 0px solid rgb(111, 110, 110);margin-bottom: 20px!important;border:0!important;outline: none;}
    #mydatatable-container label{color: #8d8a8a;}
    #mydatatable-container select{border-radius: 100px;background-color: #e5e5e5a0;border: 0px solid rgb(111, 110, 110);border:0!important;outline: none;}
    #mydatatable-container{border-radius:40px; text-align: center;}
    .fs-9{font-size: 10px;}
    .fs-8{font-size: 12px;}
    .fs-7{font-size: 18px;}
    .fs-6_5{font-size: 14px;}
    .fs-6{font-size: 15px;}
    .shadow-text{text-shadow: 0px -3px 9px rgb(0, 0, 0);}
    .link-light{text-decoration:none;color:#ffff;}

    .btn-purple{padding-left:15px!important;padding-right: 15px!important;background-color:rgb(88, 57, 155)!important;border-top-right-radius: 10px!important;border-bottom-right-radius: 10px!important;padding: 5px!important;border: none!important;color: #fff!important;}
    .btn-purple:hover{padding-left:15px!important;padding-right: 15px!important;background-color:rgb(65, 39, 120)!important;border-top-right-radius: 10px!important;border-bottom-right-radius: 10px!important;padding: 5px!important;border: none!important;color: #fff!important;}
    .btn-outline-purple{padding-left:15px!important;padding-right: 15px!important;border-top-left-radius: 10px!important;border-bottom-left-radius: 10px!important;padding: 5px!important;border: 1px solid rgb(88, 57, 155)!important;color:rgb(88, 57, 155)!important;}
    .btn-outline-purple:hover{padding-left:15px!important;padding-right: 15px!important;background-color:rgb(131, 102, 193)!important;border-top-left-radius: 10px!important;border-bottom-left-radius: 10px!important;padding: 5px!important;border: 1px solid rgb(88, 57, 155)!important;color: #fff!important;}
    .fs_special2{font-size: 15px;}

    .btn-purple1{padding-left:20px!important;padding-right: 20px!important;background-color:rgb(84, 117, 213)!important;border-radius: 20px!important;border: none!important;color: #fff!important;font-weight: lighter;font-size: 17px;}
    .btn-purple1:hover{padding-left:20px!important;padding-right: 20px!important;background-color:rgb(72, 98, 176)!important;border-radius: 20px!important;border: none!important;color: #fff!important;font-weight: lighter;font-size: 17px;}
    
    .btn-babyBlue{padding-left:20px!important;padding-right: 20px!important;background-color:rgb(84, 117, 213)!important;border-radius: 20px!important;border: none!important;color: #fff!important;font-weight: lighter;}
    .btn-babyBlue:hover{padding-left:20px!important;padding-right: 20px!important;background-color:rgb(72, 98, 176)!important;border-radius: 20px!important;border: none!important;color: #fff!important;font-weight: lighter;}
    
    .btn-mar{background-color: #41a89c;border:none;color: #fff;}
    .btn-mar:hover{background-color: #41a89c;border:none;color: #fff;}

    .btn-p{background: #2e923f;color: #fff;}
    .btn-p:hover{background: #0e8269;color: #fff;}

      /* -------------------------------------------------Scroll ----------------------------------------------*/

    #tblempleados.cont{overflow-y: scroll;box-sizing: border-box;}
    #tblempleados .cont::-webkit-scrollbar { -webkit-appearance: none;}
    #tblempleados.cont::-webkit-scrollbar:vertical {width:8px;height: 5px;}
    #tblempleados.cont::-webkit-scrollbar-button:increment,#tblempleados.cont::-webkit-scrollbar-button {display: none;} 
    #tblempleados.cont::-webkit-scrollbar:horizontal {height: 10px;}
    #tblempleados .cont::-webkit-scrollbar-thumb {background-color: var(--bg);border-radius: 20px;border: 1px solid var(--bg);} 
    #tblempleados.cont::-webkit-scrollbar-track {border-radius: 10px;  }

      /* -------------------------------------------------Scroll All----------------------------------------------*/
    .contenedor{height:100vh;scroll-behavior: auto;overflow-y: auto;overflow-x: hidden;}
    .contenedor::-webkit-scrollbar { width: 8px;     /* Tamaño del scroll en vertical */  height: 8px;    /* Tamaño del scroll en horizontal */ }
      /* Ponemos un color de fondo y redondeamos las esquinas del thumb */
      .contenedor::-webkit-scrollbar-thumb {   background: #a5a5a5;   border-radius: 4px;}
      /* Cambiamos el fondo y agregamos una sombra cuando esté en hover */
      .contenedor::-webkit-scrollbar-thumb:hover {
          background: #9e9e9e;  box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2); }
      /* Cambiamos el fondo cuando esté en active */
      .contenedor::-webkit-scrollbar-thumb:active {background-color: #999999;}
      /* Ponemos un color de fondo y redondeamos las esquinas del track */
      .contenedor::-webkit-scrollbar-track {background: #e1e1e1;border-radius: 4px; }
      /* Cambiamos el fondo cuando esté en active o hover */
      .contenedor::-webkit-scrollbar-track:hover, .contenedor::-webkit-scrollbar-track:active { background: #d4d4d4;}

    /* -------------------Graficas------------------ */
    #grafica{ margin-top:8vh; }
    .default{margin : 0;padding : 0;}
    .b-1{position : absolute;width : 100%;height : 100%;background-color: #ffff;margin: 0 auto;}
    .position-g{width : 60%;height : 80%;transform: translateX(30%) !important;}
    .ico__image{width: 50px;height: 50px;}

    /* -------------------Editar empleado------------------ */
    .cartaForm{border-radius: 30px;box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);}
    .step{ border-radius: 50px;width:30px;height:30px;color:#ffff;}
    .stepNav{border-radius: 50px;width:60px;height:30px;padding-top:4px;}
    .nav-float{border-top-left-radius:30px;border-bottom-left-radius:30px;z-index: 2;margin-top:0px;top: 10vh;position: fixed;right: 0;margin-right: -25px;}

    /* -------------------Cabecera de editar------------------ */
    .swal-overlay {background-color: rgba(70, 71, 95, 0.45);}
    .bor{border: none;-webkit-transition: all 0.3s ease; transition: all 0.3s ease;}
    .bor:hover {-webkit-transform: scale(1.1) !important;transform: scale(1.09) !important;}
    .nav-it{background-color: #fff;}
    .nav-it:hover{background-image: linear-gradient(45deg,#2E3192,#0095D9);border-radius:20px!important;color: #fff!important;}
    .cartaForm{border-radius: 30px;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);}
    .bg-p{color: #32394B;}
    .mar-l{margin-left: 40px;}
    .mar-2{margin-left: 10px;}
    /* -------------------Tabla Principal------------------ */

    .pad-table{padding:30px!important;padding-bottom:10px!important;}
    .border-table{border:0px solid rgba(255, 255, 255, 0)!important;}
    .pImage{border-radius: 50px;width:80px;height:80px;object-fit: cover;}
    .tr-table{background-color: #2e923f;background-image: linear-gradient(225deg, #02a2a4 0%, #2B86C5 30%, #2e923f 100%)!important;color:#fff!important;}
    .td-tools{background-color:#2B86C5!important ;color:#fff!important;border: 0px solid rgba(255, 255, 255, 0)!important;}
    .td-t1{background-color:#2b94df!important ;color:#fff!important;border-bottom:.8px solid #82adcc!important;}
    .bg-0{background-color: #dfe3f0!important;border-bottom:.8px solid rgb(255, 255, 255)!important;}
    .bg-table{background-color:  #32394B;border-radius:18px;color:#fff; width:95%;}
    .bg-1{background-color: #dfe3f0!important;border:0px solid rgba(255, 255, 255, 0)!important;}
    .bg-2{background-color: #9ba9e2!important;border:0px solid rgba(255, 255, 255, 0)!important;}
    .bg-3{background-color: #a0b2ec!important;border:0px solid rgba(255, 255, 255, 0)!important;}
    .bg-4{background-color: #419443!important;border:0px solid rgba(255, 255, 255, 0);margin-left: 5px;}
    .bg-5{background-color: #d63757!important;border:0px solid rgba(255, 255, 255, 0);margin-left: 8px;}
    .bg-6{background-color: #f3f3f3;border:0px solid rgba(255, 255, 255, 0);}
    .circle{border-radius: 100px;width:25px;height:25px;}
    .text-b{color:#0082de; }
    .text-b:hover{color:#0063aa; }
    .text-s{color:#9b9b9b; }
    .text-s:hover{color:#5a5a5b; }
    @media screen and (max-width:900px) { .mar-l{ margin-left: 0px;}}

    
    /* -------------------------Botones----------------------------------------- */
    .btn-blue{background-color: #0c9b7a;color:#fff;}
    .btn-blue:hover{background-color: #008465;color:#fff;}
    .btn-gradient{background-image: linear-gradient(45deg,#2E3192,#0095D9);color:#fff;}
    .btn-gradient:hover{background-image: linear-gradient(45deg,#2E3192,#0095D9);color:#fff;}
    .btn-gradient-pink{background-color: #FF3CAC;background-image: linear-gradient(225deg, #784BA0 30%, #2B86C5 100%)!important;color:#fff!important;border: 0;}
    .btn-gradient-pink:hover{background-color: #FF3CAC;background-image: linear-gradient(225deg, #2B86C5 30%, #784BA0 100%)!important;color:#fff!important;border: 0;}
    
    .btn-collage-purple{background-color:rgb(105, 69, 183)!important;color:#fff!important;border: 0;}
    .btn-collage-purple:hover{background-color:rgb(76, 48, 135)!important;color:#fff!important;border: 0;}
    .bg-lavanda{background-color:rgb(126, 151, 225);}


    /* -------------------------Panel Area----------------------------------------- */
    .bg-gradient-pink{background-color: #2e923f;background-image: linear-gradient(225deg, #02a2a4 0%, #2B86C5 30%, #2e923f 100%)!important;color:#fff!important;}
    .btn-send{border:1px solid #2B86C5;border-radius:45px;width:100%;padding:18px;padding-bottom:15px;color: #2B86C5;}
    .btn-send:hover{background-color: #2b86c5;border:1px solid #2B86C5;border-radius:45px;width:100%;padding:18px;padding-bottom:15px;color: #fff!important;}
    .b-blue{background-color: #2B86C5;}
    .text-lightGray{color:#b2b0b0;}
    .ocultar {display: none; }
    .mostrar { display: block;}
    .bImage{z-index: 2;background-color:#00000037;color:#676464;border-radius:50px;width:80px;height:80px;border: none;}

   
    
    /* -------------------------Index Vales Area----------------------------------------- */
    .translateY{transform: translateY(40%);}
    .responsiveCollage{height:600px;object-fit: cover;}
    .btnCollage{width: 100%;border-top-left-radius: 30px;border-top-right-radius: 30px;padding:15px;}
    .pCollage{padding-left:50px;padding-right:50px;}
    .bgCollage{background-color: #55728400;}

    /* -------------------------Fase 2 usuario Area----------------------------------------- */
    .bg-lightsecond{background-color: #f2f2f2}
    .cs1{border-radius: 100px;padding:8px;width:8px;height:8px;background-color:#A215C6;}
    .cs2{border-radius: 100px;padding:8px;width:8px;height:8px;background-color:#4FCBDC;}
    .cs3{border-radius: 100px;padding:8px;width:8px;height:8px;background-color:#FFC632;}
    .cs4{border-radius: 100px;padding:8px;width:8px;height:8px;background-color:#FD7878;}
    .cs5{border-radius: 100px;padding:8px;width:8px;height:8px;background-color:#81CA84;}
    .cs6{border-radius: 100px;padding:8px;width:8px;height:8px;background-color:#FFFCFF;border:.4px solid #B8B5B5;}

    .cst1{background-color:#A215C6!important;}
    .cst2{background-color:#4FCBDC!important;}
    .cst3{background-color:#FFC632!important;}
    .cst4{background-color:#FD7878!important;}
    .cst5{background-color:#81CA84!important;}
    .cst6{font-size: 12px;padding:4px;background-color:#FFFCFF!important;color:#979494;}

    .c_progress{border-radius: 100px;padding:8px;width:8px;height:8px;}

    .bh1{border:1.5px solid #ffc525;border-radius:100px;width:75px;height:75px;padding:15px;color:#ffc525;margin:4px;}
    .bh2{border:1.5px solid #679BFF;border-radius:100px;width:75px;height:75px;padding:15px;color:#679BFF;margin:4px;}
    .bh3{border:1.5px solid #d90077;border-radius:100px;width:75px;height:75px;padding:15px;color:#d90077;margin:4px;}
    .bh4{border:1.5px solid #9867FF;border-radius:100px;width:75px;height:75px;padding:15px;color:#9867FF;margin:4px;}

    .lh1{background-color: #ffc525;width:1px;}
    .lh2{background-color: #679BFF;width:1px;}
    .lh3{background-color: #d90077;width:1px;}
    .lh4{background-color: #9867FF;width:1px;}

    .mt10{margin-top: -10px;}
    .position-alert{position:fixed;z-index:1000;right: 20px;bottom:-20px;min-width:800px;margin-top:-40px;height: 270px;}
    .position-cross{margin-top:-10px;margin-right:-10px;}
    .pChat{object-fit: cover;width: 35px;height:35px;border-radius:100px;}
    .scrollAlert{height:210px;scroll-behavior: auto;overflow-y: auto;}
    .scrollAlert::-webkit-scrollbar {width: 8px;     /* Tamaño del scroll en vertical */height: 8px;}
    .scrollAlert::-webkit-scrollbar-thumb {   background: #a5a5a5;   border-radius: 4px;}
    /* Cambiamos el fondo y agregamos una sombra cuando esté en hover */
    .scrollAlert::-webkit-scrollbar-thumb:hover {
        background: #9e9e9e;  box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2); }
    /* Cambiamos el fondo cuando esté en active */
    .scrollAlert::-webkit-scrollbar-thumb:active {background-color: #999999;}
    /* Ponemos un color de fondo y redondeamos las esquinas del track */
    .scrollAlert::-webkit-scrollbar-track {background: #e1e1e1;border-radius: 4px; }
    /* Cambiamos el fondo cuando esté en active o hover */
    .scrollAlert::-webkit-scrollbar-track:hover, .scrollAlert::-webkit-scrollbar-track:active { background: #d4d4d4;}
    

    @media screen and (max-width:600px) { 
      .position-alert{position:fixed;z-index:1000;right:0px;min-width:100%;margin-top:0px;bottom: -50px;}
    }

   

    /* -------------------------Load File Area----------------------------------------- */
    .drop-container {position: relative;display: flex;gap: 10px;flex-direction: column;justify-content: center;align-items: center;height: 200px;padding: 20px;border-radius: 10px;border: 2px dashed #555;color: #444;cursor: pointer;transition: background .2s ease-in-out, border .2s ease-in-out;}
    .drop-container:hover { background: #eee; border: 2px dashed #6d4ab6; /* border-color: #9f0d0d; */ }
    .drop-container:hover .drop-title {color: #222;}
    .drop-title { color: #444; font-size: 20px; font-weight: bold; text-align: center; transition: color .2s ease-in-out; }
    .drop-container input[type=file] { width: 350px; max-width: 100%; color: #444; padding: 15px; background: #ffffff; border: none; }
    .drop-container input[type=file]:hover{ width: 350px; max-width: 100%; color: #444; padding: 15px; background: #eee; border: none; }
    .drop-container input[type=file]::file-selector-button {margin-right: 20px;border: none;background: #6d4ab6;padding: 10px 20px;border-radius: 20px;color: #fff;cursor: pointer;transition: background .2s ease-in-out;}
    .drop-container input[type=file]::file-selector-button:hover {background: rgb(88, 57, 155);}
    /* <label for="file1" class="drop-container">
      <span class="drop-title">Suelte archivos aquí</span>
      ó
      <input type="file" id="file1" required>
    </label> */

    /* -------------------------Load File Area2----------------------------------------- */
    .drop-container2 {position: relative;display: flex;gap: 10px;flex-direction: column;justify-content: center;align-items: center;height: 200px;padding: 20px;border-radius: 10px;border: 2px dashed #555;color: #444;cursor: pointer;transition: background .2s ease-in-out, border .2s ease-in-out;}
    .drop-container2:hover { background: #eee; border: 2px dashed #4c85ff; /* border-color: #9f0d0d; */ }
    .drop-container2:hover .drop-title {color: #222;}
    .drop-title2 { color: #444; font-size: 20px; font-weight: bold; text-align: center; transition: color .2s ease-in-out; }
    .drop-container2 input[type=file] { width: 350px; max-width: 100%; color: #444; padding: 15px; background: #ffffff; border: none; }
    .drop-container2 input[type=file]:hover{ width: 350px; max-width: 100%; color: #444; padding: 15px; background: #eee; border: none; }
    .drop-container2 input[type=file]::file-selector-button {margin-right: 20px;border: none;background: #00723d;padding: 10px 20px;border-radius: 20px;color: #fff;cursor: pointer;transition: background .2s ease-in-out;}
    .drop-container2 input[type=file]::file-selector-button:hover {background: #015d32;}
    /* <label for="file1" class="drop-container">
      <span class="drop-title">Suelte archivos aquí</span>
      ó
      <input type="file" id="file1" required>
    </label> */


    /* ------------------------- control permisos Area----------------------------------------- */
    .accordion_bg{
      background-color: #f3f3f300!important;color: #656464!important;text-decoration:none!important;border: none!important;font-size: 13px;}

    
    .labelInv{border: 0px;background-color: rgba(240, 248, 255, 0);}
    .inputInv{border: 0px!important;background-color: rgba(240, 248, 255, 0)!important;font-weight: bold!important;}


    /* -------------------------btn back Area----------------------------------------- */

    .pos__btnBack{
    z-index: 1;margin-top:0px;top: 1.8vh;position: absolute;left: 0;margin-left: 8px;
    }

    .wrapper {
        padding: 1.5rem 0;
        filter: url('#goo');
    }
    
    .btnBack {
        display: inline-block;
        font-size: 20px!important;
        text-align: center;
        background-color: #f6f6f6!important;
        color:#8b8b8b!important;
        border: 0px!important;
        font-weight: bold;
        line-height: 1;
        padding: 13px;
        border-radius: 1px;
        position: relative;
        width: 48px;
        height: 45px;
        text-decoration: none;
        -webkit-transition: all 0.3s ease;transition: all 0.3s ease;
    }

    .btnBack:hover {
      display: inline-block;
      text-align: center;
      background-color: #f6f6f6!important;
      color:#8b8b8b!important;
      font-weight: bold;
      line-height: 1;
      border: 0px!important;
      padding: 13px;
      border-radius: 1px;
      position: relative;
      width: 48px;
      height: 45px;
      text-decoration: none;
      -webkit-transform: scale(1.1) !important;transform: scale(1.4) !important;
      cursor: pointer;
    }

    .btnBack:before {
        top: -25%;
        left: 20%;
    }
    
    .btnBack:after {
        bottom: -25%;
        right: 20%;
    }
    
    .btnBack:hover:before,
    .btnBack:hover:after {
        transform: none;
    }
     /*----------------------------------------------------------------- button2--------------------------------------------------- */

  .pos__btnBack1{
    z-index: 1;margin-top:0px;top: 1.8vh;position: fixed;left: 0;margin-left: 8px;
  }

  .btnBack1 {
    display: inline-block;
    text-align: center;
    background-color: #ffffff!important;
    color:#8b8b8b!important;
    font-weight: bold;
    line-height: 1;
    padding: 13px;
    border-radius: 1px;
    position: relative;
    width: 48px;
    height: 45px;
    text-decoration: none;
    -webkit-transition: all 0.3s ease;transition: all 0.3s ease;
    }
    .btnBack1:hover {
      display: inline-block;
      text-align: center;
      background-color: #ffffff!important;
      color:#8b8b8b!important;
      font-weight: bold;
      line-height: 1;
      padding: 13px;
      border-radius: 1px;
      position: relative;
      width: 48px;
      height: 45px;
      text-decoration: none;
      -webkit-transform: scale(1.1) !important;transform: scale(1.4) !important;
      cursor: pointer;
    }



    .btnBack1:before {
        top: -25%;
        left: 20%;
    }

    .btnBack1:after {
        bottom: -25%;
        right: 20%;
    }

    .btnBack1:hover:before,
    .btnBack1:hover:after {
        transform: none;
    }
  

   
</style>


<body class="contenedor">
    <div id="app">

    {{-- MENU DINAMICO INICIO --}}
    <main>
        <nav class="navbar  nv__style" >
            <ul class="nav">
              <li class="nav-item">
                <div class="container-fluid" style="margin-top:-5px;">
                    <a class="navbar-brand">  
                        <button type="button" class="hamburger animated fadeInLeft is-closed" style=" background-color:#f3f3f3" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                            <span class="hamb-top"></span>
                            <span class="hamb-middle"></span>
                            <span class="hamb-bottom"></span>
                          </button>
                    </a>
                </div>
              </li>
              <li class="nav-item" style="margin-top:-10px;">
                <a class="nav-link text-success" href="#">{{ Auth::user()->name }}</a>
              </li>
              
            </ul>
            
        </nav>

        <div class="col-auto px-0 ">
            <div class=" offcanvas  offcanvas-start b__lateral " data-bs-scroll="true" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
                </div>
                <div class="offcanvas-body contenedor-light">
                    <div class="list-group border-0 rounded-0 text-sm-start min-vh-100">
                        <nav class="nav flex-column">
                          <div class="text-center">
                            <img  src="Images/Perfil/{{ Auth::user()->idempleado}}.png" style="width: 150px;height:150px;object-fit:cover;margin-bottom:40px;" class="rounded mx-auto d-block" alt="...">
                            <p class="fw-light">{{ Auth::user()->name }}</p>
                          </div>
                          
                            @php($varRecursostmp='')
                            @php($VAR='')
                            <a class="nav-link e__sidebar1 d-inline-block text-truncate" data-bs-parent="#sidebar" href="/home"> <i class="fas fa-home icon"></i>Principal</a>
                            @php($varcontador=1)
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    @foreach($varpantallas as $vis)
                                  <h2 class="accordion-header" id="{{$varcontador}}">
                                    @if(strpos($vis->nombre, ' '))
                                  @php( $varRecursostmp = $vis->nombre)
                                  @php($VAR = str_replace(' ','',$varRecursostmp))
                                  @else
                                  @php( $VAR = $vis->nombre)
                                  @endif
                                    <button style="border-radius:20px;margin-top:5px;" class=" accordion-button collapsed e__sidebar" type="button"  data-bs-toggle="collapse" data-bs-target="#{{$VAR}}" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <i class="fas fa-folder-open icon"></i>{{$vis->nombre}}
                                    </button>
                                  </h2>
                                  <div id="{{$VAR}}" class="accordion-collapse collapse" aria-labelledby="{{$varcontador}}" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                  
                                        @foreach($varsubmenus as $submenus)
                                       
                                        @if($vis->nombre == $submenus->nombre)
                                        <a class="nav-link e__sidebar2 d-inline-block text-truncate" data-bs-parent="#sidebar" href="/{{$submenus->descripcion}}">{{$submenus->nom}}</a><br/>
                                        @else
                                        @endif
                                        @php($varcontador++)
                                        @endforeach
                                    </div>
                                  </div>
                                  @endforeach
                                </div>
                            </div>
                          @guest
                            @else
                                <a class="nav-link e__sidebar1 d-inline-block text-truncat" data-bs-parent="#sidebar" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();"><i class="fa fa-solid fa-arrow-right icon"></i>
                                    Salir
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                          @endguest
                      
                        </nav>
                    </div>
                </div>
                  <div class="offcanvas-footer text-center  d-none d-md-block">
                    <img src="{{ asset('images/animate.png') }}" width="50px" class="mb-5 rounded mx-auto" alt="...">
                  </div>
            </div>
        </div>
        
        <div class="mt-5">
          @yield('content')
        </div>
       
    </main>
    </div>

</body>

<script type="text/javascript">
  function mostrarPassword(){
          var cambio = document.getElementById("txtPassword");
          if(cambio.type == "password"){
              cambio.type = "text";
              $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
          }else{
              cambio.type = "password";
              $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
          }
      } 
      
      $(document).ready(function () {
      //CheckBox mostrar contraseña
      $('#ShowPassword').click(function () {
          $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
      });
  });
</script>
</html>
