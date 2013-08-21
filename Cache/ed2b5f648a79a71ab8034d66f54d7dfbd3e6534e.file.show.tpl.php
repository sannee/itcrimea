<?php /* Smarty version Smarty-3.1.8, created on 2013-08-07 13:04:00
         compiled from "../Views\sections\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1937351dd595befda59-53469979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed2b5f648a79a71ab8034d66f54d7dfbd3e6534e' => 
    array (
      0 => '../Views\\sections\\show.tpl',
      1 => 1375866231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1937351dd595befda59-53469979',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51dd595c036743_23885343',
  'variables' => 
  array (
    'articles' => 0,
    'article' => 0,
    'permission' => 0,
    'SectionOfEditor' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dd595c036743_23885343')) {function content_51dd595c036743_23885343($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
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

            <?php if ($_smarty_tpl->tpl_vars['permission']->value=="admin"||$_smarty_tpl->tpl_vars['SectionOfEditor']->value==true){?>
                <a href="/article/show/id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['id']);?>
" class="more" style="margin-left: 10px;">Подробнее...</a>
                <a href="/editor/EditArticle/id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['id']);?>
" class="more" style="margin-left: 10px;">Изменить</a>
                <a href="/editor/DeleteArticle/id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['id']);?>
" class="more" style="margin-left: 10px;">Удалить</a>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['permission']->value==null||$_smarty_tpl->tpl_vars['SectionOfEditor']->value==false){?>
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