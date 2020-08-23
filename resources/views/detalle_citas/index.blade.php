<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" />
    </head>
<body>
    <h1>Detalle citas</h1>
    <table class="table table-borderless">
      <thead>
        <tr>
          <th>
          id
          </th>
          <th>
          alergias
          </th>
          <th>
          precio
          </th>
          <th>
          detalle del trabajo
          </th>  
          <th>
          cliente
          </th>
          <th>
          empleado
          </th>
          <th>
          catalogo
          </th>
          <th>
          abono
          </th>
        </tr>
      </thead>
      <tbody>
      @foreach($detalles $detalle)
       <tr>
        <th>
        {{ $detalle->ID_DETALLE}}
        </th>
        <th>
        {{ $detalle->ALERGIAS_DETALLE}}
        </th>
        <th>
        {{ $detalle->PRECIO_DETALLE}}
        </th>
        <th>
        {{ $detalle->DETALLE_TRABAJO}}
        </th>
        <th>
        {{ $detalle->ID_CLIENTE_FK}}
        </th>
        <th>
        {{ $detalle->ID_EMPLEADO_FK}}
        </th>
        <th>
        {{ $detalle->ID_CATALOGO_FK}}
        </th>
        <th>
        {{ $detalle->ABONOS_DETALLE}}
        </th>
       </tr>
      @endforeach
      </tbody>
    </table>
    
</body>
</html>