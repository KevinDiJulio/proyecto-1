@extends('layouts.app')


@section('content')
<!-- <form name="modifyProfile" id="profileForm" novalidate> -->
<div class="container">
        <form enctype= "multipart/form-data" action="/mis_listas/crear_lista" method="POST">    
                <!-- Inicio del div central parte de formulario información básica -->
                <div class="col-md-12" style="border-width: 1px 1px 0px 1px; border-style: solid; border-color: lightgrey; background: #f1f3f6;">
                    <div class="col-md-8 col-md-offset-2">
                        
                            <div class="control-group form-group">
                                <div class="controls">
                                    <br >
                                    <label>Información de la lista</label>
                                    <span id="alertName" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                        <input type="text" class="form-control"  name ="nombre" id="txtName" placeholder="Introduzca nombre de la lista" required data-validation-required-message="Por favor introduzca nombre.">
                                    </span>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                       
                                    <input type="hidden" name="usuario" value="{{ Auth::user() }}">

                                    <br>
                                    <label>Lista con visibilidad privada </label>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="visibilidad" id="exampleCheck1">
                                        <label class="form-check-label" name="visibilidad" for="exampleCheck1">Privado</label>
                                      </div>

                                </div>
                            </div>

                           <!--@include('admin.template.partes.cargarArchivo')-->


                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Descripcion del articulo:</label>
                                    <span id="alertDescription" data-toggle="popover" data-trigger="hover" data-placement="auto" title="" data-content="">
                                        <textarea rows="6" cols="30" class="form-control" name="descripcion" id="txtDescription" required maxlength="999" style="resize:none" 
                                        data-validation-required-message="Por favor introduzca su descripcion."></textarea>
                                    </span>
                                	<br>
                                     <!-- Botones formulario -->
                                    <div class="col-md-12 container allFormButtons">                 
                                        <div class="col-md-5 col-md-offset-3">
                                            <div class="form-group">
                                                    <button type="submit" id="btnEnviar" class="btn btn-primary">Crear Lista</button>
                                            </div>
                                        </div>
                                            &nbsp;
                                    </div>
                                    <!-- Fin botones formulario --> 
                                </div>
                            </div>
                    </div>
                </div>
                <!-- Fin del div central parte de formulario información básica -->
                 
                
        </form>
</div>        
                <!-- Fin del form -->
@endSection()