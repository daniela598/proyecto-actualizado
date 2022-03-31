<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD con PHP POO</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet" /><link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Listado de  <b>Usuarios</b></h2></div>
                    <div class="col-sm-4">
                        <a href="create.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar Usuario</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>nombre</th>
                        <th>Usuario</th>
                        <th>email</th>
			<th>contraseña</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                 
                <tbody>    
                       <?php 
include ('database.php');
$usuarios = new Database();
$listado=$usuarios->read();
?>
<?php 
while ($row=mysqli_fetch_object($listado)){
$id=$row->id;
$nombre=$row->nombre;
$usuario=$row->usuario;
$email=$row->email;
$contrasena=$row->contrasena;

?>
<tr>
    <td><?php echo $nombre;?></td>
    <td><?php echo $usuario;?></td>
    <td><?php echo $email;?></td>
    <td><?php echo $contrasena;?></td>
    <td>
    <a href="update.php?id=<?php echo $id;?>" class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
    <a href="delete.php?id=<?php echo $id;?>" class="delete" title="Eliminar" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
    </td>
</tr>   
<?php
}
?>   
                </tbody>
            </table>
        </div>
    </div>     
</body>
</html>


