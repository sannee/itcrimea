<?php /* Smarty version Smarty-3.1.8, created on 2013-08-21 18:21:27
         compiled from "../Views\editor\events.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3000751fa7bfb903c11-29127716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32693e8418f208e32c138614d185869a116472f7' => 
    array (
      0 => '../Views\\editor\\events.tpl',
      1 => 1377094735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3000751fa7bfb903c11-29127716',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51fa7bfba07de0_21964883',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fa7bfba07de0_21964883')) {function content_51fa7bfba07de0_21964883($_smarty_tpl) {?>    <a class="adminmenu" href="/editor">Панель редактора</a>
    <div class="beautiful_border">
        <center><h3>Добавление события</h3></center>
    </div>
    <br/>
    <?php if ($_smarty_tpl->tpl_vars['error']->value!=null){?>
        <div class="beautiful_border"  style="background: rgba(255, 0, 0, 0.3)"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value);?>
</div>
    <?php }?>
    <br/>
    <div class="beautiful_border tb">
        <script src="/public/Js/ckeditor/ckeditor.js"></script>
        <form method="post" action="/editor/AddEvent">
            <div>
                <h3>Заголовок:</h3>
                <br/>
                <input class="textbox" name="title" size="50" type="text" placeholder="Заголовок" required>
            </div>
            <br/>
            <h3>Описание:</h3>
            <br/>
            <textarea id="description" name="description"></textarea>
            <br/>
            <h3>Текст:</h3>
            <br/>
            <textarea id="fullText" name="text"></textarea>
            <input class="pushButton" class="" type="submit" name="submit" value="Добавить" style="float: right"/>
            <div style="clear: right"></div>
        </form>
    </div>

<script type="text/javascript">
    CKEDITOR.replace('description');
    CKEDITOR.replace('fullText');
</script>
<?php }} ?>