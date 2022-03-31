<?php
	class Database{
		private $con;
		private $dbhost="localhost";
		private $dbuser="root";
		private $dbpass="";
		private $dbname="proyecto";
		function __construct(){
			$this->connect_db();
		}
		public function connect_db(){
			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if(mysqli_connect_error()){
				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			}
		}
		public function sanitize($var){
	  		$return = mysqli_real_escape_string($this->con, $var);
	  		return $return;
		}
		public function create($nombre,$usuario,$email,$contraseña){
			$sql = "INSERT INTO `usuarios` (nombre, usuario, email, contrasena) VALUES ('$nombre', '$usuario', '$email',  '$contraseña')";
			$res = mysqli_query($this->con, $sql);
			if($res){
			  	return true;
			}else{
				return false;
 			}
		}
		public function read(){
		$sql = "SELECT * FROM usuarios";
		$res = mysqli_query($this->con, $sql);
		return $res;
		}

		public function single_record($id){
			$sql = "SELECT * FROM usuarios where id='$id'";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_object($res );
			return $return ;
		}
		public function update($nombre,$usuario,$email,$contraseña, $id){
			$sql = "UPDATE usuarios SET nombre='$nombre', usuario='$usuario', email='$email', contrasena='$contraseña'  WHERE id=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}

		public function delete($id){
			$sql = "DELETE FROM usuarios WHERE id=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}



}
?>
