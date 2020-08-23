<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" />
    </head>
<body>
    <h1>Usuarios</h1>
    <table class="table table-borderless">
      <thead>
        <tr>
          <th>
          usuario
          </th>
          <th>
          clave
          </th>
        </tr>
      </thead>
      <tbody>
      @foreach($usuarios as $usuario)
       <tr>
        <th>
        {{ $usuario->USUARIO}}
        </th>
        <th>
        {{ $usuario->CLAVE }}
        </th>
       </tr>
      @endforeach
      </tbody>
    </table>
    {{$usuarios->links()}}
</body>
</html>