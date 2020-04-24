<?php
	Class Usuarios
	{
		public function BuscarUsuario($user, $pass, $tipo)
		{
			$usuario = new Conexion();
			$query="SELECT * FROM `usuario` WHERE `Nombre`='$user' AND `Password`='$pass' AND `Tipo`='$tipo';";

			$consulta=$usuario->query($query);
			$usuario->close();
			return $consulta;
		}

		public function AgregarUsuario($nom, $ape, $pass, $tipo)
		{
			//INSERT INTO `usuario`(`Nombre`, `Apellido`, `Password`, `Tipo`) VALUES ()

			$usuario = new Conexion();
			$query="INSERT INTO `usuario`(`Nombre`, `Apellido`, `Password`, `Tipo`) VALUES ('$nom','$ape','$pass','$tipo');";
			$consulta=$usuario->query($query);
			$usuario->close();
			return $consulta;
		}
	}
?>