<?php /* Smarty version Smarty-3.1.8, created on 2013-08-07 13:42:57
         compiled from "../Views\home\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12842520216a1802d86-33115814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd03a52f2f928760daa39d4ff464b86bba4c014dd' => 
    array (
      0 => '../Views\\home\\index.tpl',
      1 => 1375709570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12842520216a1802d86-33115814',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'articles' => 0,
    'article' => 0,
    'permission' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_520216a1a37714_50658418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520216a1a37714_50658418')) {function content_520216a1a37714_50658418($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
    <div class="row beautiful_border">
        <div>
            <h1><a href="/article/show/id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['id']);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title']);?>
</a></h1>
            <h5><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['date']);?>
</h5>
            <h3>Автор: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['author']);?>
"</h3>
            <p>
                <?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>

            </p>
            <?php if ($_smarty_tpl->tpl_vars['permission']->value=="admin"){?>
                <a href="/article/show/id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['id']);?>
" class="more" style="margin-left: 10px;">Подробнее...</a>
                <a href="/admin/EditArticle/id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['id']);?>
" class="more" style="margin-left: 10px;">Изменить</a>
                <a href="/admin/DeleteArticle/id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['id']);?>
" class="more" style="margin-left: 10px;">Удалить</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['permission']->value==null||$_smarty_tpl->tpl_vars['permission']->value=="editor"){?>
                <a href="/article/show/id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['id']);?>
" class="more">Подробнее...</a>                    
            <?php }?>
        </div>
    </div>
<?php } ?>

<div class="paginator">
<?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

</div>
<?php }} ?>