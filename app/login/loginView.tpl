
{extends file="../../templates/main.tpl"}

{block name=body}
	<div style="width:90%; margin: 2em auto;">

	<form action="{$appUrl}/app/login/login.php" method="post">
		<legend>Logowanie</legend>
		<fieldset>
			<label for="id_login">Login: </label>
			<input id="id_login" type="text" name="login" value="{$form['login']}"/>
			<label for="id_pass">Hasło: </label>
			<input id="id_pass" type="password" name="pass" />
		</fieldset>
		<input type="submit" value="zaloguj"/>
	</form>	

	
	{if isset($messages)}
		{if !empty($messages)}
			<ol style="padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">
			{foreach $messages as $msg}
				<li>{$msg}</li>
			{/foreach}
			</ol>
		{/if}
	{/if}
	

	</div>
{/block}



