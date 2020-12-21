{extends file="../shared/main.tpl"}

{block name=body}
	<div style="width:90%; margin: 2em auto;">
		<a href="{$appUrl}/app/login/login.php" class="pure-button pure-button-active">Wyloguj</a>
	</div>

	<div style="width:90%; margin: 2em auto;">
	<form action="{$appUrl}/app/creditCalculator/creditCalculator.php" method="post">
		<label for="amount">Kwota: </label>
		<input id="amount" type="text" name="amount" value="{$amount}" /><br />
		<label for="numberOfYears">Liczba lat: </label>
		<input id="numberOfYears" type="text" name="numberOfYears" value="{$numberOfYears}" /><br />
		<label for="interest">Oprocentowanie: </label>
		<input id="interest" type="text" name="interest" value="{$interest}" /><br />
		<input type="submit" value="Oblicz" />
	</form>	

	{if isset($messages)}
		{if !empty($messages)}
			<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">
			{foreach $messages as $msg}
				<li>{$msg}</li>
			{/foreach}
			</ol>
		{/if}
	{/if}

	{if isset($installment)}
		<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
			Miesięczna rata kredytu: {$installment}
		</div>
	{/if}	
{/block}

