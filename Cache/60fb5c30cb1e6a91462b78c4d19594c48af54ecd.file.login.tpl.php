<?php /* Smarty version Smarty-3.1.8, created on 2013-08-07 14:19:23
         compiled from "../Views\editor\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1688051f69a4f1cfeb4-87017546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60fb5c30cb1e6a91462b78c4d19594c48af54ecd' => 
    array (
      0 => '../Views\\editor\\login.tpl',
      1 => 1375603954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1688051f69a4f1cfeb4-87017546',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51f69a4f262368_69645955',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f69a4f262368_69645955')) {function content_51f69a4f262368_69645955($_smarty_tpl) {?>    <form method="post" action="" class="loginform cf">
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