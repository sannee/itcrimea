<?php /* Smarty version Smarty-3.1.8, created on 2013-08-07 14:42:00
         compiled from "../Views\admin\sections.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2606051e5442fab52a9-80376602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbce80bc5a951c51443292121dffa875d5dd057e' => 
    array (
      0 => '../Views\\admin\\sections.tpl',
      1 => 1375603809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2606051e5442fab52a9-80376602',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51e5442fbb99b3_43297224',
  'variables' => 
  array (
    'error' => 0,
    'sections' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e5442fbb99b3_43297224')) {function content_51e5442fbb99b3_43297224($_smarty_tpl) {?>    <a class="adminmenu" href="/admin">Админ панель</a>
    <div class="beautiful_border">
        <center><h3>Управление разделами</h3></center>
    </div>
    <br/>
    <?php if ($_smarty_tpl->tpl_vars['error']->value!=null){?>
        <div class="beautiful_border"  style="background: rgba(255, 0, 0, 0.3)"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value);?>
</div>
    <?php }?>
    <br/>
    <div class="beautiful_border">
        <form method="post" action="/admin/AddSection">
            <h3>Заголовок раздела:</h3>
            <input class="wi textbox" name="title" size="50" type="text" placeholder="Заголовок раздела" required>
            <input class="pushButton" type="submit" name="submit" value="Добавить"/>
        </form>
        <br/>
        <form method="post" action="/admin/SetSection">
            <h3>Назначить раздел:</h3>    
            <table>
                <tr>
                    <td><label for="username">Имя пользователя</label></td>                
                    <td><label for="sections">Раздел:</label></td>
                </tr>
                
                <tr>
                    <td>       
                        <input name = "username" class="textbox" name="title" size="15" type="text" placeholder="Имя пользователя" required>
                    </td>                
                    <td>
                        <select name="sections" class="textbox">
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
                    </td>
                    <td> <input class="pushButton" style="margin-top: 0px;" class="" type="submit" name="submit" value="Назначить"/></td> 
                </tr>
            </table>

           
        </form>
        <br/>
        <form method="post" action="/admin/DeleteSection">
            <h3>Удаление раздела:</h3>
            <select name="sections" class="textbox">
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
            <input class="pushButton" class="" type="submit" name="submit" value="Удалить"/>
        </form>
    </div><?php }} ?>