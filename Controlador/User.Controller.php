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
    }
?>