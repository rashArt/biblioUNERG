<!DOCTYPE html>
<html>
<head>
	<title>Listado de Grados</title>
	<link rel="stylesheet" type="text/css" href="css/custom-pdf.css">
</head>
<body>

	<h1>Listado de Grados</h1>

	<table>
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Especialidad</th>
				<th>Autor</th>
				<th>Fecha</th>
			</tr>
		</thead>
		@foreach($tesis as $tesis)
			<tbody>
				<tr>
					<td>{{$tesis->titulo}}</td>
					<td>{{$tesis->especialidad->nombre}}</td>
					<td>{{$tesis->autor}}</td>
					<td>{{$tesis->created_at}}</td>
				</tr>
			</tbody>
		@endforeach
	</table>
</body>
</html>