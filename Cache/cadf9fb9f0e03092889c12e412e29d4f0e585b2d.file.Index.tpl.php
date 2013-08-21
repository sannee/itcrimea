<?php /* Smarty version Smarty-3.1.8, created on 2013-08-04 12:40:40
         compiled from "../Views\sections\Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:790651dd596013e004-94539239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cadf9fb9f0e03092889c12e412e29d4f0e585b2d' => 
    array (
      0 => '../Views\\sections\\Index.tpl',
      1 => 1375604080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '790651dd596013e004-94539239',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51dd596018eb01_98566560',
  'variables' => 
  array (
    'sections' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dd596018eb01_98566560')) {function content_51dd596018eb01_98566560($_smarty_tpl) {?>    <br/>
    <h3 class="row beautiful_border"><center>Разделы</center></h3>
    <div class="row beautiful_border">

        <?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value){
$_smarty_tpl->tpl_vars['section']->_loop = true;
?>
            <div>
                <h1><a href="/sections/show/section=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['title']);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['title']);?>
</a></h1>
            </div>
        <?php } ?>
    </div><?php }} ?>