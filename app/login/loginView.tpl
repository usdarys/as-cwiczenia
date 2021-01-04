
{extends file="../shared/template/main.tpl"}

{block name=body}
<main>
	<div class="container d-flex justify-content-center align-items-center login-form">
		<form action="{$appUrl}/app/login/login.php" method="post" class="w-100">
			<legend class="text-center mb-4">Logowanie</legend>
			<fieldset>
				<div class="form-group">
					<label for="id_login" class="sr-only">Login: </label>
					<input id="id_login" type="text" name="login" value="{$form['login']}" placeholder="login" class="form-control"/>
				</div>
				<div class="form-group">
					<label for="id_pass" class="sr-only">Hasło: </label>
					<input id="id_pass" type="password" name="pass" placeholder="hasło" class="form-control"/>
				</div>
			</fieldset>

			{if isset($messages)}
				{if !empty($messages)}	
					{foreach $messages as $msg}
						<div class="alert alert-danger mb-1">{$msg}</div>
					{/foreach}
				{/if}
			{/if}

			<input type="submit" value="Zaloguj" class="btn btn-primary btn-lg w-100 mt-2"/>
		</form>	
	</div>	
</main>
{/block}



