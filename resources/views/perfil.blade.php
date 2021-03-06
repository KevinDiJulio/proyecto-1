@section('barra_principal')
                             <div class="col-sm">    
                                 <button class="btn btn-outline-success my-2 my-sm-0"  onclick="location.href='/mis_listas'" type="submit">Mis Listas</button>
                            </div>


@endSection()@extends('layouts.app')



@section('librerias')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perfil {{Auth::user()->name}}  </title>

    <!--  CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Librería jQuery requerida por los plugins de JavaScript -->
    <script src="http://code.jquery.com/jquery.js"></script>

    <!-- Librería jQuery personalizada-->
    <script src="js/jquery-example.js"></script>
    
    <!-- Todos los plugins JavaScript de Bootstrap (también puedes incluir archivos JavaScript individuales de los únicos plugins que utilices) -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Referencia a otro archivo css propio, donde se realizan las modificaciones css de los componentes y elementos -->
 <!--   <link href="css/personalizado.css" rel="stylesheet"> -->
    <!-- Referencia a otro archivo css propio, donde se realizan las modificaciones css de la página principal -->
    <!--<link href="css/starter-template.css" rel="stylesheet">-->
  
@endSection()

@section('content')

    <!-- Contenido de la página -->
    <div class="container">
    
        <!-- Contact Form -->
        <!-- Campos del formulario de contacto con validación de campos-->
             <form enctype= "multipart/form-data" action="/perfil" method="POST">
                    <div class="container">
                    <label>Actualizar foto de perfil</label> 
                    <br>
                    <img src="/uploads/avatars/{{$user->avatar}}" style="width:250px; height: 250px;float: left;border-radius: 50%; margin-right: 20px ">
                    
                   
                    
                        
                        
                        <br><br><br><br>
                        <input type="file" name="avatar">
                        <br>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       

                    </div>
                        <div class="container">
                        <label>Nombre</label> 
                            <span id="alertName" data-toggle="popover" data-trigger="hover" data-placement="right" title="Nombre de usuario" name="name" data-content="">
                                <input type="text" 
                                        class="form-control" 
                                        name="name" 
                                        value="{{Auth::user()->name}}" 
                                        required data-validation-required-message="Por favor introduzca su nomnbre.">
                            </span>   

                        <br> 
                          <label>Edad</label> 
                            <span id="alertName" data-toggle="popover" data-trigger="hover" data-placement="right" title="edad" name="edad" data-content="">
                                <input type="text" 
                                        class="form-control" 
                                        name="edad" 
                                        value="{{Auth::user()->edad}}" 
                                        required data-validation-required-message="Por favor introduzca su edad.">
                            </span>                                    
                        <br> 
                        <label>Mail</label> 
                            <span id="alertEmail" readonly="readonly" data-toggle="popover" data-trigger="hover" data-placement="right" title="Email de usuario" name="email" data-content="">
                              <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}"
                              required data-validation-required-message="Por favor introduzca su email." readonly>
                            </span>

                          <br><br>  
                         <input type="submit" class="pull-rigth btn btn-sm btn-primary" >
                     </div>
                    </form>
                
            &nbsp;
        <hr>       

    </div>
    <!-- /.container -->
@endSection()