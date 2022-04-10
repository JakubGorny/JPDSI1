<?php /* Smarty version Smarty-3.1.17, created on 2022-04-10 21:40:12
         compiled from "X:\XAMPP 7.4\htdocs\zad1\app\calc.html" */ ?>
<?php /*%%SmartyHeaderCode:159542132862532dca587026-68559453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76346976cb1b7270aa60104cdacffc292b0e2cbf' => 
    array (
      0 => 'X:\\XAMPP 7.4\\htdocs\\zad1\\app\\calc.html',
      1 => 1649619341,
      2 => 'file',
    ),
    '91c75dc05ba8f108d1ed84b849b815a9d7b4e4e3' => 
    array (
      0 => 'X:\\XAMPP 7.4\\htdocs\\zad1\\templates\\main.html',
      1 => 1649619023,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159542132862532dca587026-68559453',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_62532dca5b4b52_74375351',
  'variables' => 
  array (
    'page_description' => 0,
    'page_title' => 0,
    'app_url' => 0,
    'hide_intro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62532dca5b4b52_74375351')) {function content_62532dca5b4b52_74375351($_smarty_tpl) {?><!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>
">

    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>

	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/main-grid-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/main-grid.css">
    <!--<![endif]-->
  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/layouts/marketing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/layouts/marketing.css">
    <!--<![endif]-->

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/style.css">
<?php if ($_smarty_tpl->tpl_vars['hide_intro']->value) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/style_hide_intro.css">
<?php }?>
	
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/assets/css/font-awesome.css">

	<script src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/softscroll.js"></script>

</head>
<body>

<div id="app_top" class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href=""><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</a>
        <ul>
            <li class="pure-menu-selected"><a href="#app_top">Góra strony</a></li>
            <li><a href="#app_content">Idź do formularza</a></li>
        </ul>
    </div>
</div>

<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</h1>
        <p class="splash-subhead">
             <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>

        </p>
        <p>
            <a href="#app_content" class="pure-button pure-button-primary">Idź do formularza</a>
        </p>
    </div>
</div>

<div class="content-wrapper">

    <div id="app_content" class="content">



<h2 class="content-head is-center">Prosty kalkulator</h2>

<div class="pure-g">

<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
	
	<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
			<fieldset>
			<label for="waga">Masa ciała (w kg)</label>
			<input name="waga" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['waga'];?>
" id="id_waga">
			<br>
			<label for="wzrost">Wzrost (w cm)</label>
			<input name="wzrost" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['wzrost'];?>
" id="id_wzrost">
			<Br>
			<button type="submit" class="button-success pure-button pure-button-primary" >Oblicz</button>
		</fieldset>
		</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

<?php if (isset($_smarty_tpl->tpl_vars['messages']->value)) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value)>0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php } ?>
		</ol>
	<?php }?>
<?php }?>


<?php if (isset($_smarty_tpl->tpl_vars['infos']->value)) {?>
	<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0) {?> 
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php } ?>
		</ol>
	<?php }?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['result']->value)) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</p>
<?php }?>

</div>
</div>



    </div>

    <div class="footer l-box is-center">
		<p>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora
		</p>
        <p>Widok oparty na stylach i szablonie <a href="http://purecss.io/" target="_blank">Pure CSS Yahoo!</a>. </p>
    </div>

</div>


</body>
</html><?php }} ?>
