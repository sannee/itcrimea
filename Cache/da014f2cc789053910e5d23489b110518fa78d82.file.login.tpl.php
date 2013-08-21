<?php /* Smarty version Smarty-3.1.8, created on 2013-08-18 19:59:36
         compiled from "../Views\admin\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3067551e00bd3770e39-25141784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da014f2cc789053910e5d23489b110518fa78d82' => 
    array (
      0 => '../Views\\admin\\login.tpl',
      1 => 1376841572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3067551e00bd3770e39-25141784',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51e00bd3799091_96322271',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e00bd3799091_96322271')) {function content_51e00bd3799091_96322271($_smarty_tpl) {?>    <form method="post" action="" class="loginform cf">
            <ul>
                <li>
                    <label for="login">Имя пользователя:</label>
                    <input type="text" name="login" id="username" placeholder="Имя пользователя" required />
                </li>
                <li>
                    <label for="password">Пароль:</label>
                    <input type="password" name="password" id="password" placeholder="Пароль" required />
                </li>
                <li>
                    <input type="submit" name="submit" value="Вход" />
                </li>
            </ul>
    </form><?php }} ?>