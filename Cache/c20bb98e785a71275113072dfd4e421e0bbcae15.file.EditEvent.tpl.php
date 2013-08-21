<?php /* Smarty version Smarty-3.1.8, created on 2013-08-21 18:02:52
         compiled from "../Views\admin\EditEvent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134351f698b7624ca4-93126635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c20bb98e785a71275113072dfd4e421e0bbcae15' => 
    array (
      0 => '../Views\\admin\\EditEvent.tpl',
      1 => 1377093769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134351f698b7624ca4-93126635',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51f698b77d2e77_96015572',
  'variables' => 
  array (
    'error' => 0,
    'event' => 0,
    'referer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f698b77d2e77_96015572')) {function content_51f698b77d2e77_96015572($_smarty_tpl) {?>    <a class="adminmenu" href="/admin">Админ панель</a>
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
        <form method="post" action="/admin/UpdateEvent">
            <div>
                <h3>Заголовок:</h3>
                <br/>
                <input class="textbox" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['title']);?>
" name="title" size="50" type="text" placeholder="Заголовок" required>
            </div>
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

<script type="text/javascript">
    CKEDITOR.replace('description');
    CKEDITOR.replace('fullText');
</script>
<?php }} ?>