@extends('vista')

@section('contenido')


            <div class="panel panel-warning">
                      <div class="panel-heading"> 
                        <h3 class="panel-title">Formulario de Alta para Administrador</h3>
                      </div>
                      <div class="panel-body">


                        <form role="form" action = "{{route('cambiaradmin')}}" method = "POST" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="col-md-4 form-group">
                            <label for="dni">Clave de Administrador:
                              @if($errors->first('ClaveAdministrador'))
                              <p class='text-danger'> {{$errors->first('ClaveAdministrador')}}</p>
                              @endif
                            </label>
                            <input type="text" name="ClaveAdministrador" id="idAdmin" value="{{$consulta->ClaveAdministrador}}" readonly='readonly' class="form-control" placeholder="Clave administrador" tabindex="5">
                         </div>

                         <div class="col-md-4 form-group">
                          <label  class="texto">Fotografia: 
                              <img src="{{asset('archivos/'. $consulta->Fotografia )}}" height=150 width=150>
                              @if($errors->first('Fotografia'))
                              <p class='text-danger'> {{$errors->first('Fotografia')}}</p>
                              @endif
                            </label>
                                <input type="file" name="Fotografia" id="Fotografia" value="{{old('Fotografia')}}" class="form-control" tabindex="6">
                          </div>

                         <div class="col-md-4  form-group">
                            <label>Nombre de usuario:
                            @if($errors->first('NombreUsuario'))
                              <p class='text-danger'> {{$errors->first('NombreUsuario')}}</p>
                              @endif</label>
                            <input type="text" name="NombreUsuario" id="NombreUs" value="{{$consulta->NombreUsuario}}" class="form-control" placeholder="Ejemplo: JuanRQ1516">
                          </div>

                          <div class="col-md-4  form-group">
                            <label>Nombre(s):
                            @if($errors->first('Nombre'))
                              <p class='text-danger'> {{$errors->first('Nombre')}}</p>
                              @endif</label>
                            <input type="text" name="Nombre" id="Nombre" value="{{$consulta->Nombre}}" class="form-control" placeholder="Ejemplo: Juan">
                          </div>

                          <div class="col-md-4  ">
                            <label>Apellido Paterno:
                            @if($errors->first('ApellidoPaterno'))
                              <p class='text-danger'> {{$errors->first('ApellidoPaterno')}}</p>
                              @endif</label>
                            <input type="text" name="ApellidoPaterno" id="App" value="{{$consulta->ApellidoPaterno}}" class="form-control" placeholder="Ejemplo: Rosales">
                          </div>

                          <div class="col-md-4">
                            <label>Apellido Materno:
                            @if($errors->first('ApellidoMaterno'))
                              <p class='text-danger'> {{$errors->first('ApellidoMaterno')}}</p>
                              @endif</label>
                            <input type="text" name="ApellidoMaterno" id="Apm" value="{{$consulta->ApellidoMaterno}}" class="form-control" placeholder="Ejemplo: Quiroz">
                          </div>

                          <div class="col-md-12">

                          <div class="row">
                            <div class="col-md-3">
                                <label for="dni">Sexo:</label>
                                @if($consulta->Sexo=='M')
                                <div class="custom-control custom-radio">
                                <input type="radio" id="sexo1" name="Sexo"  value = "M" class="custom-control-input" checked="">
                                <label class="custom-control-label" for="sexo1">Masculino</label>
                                </div>
                                <div class="custom-control custom-radio">
                                <input type="radio" id="sexo2" name="Sexo" value = "F" class="custom-control-input">
                                <label class="custom-control-label" for="sexo2">Femenino</label>
                                </div>
                                @else
                                <div class="custom-control custom-radio">
                                <input type="radio" id="sexo1" name="Sexo"  value = "M" class="custom-control-input" >
                                <label class="custom-control-label" for="sexo1">Masculino</label>
                                </div>
                                <div class="custom-control custom-radio">
                                <input type="radio" id="sexo2" name="Sexo" value = "F" class="custom-control-input" checked="" >
                                <label class="custom-control-label" for="sexo2">Femenino</label>
                                </div>
                                @endif
                            </div>

                         
                            
                            <div class="col-md-3 form-group">
                              <label for="tel">Telefono:
                                @if($errors->first('Telefono'))
                              <p class='text-danger'> {{$errors->first('Telefono')}}</p>
                              @endif</label>
                              <input type="text" name="Telefono" id="Telefono" value="{{$consulta->Telefono}}" class="form-control" placeholder="Ejemplo: 7255885555">
                            </div>

                            <div class="col-md-3 form-group">
                              <label>Correo Electronico:
                              @if($errors->first('Correo'))
                              <p class='text-danger'> {{$errors->first('Correo')}}</p>
                              @endif</label>
                              <input  type="email" name="Correo" id="Correo" value="{{$consulta->Correo}}" class="form-control" placeholder="Ejemplo:Juan@gmail.com">
                            </div>

                            <div class="col-md-3 form-group">
                              <label>Contrase??a:
                              @if($errors->first('Contrase??a'))
                              <p class='text-danger'> {{$errors->first('Contrase??a')}}</p>
                              @endif</label>
                              <input  type="password" name="Contrase??a" id="Contrase??a" value="{{$consulta->Contrase??a}}"  class="form-control" placeholder="Contrase??a">
                            </div>

                          <div class=" col-md-6 form-group">
                          
                          <div class="row">
                            <div class="col-md-3"><input type="submit" value="Guardar" class="btn btn-success btn-block btn-lg" tabindex="7"
                                title="Guardar datos ingresados">
                            </div>

                              <div class="col-md-3">
                                <button  class="btn btn-danger btn-block btn-lg">Cancelar</button>
                              </div>
                            
                          </div>

                          </div>

                        </form>
@stop

