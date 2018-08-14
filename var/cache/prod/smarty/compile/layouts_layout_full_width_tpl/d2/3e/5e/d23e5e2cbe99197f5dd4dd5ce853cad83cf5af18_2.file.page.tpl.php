<?php
/* Smarty version 3.1.32, created on 2018-08-14 18:43:44
  from '/Applications/MAMP/htdocs/prestashop_1.7.4.2/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b734d107c9432_59425094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd23e5e2cbe99197f5dd4dd5ce853cad83cf5af18' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop_1.7.4.2/themes/classic/templates/page.tpl',
      1 => 1534281345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b734d107c9432_59425094 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12638537925b734d107bd1f3_11040451', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_14249518955b734d107bef94_64752450 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_2993396565b734d107bdf67_09692257 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14249518955b734d107bef94_64752450', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_9958792595b734d107c3cc0_34653474 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_16706613625b734d107c4f05_63563613 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1017982665b734d107c2f88_67528449 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9958792595b734d107c3cc0_34653474', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16706613625b734d107c4f05_63563613', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_12435517385b734d107c7705_19890439 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_4289857795b734d107c6a87_32171147 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12435517385b734d107c7705_19890439', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_12638537925b734d107bd1f3_11040451 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12638537925b734d107bd1f3_11040451',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_2993396565b734d107bdf67_09692257',
  ),
  'page_title' => 
  array (
    0 => 'Block_14249518955b734d107bef94_64752450',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1017982665b734d107c2f88_67528449',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_9958792595b734d107c3cc0_34653474',
  ),
  'page_content' => 
  array (
    0 => 'Block_16706613625b734d107c4f05_63563613',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_4289857795b734d107c6a87_32171147',
  ),
  'page_footer' => 
  array (
    0 => 'Block_12435517385b734d107c7705_19890439',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2993396565b734d107bdf67_09692257', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1017982665b734d107c2f88_67528449', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4289857795b734d107c6a87_32171147', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
