<?php
	if (isset($_GET['id'])){
		$id=intval($_GET['id']);
	} else {
		header("location:index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD con PHP usando Programación Orientada a Objetos</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet" /><link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Editar <b>Usuario</b></h2></div>
                    <div class="col-sm-4">
                        <a href="index.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
            </div>
            <?php
				
				include ("database.php");
				$usuarios= new Database();
				
				if(isset($_POST) && !empty($_POST)){
					$nombre = $usuarios->sanitize($_POST['nombre']);
					$usuario = $usuarios->sanitize($_POST['usuario']);
					$email = $usuarios->sanitize($_POST['email']);
					$contraseña = $usuarios->sanitize($_POST['contraseña']);
					$id_usuario=intval($_POST['id_usuario']);
					$res = $usuarios->update($nombre, $usuario, $email, $contraseña, $id_usuario);
					if($res){
						$message= "Datos actualizados con éxito";
						$class="alert alert-success";
						
					}else{
						$message="No se pudieron actualizar los datos";
						$class="alert alert-danger";
					}
					
					?>
				<div class="<?php echo $class?>">
				  <?php echo $message;?>
				</div>	
					<?php
				}
				$datos_usuario=$usuarios->single_record($id);
			?>
			<div class="row">
				<form method="post">
				<div class="col-md-6">
					<label>Nombre</label>
					<input type="text" name="nombre" id="nombre" class='form-control' maxlength="100" required  value="<?php echo $datos_usuario->nombre;?>">
					<input type="hidden" name="id_usuario" id="id_usuario" class='form-control' maxlength="100"   value="<?php echo $datos_usuario->id;?>">
				</div>
				<div class="col-md-6">
					<label>Usuario</label>
					<input type="text" name="usuario" id="usuario" class='form-control' maxlength="100" required value="<?php echo $datos_usuario->usuario;?>">
				</div>
				<div class="col-md-12">
					<label>Email</label>
					<textarea  name="email" id="email" class='form-control' maxlength="255" required><?php echo $datos_usuario->email;?></textarea>
				</div>
				<div class="col-md-6">
					<label>Contraseña</label>
					<input type="text" name="contraseña" id="contraseña" class='form-control' maxlength="15" required value="<?php echo $datos_usuario->contrasena;?>">
				</div>
				
				<div class="col-md-12 pull-right">
				<hr>
					<button type="submit" class="btn btn-success">Actualizar datos</button>
				</div>
				</form>
			</div>
        </div>
    </div>     
</body>
</html>
