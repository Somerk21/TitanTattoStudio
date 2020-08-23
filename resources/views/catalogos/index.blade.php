<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" />
    </head>
<body>
    <h1>catalogo</h1>
    <table class="table table-borderless">
      <thead>
        <tr>
          <th>
          ID
          </th>
          <th>
          URL
          </th>
          <th>
          Color
          </th>
          <th>
          Nombre Imagen
          </th>
        </tr>
      </thead>
      <tbody>
      @foreach($catalogos as $catalogo)
       <tr>
        <th>
        {{ $catalogo->ID_CATALOGO}}
        </th>
        <th>
        {{ $catalogo->URL_IMAGEN}}
        </th>
        <th>
        {{ $catalogo->COLOR_IMAGEN}}
        </th>
        <th>
        {{ $catalogo->NOMBRE_IMAGEN}}
        </th>
       </tr>
      @endforeach
      </tbody>
    </table>
    {{$catalogos->links()}}
</body>
</html>