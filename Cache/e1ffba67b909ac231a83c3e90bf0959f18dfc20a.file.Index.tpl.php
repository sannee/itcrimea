<?php /* Smarty version Smarty-3.1.8, created on 2013-08-21 18:11:25
         compiled from "../Views\admin\Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2890651e01a39c57963-40276059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1ffba67b909ac231a83c3e90bf0959f18dfc20a' => 
    array (
      0 => '../Views\\admin\\Index.tpl',
      1 => 1377094282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2890651e01a39c57963-40276059',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51e01a39c92ae4_98464023',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e01a39c92ae4_98464023')) {function content_51e01a39c92ae4_98464023($_smarty_tpl) {?>    <h3 class="beautiful_border"><center>Админ панель</center></h3><br/>
    <div class="beautiful_border">
        <a class="adminmenu" href="/admin/articles" >Добавление статтей</a><br/>
        <a class="adminmenu" href="/admin/sections" >Управление разделами</a><br/>
        <a class="adminmenu" href="/admin/users">Добавление пользователей</a><br/> 
        <a class="adminmenu" href="/admin/files">Управление файлами</a><br/>
        <a class="adminmenu" href="/admin/events">Добавление событий</a><br/>
        <a class="adminmenu" href="/events">Управления событиями</a><br/>
        <a class="adminmenu" href="/admin/logout">Выход</a>
    </div><?php }} ?>