<?php /* Smarty version Smarty-3.1.13, created on 2019-07-26 19:01:17
         compiled from "/home/srv31090/htdocs/data/templates/standard/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:783420855d3b23cdc9bcb2-60946303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e15ab2f6bdc76c6dee18d07366c048ad86cfdf1a' => 
    array (
      0 => '/home/srv31090/htdocs/data/templates/standard/menu.tpl',
      1 => 1364330826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '783420855d3b23cdc9bcb2-60946303',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mainMenu' => 0,
    'menuItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d3b23cdcad380_38856547',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d3b23cdcad380_38856547')) {function content_5d3b23cdcad380_38856547($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['menuItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mainMenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->key => $_smarty_tpl->tpl_vars['menuItem']->value){
$_smarty_tpl->tpl_vars['menuItem']->_loop = true;
?>
<a href="<?php echo $_smarty_tpl->getConfigVariable('pagesUrl');?>
/<?php echo $_smarty_tpl->tpl_vars['menuItem']->value->getReference();?>
.html"><?php echo $_smarty_tpl->tpl_vars['menuItem']->value->getTitle();?>
</a>
<?php } ?><?php }} ?>