<?php /* Smarty version Smarty-3.1.8, created on 2013-08-21 18:01:21
         compiled from "../Views\admin\EditArticle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52851f6842beb5889-67878154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57314be53ad65a1fdae4edf3c1d589cecac47534' => 
    array (
      0 => '../Views\\admin\\EditArticle.tpl',
      1 => 1377093677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52851f6842beb5889-67878154',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51f6842c123525_49639152',
  'variables' => 
  array (
    'error' => 0,
    'article' => 0,
    'referer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f6842c123525_49639152')) {function content_51f6842c123525_49639152($_smarty_tpl) {?>    <a class="adminmenu" href="/admin">Админ Панель</a>
    <div class="beautiful_border">
        <center><h3>Редактирование статьи</h3></center>
    </div>
    <br/>
    <?php if ($_smarty_tpl->tpl_vars['error']->value!=null){?>
        <div class="beautiful_border"  style="background: rgba(255, 0, 0, 0.3)"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value);?>
</div>
    <?php }?>
    <br/>
    <div class="beautiful_border">
        <script src="/public/Js/ckeditor/ckeditor.js"></script>
        <form method="post" action="/admin/UpdateArticle">
            <div>
                <h3>Заголовок:</h3>
           <br/>
                <input class="textbox" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title']);?>
" name="title" size="50" type="text" placeholder="Заголовок" required>
            </div>
           
            <br/>
            <h3>Описание:</h3>
            <br/>
            <textarea id="description" name="description">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['description']);?>

            </textarea>
            <br/>
            <h3>Полная статья:</h3>
            <br/>
            <textarea id="fullText" name="text">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['text']);?>

            </textarea>
            <input class="pushButton" class="" type="submit" name="submit" value="Изменить" style="float: right"/>
            <div style="clear: right"></div>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">
            <input type="hidden" name="referer" value="<?php echo $_smarty_tpl->tpl_vars['referer']->value;?>
">
        </form>
    </div>

<script type="text/javascript">
    CKEDITOR.replace('description');
    CKEDITOR.replace('fullText');
</script>
<?php }} ?>