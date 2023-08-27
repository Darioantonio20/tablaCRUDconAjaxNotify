<!DOCTYPE html>
<html>
<head>
	<title>insertar datos con ajax</title>
    <title>Crud en PHP y Mysql con Nery-Chan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9ae3e2b909.js" crossorigin="anonymous"></script>
	<script src="jquery-3.2.1.min.js"></script>
</head>
<body>
<h1 class="text-center">-----UWU-----</h1>
    <div class="container-fluid row">
        <form class="col-4 text-center" id="frmajax" method="POST">
            <h2 class="p-4 text-secondary">Registro Trata De Blancas</h2>
            <div class="mb-3 p-2">
              <label class="form-label">Nombre De La Persona</label>
              <input type="text" class="form-control" name="nombreP" id="nombreP">
            </div>
            <div class="mb-3 p-2">
                <label class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" name="apellidoP" id="apellidoP">
            </div>
            <div class="mb-3 p-2">
                <label class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" name="apellidoM" id="apellidoM">
            </div>
            <div class="mb-3 p-2">
                <label class="form-label">Fecha De Nacimiento</label>
                <input type="date" class="form-control" name="fechaN" id="fechaN">
            </div>
            <div class="mb-3 p-2">
                <label class="form-label">Nota</label>
                <input type="text" class="form-control" name="deathN" id="deathN">
            </div>
            <button type="submit" class="btn btn-success" name="btnRegistrar" id="btnRegistrar" value="ok">Registrar</button>
        </form>
        <div class="col-8">
            <table class="table">
                <thead>
                    <tr class="table-success text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Nombre De La Persona</th>
                        <th scope="col">Apellido Paterno</th>
                        <th scope="col">Apellido Materno</th>
                        <th scope="col">Fecha De Nacimiento</th>
                        <th scope="col">Nota</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-justify"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td>
                            <a href="modificar_producto.php" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a onclick="return eliminar()" href="index.php" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>                    
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#btnRegistrar').click(function(){
			var datos=$('#frmajax').serialize();
			$.ajax({
				type:"POST",
				url:"insertar.php",
				data:datos,
				success:function(r){
					if(r==1){
						alert("agregado con exito");
					}else{
						alert("Fallo el server");
					}
				}
			});

			return false;
		});
	});
</script>
