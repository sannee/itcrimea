<?php /* Smarty version Smarty-3.1.8, created on 2013-08-21 18:21:12
         compiled from "../Views\editor\Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2240251f69ab45ac764-01551603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b4b048d6e5bad07ec60c08f46bb78704be897d0' => 
    array (
      0 => '../Views\\editor\\Index.tpl',
      1 => 1377094855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2240251f69ab45ac764-01551603',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51f69ab463d669_68007867',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f69ab463d669_68007867')) {function content_51f69ab463d669_68007867($_smarty_tpl) {?>
    <h3 class="beautiful_border"><center>Панель редактора</center></h3><br/>
    <?php if ($_smarty_tpl->tpl_vars['error']->value!=null){?>
        <div class="beautiful_border"  style="background: rgba(255, 0, 0, 0.3)"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value);?>
</div>
    <?php }?>
    <br/>
    <div class="beautiful_border">
        <a class="adminmenu" href="/editor/articles" >Добавление статтей</a><br/>
        <a class="adminmenu" href="/editor/files">Управление файлами</a><br/>
        <a class="adminmenu" href="/editor/events">Добавление события</a><br/>
        <a class="adminmenu" href="/editor/MyEvents">Управление событиями</a><br/>
        <a class="adminmenu" href="/editor/MySections">Мои разделы</a><br/>
        <a class="adminmenu" href="/editor/logout">Выйти</a><br/>
    </div><?php }} ?>