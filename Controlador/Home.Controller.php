<?php
	class Home 
    {
        //include_once('Framework/Smarty/SmartySetup.php'); 
        public function Inicio()
        {
            $smarty =new Smarty();
            //$smarty->caching=true;
           
		    //$smarty->assign('usuario','carlos');
			//$smarty->assign('tipo','trabajador');
            $smarty->display('Master.tpl');
        }
    }
?>