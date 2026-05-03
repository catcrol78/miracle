<?php /* Smarty version Smarty-3.1.13, created on 2025-08-13 14:27:16
         compiled from "/home/srv31090/htdocs/data/templates/standard/slideshow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1855794055d3b23cdcafda9-93268634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3ffbb5aa12920e5ad1571a7b9d39fcf5ee37c81' => 
    array (
      0 => '/home/srv31090/htdocs/data/templates/standard/slideshow.tpl',
      1 => 1755073631,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1855794055d3b23cdcafda9-93268634',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5d3b23cdcc5407_60973855',
  'variables' => 
  array (
    'slides' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d3b23cdcc5407_60973855')) {function content_5d3b23cdcc5407_60973855($_smarty_tpl) {?>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
            <div class="carousel-item" data-interval="5000">
                <img src="../../../media/slides/<?php echo $_smarty_tpl->tpl_vars['slide']->value->getImage();?>
" class="d-block w-100" alt="<?php echo $_smarty_tpl->tpl_vars['slide']->value->getDescription();?>
">
            </div>
        <?php } ?>
































































    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
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