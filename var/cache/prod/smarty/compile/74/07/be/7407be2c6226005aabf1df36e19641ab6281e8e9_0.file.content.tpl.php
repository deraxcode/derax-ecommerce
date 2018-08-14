<?php
/* Smarty version 3.1.32, created on 2018-08-14 18:44:01
  from '/Applications/MAMP/htdocs/prestashop_1.7.4.2/admin133zjtlpc/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b734d21de5709_32197534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7407be2c6226005aabf1df36e19641ab6281e8e9' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop_1.7.4.2/admin133zjtlpc/themes/default/template/content.tpl',
      1 => 1534281340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b734d21de5709_32197534 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
