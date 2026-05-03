<?php /* Smarty version Smarty-3.1.13, created on 2019-11-10 14:01:46
         compiled from "/home/srv31090/htdocs/test/data/templates/standard/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16505287485dc7ee1a475301-58956875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac3a062f82f8dc07166f2d9f4787d54da37e5616' => 
    array (
      0 => '/home/srv31090/htdocs/test/data/templates/standard/menu.tpl',
      1 => 1364238000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16505287485dc7ee1a475301-58956875',
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
  'unifunc' => 'content_5dc7ee1a4890c7_52169862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc7ee1a4890c7_52169862')) {function content_5dc7ee1a4890c7_52169862($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['menuItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mainMenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->key => $_smarty_tpl->tpl_vars['menuItem']->value){
$_smarty_tpl->tpl_vars['menuItem']->_loop = true;
?>
<a href="<?php echo $_smarty_tpl->getConfigVariable('pagesUrl');?>
/<?php echo $_smarty_tpl->tpl_vars['menuItem']->value->getReference();?>
.html"><?php echo $_smarty_tpl->tpl_vars['menuItem']->value->getTitle();?>
</a>
<?php } ?><?php }} ?>