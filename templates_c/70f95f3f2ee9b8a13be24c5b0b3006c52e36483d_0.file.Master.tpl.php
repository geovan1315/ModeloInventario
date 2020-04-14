<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-13 20:29:48
  from 'C:\xampp\htdocs\geovan1315\ModeloInventario\templates\Master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e94af9c5ebb30_37332533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70f95f3f2ee9b8a13be24c5b0b3006c52e36483d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\geovan1315\\ModeloInventario\\templates\\Master.tpl',
      1 => 1586802586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:MenuAdmin.tpl' => 1,
    'file:MenuTrab.tpl' => 1,
    'file:CrearUsuario.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_5e94af9c5ebb30_37332533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Cabeceras/Header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('titulo'=>'Home'), 0, false);
?>
	<?php if (isset($_smarty_tpl->tpl_vars['e']->value)) {?>
		<div class="row">
			<div class="col s4">
			
				<?php if ($_smarty_tpl->tpl_vars['tipo']->value == "Administrador") {?>
					<?php $_smarty_tpl->_subTemplateRender('file:MenuAdmin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php } else { ?>
					<?php $_smarty_tpl->_subTemplateRender('file:MenuTrab.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php }?>
			</div>

			<div class="col s8">
				<?php if ($_smarty_tpl->tpl_vars['vista']->value == "CrearUsuario") {?>
					<?php $_smarty_tpl->_subTemplateRender('file:CrearUsuario.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				<?php } elseif ($_smarty_tpl->tpl_vars['vista']->value == '') {?>

					<?php } elseif ($_smarty_tpl->tpl_vars['vista']->value == '') {?>

					<?php } elseif ($_smarty_tpl->tpl_vars['vista']->value == '') {?>

					<?php } elseif ($_smarty_tpl->tpl_vars['vista']->value == '') {?>

					<?php } elseif ($_smarty_tpl->tpl_vars['vista']->value == '') {?>

					<?php } else { ?>
						<img class="materialboxed " width="100%" src="Recursos/Img/LogoUmg3.jpg">
					<?php }?>

			</div>

		</div>
	<?php }
$_smarty_tpl->_subTemplateRender('file:Cabeceras/Footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
