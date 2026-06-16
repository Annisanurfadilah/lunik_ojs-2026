<?php
/* Smarty version 4.5.5, created on 2026-06-13 10:11:24
  from 'app:dashboardeditors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a2d2cccefdf96_68582188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '830caeed3aef506466134daddc7ba92cd55e1e9a' => 
    array (
      0 => 'app:dashboardeditors.tpl',
      1 => 1752100232,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a2d2cccefdf96_68582188 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21199683706a2d2cccefc7a2_55010862', "page");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/backend.tpl");
}
/* {block "page"} */
class Block_21199683706a2d2cccefc7a2_55010862 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_21199683706a2d2cccefc7a2_55010862',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<dashboard-page v-bind="pageInitConfig" />
<?php
}
}
/* {/block "page"} */
}
