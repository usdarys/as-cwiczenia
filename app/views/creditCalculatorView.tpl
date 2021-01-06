{extends file="navbarView.tpl"}

{block name=main}
<main>
	<div class="container d-flex justify-content-center credit-calc-form flex-column">
			<form action="{$conf->actionUrl}creditCalculator" method="post" class="mt-5 w-100">
				<legend class="text-center mb-3">Kalkulator kredytowy</legend>
				<div class="form-group">
					<label for="amount">Kwota: </label>
					<input id="amount" type="text" name="amount" value="{$form->amount}" class="form-control"/>
				</div>
				<div class="form-group">
					<label for="numberOfYears">Liczba lat: </label>
					<input id="numberOfYears" type="text" name="numberOfYears" value="{$form->numberOfYears}" class="form-control"/>
				</div>
				<div class="form-group">
					<label for="interest">Oprocentowanie: </label>
					<input id="interest" type="text" name="interest" value="{$form->interest}" class="form-control"/>
				</div>

				{if $messages->isError()}
					{foreach $messages->getErrors() as $msg}
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