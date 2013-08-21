<?php /* Smarty version Smarty-3.1.8, created on 2013-07-10 16:50:12
         compiled from "../Views\Sections\Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2067651dd44d6e8ee34-80131401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db227faa39e1cd3eb790f8be013a8ef57cefa21f' => 
    array (
      0 => '../Views\\Sections\\Index.tpl',
      1 => 1373460603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2067651dd44d6e8ee34-80131401',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51dd44d6efac36_57647354',
  'variables' => 
  array (
    'sections' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dd44d6efac36_57647354')) {function content_51dd44d6efac36_57647354($_smarty_tpl) {?><div class="center-sb">
    <h3>Разделы:</h3>
    <br/>
    <div class="row">
        <?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value){
$_smarty_tpl->tpl_vars['section']->_loop = true;
?>
            <div>
                <h1><a href="/sections/show/section=<?php echo $_smarty_tpl->tpl_vars['section']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['section']->value['title'];?>
</a></h1>
            </div>
        <?php } ?>
    </div>
</div>
<?php }} ?>