<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" />
    </head>
<body>
    <h1>citas</h1>
    <table class="table table-borderless">
      <thead>
        <tr>
          <th>
          id
          </th>
          <th>
          Fecha de la cita
          </th>
          <th>
          duracion
          </th>
          <th>
          detalle
          </th>
          <th>
          empleado
          </th>
          <th>
          cliente
          </th>
        </tr>
      </thead>
      <tbody>
      @foreach($citas as $cita)
       <tr>
        <th>
        {{ $cita->ID_CITA}}
        </th>
        <th>
        {{ $cita->FECHA_CITA}}
        </th>
        <th>
        {{ $cita->DURACION_CITA}}
        </th>
        <th>
        {{ $cita->ID_DETALLE_FK}}
        </th>
        <th>
        {{ $cita->ID_EMPLEADO_FK}}
        </th>
        <th>
        {{ $cita->ID_CLIENTE_FK}}
        </th>
       </tr>
      @endforeach
      </tbody>
    </table>
    {{$citas->links()}}
</body>
</html>