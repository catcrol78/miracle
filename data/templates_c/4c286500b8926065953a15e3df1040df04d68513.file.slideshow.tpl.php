<?php /* Smarty version Smarty-3.1.13, created on 2019-11-11 05:07:54
         compiled from "/home/srv31090/htdocs/test/data/templates/standard/slideshow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1201692885dc7ee1a48bb49-12329337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c286500b8926065953a15e3df1040df04d68513' => 
    array (
      0 => '/home/srv31090/htdocs/test/data/templates/standard/slideshow.tpl',
      1 => 1573427259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1201692885dc7ee1a48bb49-12329337',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5dc7ee1a49edb3_31497349',
  'variables' => 
  array (
    'slides' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc7ee1a49edb3_31497349')) {function content_5dc7ee1a49edb3_31497349($_smarty_tpl) {?>
<div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
    <div class="carousel-item" data-interval="5000"><img src="<?php echo $_smarty_tpl->getConfigVariable('mediaUrl');?>
/slides/<?php echo $_smarty_tpl->tpl_vars['slide']->value->getImage();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slide']->value->getDescription();?>
" class="d-block w-100"></div>
<?php } ?>
</div>
</div>
<script>
    $('.carousel-inner .carousel-item:first').addClass('active');
</script> 

<!--
<script type="text/javascript">
    $(function(){
        $("#slides").slidesjs({
            width: 700,
            height: 397,
            navigation: {active: false},
            pagination: {active: false},
            play: {active: false, auto: true, interval: 3000, effect: 'fade'},
            effect: {
                fade: {speed: 1000, crossfade: true}
            }
        });
    });
</script>
-->

<?php }} ?>