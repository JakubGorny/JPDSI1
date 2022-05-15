{extends file=$conf->root_path|cat:"/templates/main.html"}

{block name=footer}przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora{/block}

{block name=content}

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>

<h2 class="content-head is-center">Prosty kalkulator</h2>

<div class="pure-g">

<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
	
	<form action="{$conf->action_url}calculate" method="post" class="pure-form pure-form-aligned bottom-margin">
			<fieldset>
			<label for="waga">Masa ciała (w kg)</label>
			<input name="waga" value="{$form->waga}" id="waga">
			<br>
			<label for="wzrost">Wzrost (w cm)</label>
			<input name="wzrost" value="{$form->wzrost}" id="wzrost">
			<Br>
			<button type="submit" class="button-success pure-button pure-button-primary" >Oblicz</button>
		</fieldset>
		</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

	{* wyświeltenie listy błędów, jeśli istnieją *}
	{if $msgs->isError()}
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		{foreach $msgs->getErrors() as $err}
		{strip}
			<li>{$err}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
	
	{* wyświeltenie listy informacji, jeśli istnieją *}
	{if $msgs->isInfo()}
		<h4>Informacje: </h4>
		<ol class="inf">
		{foreach $msgs->getInfos() as $inf}
		{strip}
			<li>{$inf}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
	
	{if isset($res->result)}
		<h4>Wynik</h4>
		<p class="res">
		{$res->result}
		</p>
	{/if}
	
	</div>
	</div>
	
	{/block}




