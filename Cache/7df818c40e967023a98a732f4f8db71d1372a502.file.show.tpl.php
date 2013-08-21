<?php /* Smarty version Smarty-3.1.8, created on 2013-07-10 16:59:52
         compiled from "../Views\Sections\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1474751dd5ac85d8591-67042666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7df818c40e967023a98a732f4f8db71d1372a502' => 
    array (
      0 => '../Views\\Sections\\show.tpl',
      1 => 1373460815,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1474751dd5ac85d8591-67042666',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'articles' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51dd5ac86572f9_13750354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dd5ac86572f9_13750354')) {function content_51dd5ac86572f9_13750354($_smarty_tpl) {?><div class="center-sb">
    <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
        <div class="row">
            <div>
                <h1><a href="/article/show/id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h1>
                <h5><?php echo $_smarty_tpl->tpl_vars['article']->value['date'];?>
</h5>
                <h3>Автор: "<?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
"</h3>
                <p>
                    <?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>

                </p>
                <a href="/article/show/id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" class="more">Подробнее...</a>
            </div>
        </div>
        <li></li>
    <?php } ?>
</div>
<?php }} ?>