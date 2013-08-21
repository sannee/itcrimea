<?php /* Smarty version Smarty-3.1.8, created on 2013-08-01 20:31:00
         compiled from "../Views\editor\EditEvent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2169151fa8813d22a08-03892206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e89a72e14c894777d52d195cb895eaeba12142f8' => 
    array (
      0 => '../Views\\editor\\EditEvent.tpl',
      1 => 1375374440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2169151fa8813d22a08-03892206',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51fa8813ee9227_51636583',
  'variables' => 
  array (
    'error' => 0,
    'event' => 0,
    'referer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fa8813ee9227_51636583')) {function content_51fa8813ee9227_51636583($_smarty_tpl) {?><div class="center-sb">
    <a class="adminmenu" href="/admin">Админ панель</a>
    <div class="beautiful_border">
        <center><h3>Редактирование события</h3></center>
    </div>
    <br/>
    <?php if ($_smarty_tpl->tpl_vars['error']->value!=null){?>
        <div class="beautiful_border"  style="background: rgba(255, 0, 0, 0.3)"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value);?>
</div>
    <?php }?>
    <br/>
    <div class="beautiful_border">
        <script src="/public/Js/ckeditor/ckeditor.js"></script>
        <form method="post" action="/editor/UpdateEvent">
            <div style="float: left">
                <h3>Заголовок:</h3>
                <input class="textbox" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['title']);?>
" name="title" size="50" type="text" placeholder="Заголовок" required>
            </div>
            <div style="clear: left"></div>
            <br/>
            <h3>Описание:</h3>
            <br/>
            <textarea id="description" name="description">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['description']);?>

            </textarea>
            <br/>
            <h3>Полная статья:</h3>
            <br/>
            <textarea id="fullText" name="text">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['text']);?>

            </textarea>
            <input class="pushButton" class="" type="submit" name="submit" value="Изменить" style="float: right"/>
            <div style="clear: right"></div>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
">
            <input type="hidden" name="referer" value="<?php echo $_smarty_tpl->tpl_vars['referer']->value;?>
">
        </form>
    </div>
</div>

<script type="text/javascript">
    CKEDITOR.replace('description');
    CKEDITOR.replace('fullText');
</script>
<?php }} ?>