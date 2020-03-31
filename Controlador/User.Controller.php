<?php
	class User
    {
	   public function Login()
       {
            $smarty=new Smarty();
			$user=new Usuarios();
            //$smarty->caching=true;
            
            $nombre=$_POST['usuario'];
			$pass=$_POST['pass'];
			$tipo=$_POST['tipo'];

			$dato=$user->BuscarUsuario($nombre, $pass, $tipo);

			//var_dump($dato);

			if($dato->num_rows==1)
			{
				$smarty->assign('usuario',$nombre);
				$smarty->assign('tipo',$tipo);
				$smarty->display('Master.tpl');
			}
			else 
			{
				$smarty->display('Master.tpl');
			}


       }
    }
?>