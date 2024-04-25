
<style>
    .formulario_dep {
  width: 300px;
  margin: 0 auto;
  border-radius: 12px;
  margin-top:5%;
}

.formulario_dep label {
  display: block;
  margin-bottom: 5px;
}

.formulario_dep input[type="text"],
.formulario_dep input[type="file"] {
  width: calc(100% - 10px);
  padding: 5px;
  margin-bottom: 10px;
}

.formulario_dep input[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.formulario_dep input[type="submit"]:hover {
  background-color: #45a049;
}
</style>


<form action="{{route('departamento.guardar')}}" method="post">

@csrf
<div class="formulario_dep">
<label for="">Nombre Del departamento:</label>
<input type="text" name="nombre_departamento"><br>

<label for="">Imagen</label>
<input type="file" name="imagen"><br>

<label for="">Numero de empleados</label>
<input type="text" name="num_empleados"><br>

<label for="">Nombre del jefe</label>
<input type="text" name="jefe"><br>

<label for="">Telefono</label>
<input type="text" name="telefono"><br>

<input type="submit" value="Guardar">
</form>
</div>






