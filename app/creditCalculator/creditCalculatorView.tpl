{extends file="../shared/template/main.tpl"}

{block name=body}
<nav class="navbar bg-light border-bottom d-flex justify-content-end">
	<a href="{$appUrl}/app/login/login.php" class="btn btn-link disabled">Wyloguj</a>
</nav>

<main>
	<div class="container d-flex justify-content-center credit-calc-form flex-column">
			<form action="{$appUrl}/app/creditCalculator/creditCalculator.php" method="post" class="mt-5 w-100">
				<legend class="text-center mb-3">Kalkulator kredytowy</legend>
				<div class="form-group">
					<label for="amount">Kwota: </label>
					<input id="amount" type="text" name="amount" value="{$amount}" class="form-control"/>
				</div>
				<div class="form-group">
					<label for="numberOfYears">Liczba lat: </label>
					<input id="numberOfYears" type="text" name="numberOfYears" value="{$numberOfYears}" class="form-control"/>
				</div>
				<div class="form-group">
					<label for="interest">Oprocentowanie: </label>
					<input id="interest" type="text" name="interest" value="{$interest}" class="form-control"/>
				</div>

				{if !$messages->isEmpty()}
					{foreach $messages->getItems() as $msg}
						<div class="alert alert-danger mb-1">{$msg}</div>
					{/foreach}
				{/if}

				<input type="submit" value="Oblicz miesięczną ratę" class="btn btn-primary mt-2"/>
			</form>	

			{if isset($installment)}
				<div class="alert alert-info mt-2">Miesięczna rata kredytu wynosi: {$installment}</div>
			{/if}

	</div>
</main>
{/block}

