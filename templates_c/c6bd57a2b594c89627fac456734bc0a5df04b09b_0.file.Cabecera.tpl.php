<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-31 18:34:42
  from 'C:\xampp\htdocs\geovan1315\ModeloInventario\templates\Cabecera.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e8371222b23a4_06146616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6bd57a2b594c89627fac456734bc0a5df04b09b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\geovan1315\\ModeloInventario\\templates\\Cabecera.tpl',
      1 => 1585672131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8371222b23a4_06146616 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row  blue lighten-3">
	<div class=" col s4 " >
		<p class="white-text  "> <strong>USUARIO: <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</strong> </p>
		<p class="white-text  "> <strong>PUESTO: <?php echo $_smarty_tpl->tpl_vars['tipo']->value;?>
</strong> </p>
	</div>
	<div class=" col s4" >
		<img class="materialboxed " data-caption="Usuario" width="100"  src="Recursos/FotosUsuarios/php.png">
	</div>
	<div class=" col s4 ">
		<a href="?controller=Salir&action=CerrarSesion" class="brand-logo white-text  ">Salir</a>
	</div>
</div><?php }
}
