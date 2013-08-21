<?php /* Smarty version Smarty-3.1.8, created on 2013-07-30 13:39:53
         compiled from "../Views\editor\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1730051f786dbbcaa73-61401169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '434ab4125cd1d4054aae1d21a63922fea94bcf31' => 
    array (
      0 => '../Views\\editor\\index.tpl',
      1 => 1375177190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1730051f786dbbcaa73-61401169',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51f786dbc5bb65_08478318',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f786dbc5bb65_08478318')) {function content_51f786dbc5bb65_08478318($_smarty_tpl) {?>
<div class="center-sb">


    <h3 class="beautiful_border"><center>Панель редактора</center></h3><br/>
    <?php if ($_smarty_tpl->tpl_vars['error']->value!=null){?>
        <div class="beautiful_border"  style="background: rgba(255, 0, 0, 0.3)"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value);?>
</div>
    <?php }?>
    <br/>
    <div class="beautiful_border">
        <a class="adminmenu" href="/editor/articles" >Добавление статтей</a><br/>
        <a class="adminmenu" href="/editor/files">Управление файлами</a><br/>
        <a class="adminmenu" href="/editor/events">Добавление события</a>
    </div>
</div><?php }} ?>