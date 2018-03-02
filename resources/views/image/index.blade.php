<!DOCTYPE html>
<html>
<head>
	<title>Imagen</title>
	<style type="text/css">
		input{
			display: block;
			margin-top: 10px;
		}
	</style>
</head>
<body>

	<form id="form" action="uploadImage" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<input type="file" name="image" id="image" accept="image/*">
		<input type="submit" value="Enviar">
	</form>
</body>
</html>