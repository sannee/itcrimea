<?php /* Smarty version Smarty-3.1.8, created on 2013-08-21 18:04:22
         compiled from "../Views\admin\events.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3259851e53f5a95ce56-57499216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '530918f514502d42a7d3dadd15a368d4449420be' => 
    array (
      0 => '../Views\\admin\\events.tpl',
      1 => 1377093792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3259851e53f5a95ce56-57499216',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51e53f5aa94f43_70082687',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e53f5aa94f43_70082687')) {function content_51e53f5aa94f43_70082687($_smarty_tpl) {?>    <a class="adminmenu" href="/admin">Админ панель</a>
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
        <form method="post" action="/admin/AddEvent">
            <div>
                <h3>Заголовок:</h3>
                <br/>
                <input class="textbox" name="title" type="text" placeholder="Заголовок" required>
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