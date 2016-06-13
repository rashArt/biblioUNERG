<!DOCTYPE html>
<html>
<head>
  <title>Texto - {{ $libro->titulo }}</title>
  <link rel="stylesheet" type="text/css" href="css/custom-pdf.css">
</head>
<body>

  <h1>Listado de Textos</h1>

  <table>
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Editorial</th>
        <th>Idioma</th>
        <th>autor</th>
      </tr>
    </thead>
      <tbody>
        <tr>
          <td>{{$libro->titulo}}</td>
          <td>{{$libro->editorial->nombre}}</td>
          <td>{{$libro->idioma}}</td>
          <td>{{$libro->autor->nombre}}</td>
        </tr>
      </tbody>
  </table>
</body>
</html>