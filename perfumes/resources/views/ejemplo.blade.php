@extends('vistabootstrap')

@section('contenido')


<center>
	
 	<p><b>Administradores</b></p>
 	
<table border="0">

      
<tr>
	<td><h5>Clave de Administrador:</h5></td>
	<td>['class' => 'form-control]}}</td>
	<td>@if($errors->first('idAdministradores'))
		<i>{{$errors->first('idAdministradores')}}</i>
	@endif </td>
</tr>



	
<tr>
	<td><h5>Nombre: </h5></td>
	<td>['class' => 'form-control']}}</td>
	<td>@if($errors->first('NombreAd'))
		<i>{{$errors->first('NombreAd')}}</i>
	@endif </td>
</tr>
	
<tr>
	<td><h5>Foto:</h5></td>
	<td>@if($errors->first('Archivo'))
			<i> {{$errors->first('Archivo')}} </i> 
    @endif	<br></td>
	
	<br>
</tr>

<tr>

	<td><h5>Apellido paterno: </h5></td>
	<td>['class' => 'form-control','placeholder' => 'Apellido Paterno']}}</td>
	<td>@if($errors->first('ApPatAd'))
		<i>{{$errors->first('ApPatAd')}}</i>
	@endif <br></td>
</tr>

	

<tr>
	<td><h5>Apellido materno: </h5></td>
	<td>{{['class' => 'form-control','placeholder' => 'Apellido Materno ']}}</td>
<td>@if($errors->first('ApMatAd'))
		<i>{{$errors->first('ApMatAd')}}</i>
	@endif </td>
</tr>	
	

<tr>
	<td><h5>Fecha de nacimiento: </h5></td>
	<td>{{['class' => 'form-control','placeholder' => 'fecha de nacimiento']}}</td>
	<td>@if($errors->first('FechaNac'))
		<i>{{$errors->first('FechaNac')}}</i>
	@endif </td>
</tr>


</tr>
	<td colspan="3"><center>{{['class' => 'btn btn-outline-success']}}</td>


</center>
</td>
</table>
</center>


@stop