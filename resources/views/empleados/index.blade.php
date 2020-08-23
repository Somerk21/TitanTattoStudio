<!DOCTYPE html>
<html lang="en">
<head>
    <title>Empleado</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" />
    </head>
<body>
    <h1>Empleado</h1>
    <table class="table table-borderless">
      <thead>
        <tr>
          <th>
          nombre
           y
          apellido
          </th>
          <th>
          direccion
          </th>
          <th>
          telefono
          </th>
          <th>
          documento
          </th>
          <th>
          usuario
          </th>
        </tr>
      </thead>
      <tbody>
      @foreach($empleados as $empleado)
       <tr>
        <th>
        <strong class="text-danger">{{ $empleado->NOMBRE_EMPLEADO}}
        </strong>
        {{ $empleado->APELLIDO_EMPLEADO}}
        </th>
        <th>
        {{ $empleado->DIRECCION_EMPLEADO}}
        </th>
        <th>
        {{ $empleado->TELEFONO_EMPLEADO}}
        </th>
        <th>
        {{ $empleado->DOCUMENTO_EMPLEADO}}
        </th>
        <th>
        {{ $empleado->ID_USUARIO_FK}}
        </th>
       </tr>
      @endforeach
      </tbody>
    </table>
    {{$empleados->links()}}
</body>
</html>