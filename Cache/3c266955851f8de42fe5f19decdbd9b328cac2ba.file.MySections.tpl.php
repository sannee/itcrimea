<?php /* Smarty version Smarty-3.1.8, created on 2013-08-18 20:26:33
         compiled from "../Views\editor\MySections.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1173151faa987011cd6-38764903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c266955851f8de42fe5f19decdbd9b328cac2ba' => 
    array (
      0 => '../Views\\editor\\MySections.tpl',
      1 => 1375603995,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1173151faa987011cd6-38764903',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51faa98719f919_27410780',
  'variables' => 
  array (
    'sections' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51faa98719f919_27410780')) {function content_51faa98719f919_27410780($_smarty_tpl) {?>    <a class="adminmenu" href="/editor">Панель редактора</a>
    <div class="beautiful_border">
        <center><h3>Мои разделы</h3></center>
    </div>
    <br/>

    <div class="beautiful_border">
        <?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value){
$_smarty_tpl->tpl_vars['section']->_loop = true;
?>
            <a class="adminmenu" href="/sections/show/section=<?php echo $_smarty_tpl->tpl_vars['section']->value['section'];?>
"><?php echo $_smarty_tpl->tpl_vars['section']->value['section'];?>
</a><br/>
        <?php } ?>
    </div><?php }} ?>