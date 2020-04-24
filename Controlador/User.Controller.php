<?php
	class User
    {
	   public function Login()
       {
            $smarty=new Smarty();
			$user=new Usuarios();
			$lib=new Librerias();
            //$smarty->caching=true;
            
            $nombre=$_POST['usuario'];
			$pass=$_POST['pass'];
			$tipo=$_POST['tipo'];

			$dato=$user->BuscarUsuario($nombre, $pass, $tipo);
			$d=$lib->DatosRow($dato);
			//var_dump($dato);

			if($dato->num_rows==1)
			{
				session_start();
				
				$_SESSION['user']=$nombre;
				$_SESSION['tipo']=$tipo;
				$_SESSION['vista']="null";

				$smarty->assign('e','null');
				$smarty->assign('vista',$_SESSION['vista']);
				$smarty->assign('usuario',$_SESSION['user']);
				$smarty->assign('tipo',$_SESSION['tipo']);
				$smarty->display('Master.tpl');
			}
			else 
			{
				$smarty->display('Master.tpl');
			}
       }

	   public function GuardarUsuario()
	   {
			//echo "en guardar usuario";
			$guardar = new Usuarios();
			$smarty=new Smarty();
			session_start();

			$nombre=$_POST['nombre'];
			$apellido=$_POST['apellido'];
			$foto=$_POST['foto'];
			$fecha=$_POST['fecha'];
			$pass=$_POST['pass'];
			$repass=$_POST['RePass'];
			$tipo=$_POST['tipo'];

			//var_dump($_POST);

			$transaccion=$guardar->AgregarUsuario($nombre,$apellido,$pass,$tipo);

			if($transaccion)
			{
				$men= "usuario ".$nombre." creado";
			}
			else 
			{
				$men= "usuario ".$nombre." no guardado";
			}
			
			$smarty->assign('men',$men);
			$smarty->assign('e','null');
			$smarty->assign('vista','CrearUsuario');
			$smarty->assign('usuario',$_SESSION['user']);
			$smarty->assign('tipo',$_SESSION['tipo']);
			$smarty->display('Master.tpl');

	   }
    }
?>