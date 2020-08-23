<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" />
    </head>
<body>
    <h1>clientes</h1>
    <table class="table table-borderless">
      <thead>
        <tr>
          <th>
          Nombre
          y
          Apellido
          </th>
          <th>
          Direccion
          </th>
          <th>
          Telefono
          </th>
          <th>
          Documento
          </th>
          <th>
          Fecha nacimiento
          </th>
          <th>
          Usuario
          </th>
        </tr>
      </thead>
      <tbody>
      @foreach($clientes as $cliente)
       <tr>
        <th>
        <strong class="text-danger">{{ $cliente->NOMBRE_CLIENTE}}</strong>
        {{ $cliente->APELLIDO_CLIENTE }}
        </th>
        <th>
        {{ $cliente->DIRECCION_CLIENTE }}
        </th>
        <th>
        {{ $cliente->TELEFONO_CLIENTE }}
        </th>
        <th>
        {{ $cliente->DOCUMENTO_CLIENTE }}
        </th>
        <th>
        {{ $cliente->FECHA_NACIMIENTO }}
        </th>
        <th>
        {{ $cliente->ID_USUARIO_FK }}
        </th>
       </tr>
      @endforeach
      </tbody>
    </table>
    {{$clientes->links()}}
</body>
</html>