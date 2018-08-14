<?php
/* Smarty version 3.1.32, created on 2018-08-14 18:43:44
  from '/Applications/MAMP/htdocs/prestashop_1.7.4.2/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b734d107b4a19_98399610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf46e9b26321aa731620fd2c27ee29c65288f133' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop_1.7.4.2/themes/classic/templates/index.tpl',
      1 => 1534281345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b734d107b4a19_98399610 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3717975785b734d107ad379_92159194', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_11359814885b734d107ae5b3_81161129 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_7837373545b734d107b1030_88631726 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_4634624745b734d107b0056_67313414 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7837373545b734d107b1030_88631726', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_3717975785b734d107ad379_92159194 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_3717975785b734d107ad379_92159194',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_11359814885b734d107ae5b3_81161129',
  ),
  'page_content' => 
  array (
    0 => 'Block_4634624745b734d107b0056_67313414',
  ),
  'hook_home' => 
  array (
    0 => 'Block_7837373545b734d107b1030_88631726',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11359814885b734d107ae5b3_81161129', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4634624745b734d107b0056_67313414', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
