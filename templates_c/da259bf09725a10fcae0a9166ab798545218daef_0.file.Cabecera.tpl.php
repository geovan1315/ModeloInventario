<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-24 19:07:55
  from 'C:\xampp\htdocs\geo221315\ModeloInventario\templates\Cabecera.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea31ceb880392_10724475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da259bf09725a10fcae0a9166ab798545218daef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\geo221315\\ModeloInventario\\templates\\Cabecera.tpl',
      1 => 1587748012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea31ceb880392_10724475 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row  blue lighten-3">
	<div class=" col s4 " >
		<p class="white-text  "> <strong>USUARIO: <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</strong> </p>
		<p class="white-text  "> <strong>PUESTO: <?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
</strong> </p>
	</div>
	<div class=" col s4" >
		<img class="materialboxed " data-caption="Usuario" width="100"  src="Recursos/FotosTrab/php.png">
	</div>
	<div class=" col s4 ">
		<a href="?controller=Salir&action=CerrarSesion" class="brand-logo white-text  ">Salir</a>
	</div>
</div><?php }
}
