{include file='Cabeceras/Header.tpl' titulo='Home'}
	{if isset($e)}
		<div class="row">
			<div class="col s4">
			
				{if $tipo=="Administrador"}
					{include file='MenuAdmin.tpl'}
				{else}
					{include file='MenuTrab.tpl'}
				{/if}
			</div>

			<div class="col s8">
				{if $vista=="CrearUsuario"}
					{include file='CrearUsuario.tpl'}

				{else if $vista == ""}

					{else if $vista == ""}

					{else if $vista == ""}

					{else if $vista == ""}

					{else if $vista == ""}

					{else}
						<img class="materialboxed " width="100%" src="Recursos/Img/LogoUmg3.jpg">
					{/if}

			</div>

		</div>
	{/if}
{include file='Cabeceras/Footer.tpl'}

