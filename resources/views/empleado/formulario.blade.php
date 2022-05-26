<div class="form-group">
<label for="Nombre">Nombre(s)</label>
<input type="text" class="form-control" name="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:'Ingresa tu nombre.'}}" id="Nombre">

<label for="ApellidoPaterno">Apellido Paterno</label>
<input type="text" class="form-control" name="ApellidoPaterno" value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:'Ingresa tu apellido.'}}" id="ApellidoPaterno">

<label for="Apellido Materno">Apellido Materno</label>
<input type="text" class="form-control" name="ApellidoMaterno" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:'Ingresa tu apellido.'}}" id="ApellidoMaterno">

<label for="Correo">Correo</label>
<input type="text" class="form-control" name="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:'Ingresa tu correo.'}}" id="Correo"><br>
</div>

<div class="d-inline">
<input type="submit" class="btn btn-success" value="Guardar">
<a href="{{url('/empleado/')}}" class="btn btn-success">Regresar</a>
</div>
