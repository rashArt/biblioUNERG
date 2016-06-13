<!DOCTYPE html>
<html>
<head>
  <title>Grado - {{ $grado->titulo }}</title>
  <link rel="stylesheet" type="text/css" href="css/custom-pdf.css">
</head>
<body>

  <h1>Listado de Textos</h1>

  <table>
    <thead>
      <tr>
        <th>titulo</th>
        <th>Especialidad</th>
        <th>Autor</th>
        <th>Tutor</th>
      </tr>
    </thead>
      <tbody>
        <tr>
          <td>{{$grado->titulo}}</td>
          <td>{{$grado->especialidad->nombre}}</td>
          <td>{{$grado->autor}}</td>
          <td>{{$grado->tutor}}</td>
        </tr>
      </tbody>
  </table>
</body>
</html>