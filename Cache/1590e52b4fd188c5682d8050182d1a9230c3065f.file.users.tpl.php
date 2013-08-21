<?php /* Smarty version Smarty-3.1.8, created on 2013-08-07 14:42:15
         compiled from "../Views\admin\users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1331051e04d28b8ca03-00661968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1590e52b4fd188c5682d8050182d1a9230c3065f' => 
    array (
      0 => '../Views\\admin\\users.tpl',
      1 => 1375603833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1331051e04d28b8ca03-00661968',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51e04d28bc6aa6_00448622',
  'variables' => 
  array (
    'error' => 0,
    'sections' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e04d28bc6aa6_00448622')) {function content_51e04d28bc6aa6_00448622($_smarty_tpl) {?>    <a href="/admin" class="adminmenu">Админ панель</a>
    <div class="beautiful_border">
        <center><h3>Добавление пользователей</h3></center>
    </div>
    <br/>
    <?php if ($_smarty_tpl->tpl_vars['error']->value!=null){?>
        <div class="beautiful_border"  style="background: rgba(255, 0, 0, 0.3)"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value);?>
</div>
    <?php }?>
    <br/>
    <form method="post" action="/admin/addAdmin" class="loginform cf">
        <h3>Добавление администратора</h3>
        <br/>
        <ul>
            <li>
                <label for="username">Имя пользователя:</label>
                <input type="text" name="login" id="username" placeholder="Имя пользователя" required />
            </li>

            <li>
                <label for="name">Полное имя:</label>
                <input type="text" name="name"  id="password" placeholder="Полное имя" required />
            </li>
            <li>
                <label for="password">Пароль:</label>
                <input type="password" name="password" id="password" placeholder="Пароль" required />
            </li>
            <li>
                <label for="password">Email:</label>
                <input type="email" name="email" id="password" placeholder="Email" required />
            </li>

            <li>
                <label for="password">Повторите пароль:</label>
                <input type="password" name="confirmPassword" id="password" placeholder="Повторите пароль" required />
            </li>

            <li>
                <input type="submit" name="submit" value="Добавить" />
            </li>
        </ul>
    </form>
    <br/>

    <form method="post" action="/admin/addEditor" class="loginform cf">
        <h3>Добавление редактора</h3>
        <br/>
        <ul>
            <li>
                <label for="login">Имя пользователя:</label>
                <input type="text" name="login" id="username" placeholder="Имя пользователя" required />
            </li>
            <li>
                <label for="name">Полное имя:</label>
                <input type="text" name="name"  id="password" placeholder="Полное имя" required />
            </li>
            <li>
                <label for="password">Пароль:</label>
                <input type="password" name="password" id="password" placeholder="Пароль" required />
            </li>
            <li>
                <label for="password">Email:</label>
                <input type="email" name="email" id="password" placeholder="Email" required />
            </li>

            <li>
                <label for="password">Повторите пароль:</label>
                <input type="password" name="confirmPassword" id="password" placeholder="Повторите пароль" required />
            </li>
            <li>
                <label for="sections">Раздел:</label>
                <select name="section">
                    <?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value){
$_smarty_tpl->tpl_vars['section']->_loop = true;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['id']);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['title']);?>
</option>
                    <?php } ?>
                </select>
            </li>

            <li>
                <input type="submit" name="submit" value="Добавить" />
            </li>
        </ul>
    </form><?php }} ?>