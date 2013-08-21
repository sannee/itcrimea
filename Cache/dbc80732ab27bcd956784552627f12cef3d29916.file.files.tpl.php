<?php /* Smarty version Smarty-3.1.8, created on 2013-08-07 14:42:07
         compiled from "../Views\admin\files.tpl" */ ?>
<?php /*%%SmartyHeaderCode:861851f4fcddab0c86-45875472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbc80732ab27bcd956784552627f12cef3d29916' => 
    array (
      0 => '../Views\\admin\\files.tpl',
      1 => 1375603753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '861851f4fcddab0c86-45875472',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51f4fcddc3bb53_48000773',
  'variables' => 
  array (
    'error' => 0,
    'files' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f4fcddc3bb53_48000773')) {function content_51f4fcddc3bb53_48000773($_smarty_tpl) {?>    <a class="adminmenu" href="/admin">Админ панель</a>
    <div class="beautiful_border">
        <center><h3>Управление файлами</h3></center>
    </div>
    <br/>
    <?php if ($_smarty_tpl->tpl_vars['error']->value!=null){?>
        <div class="beautiful_border"  style="background: rgba(255, 0, 0, 0.3)"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value);?>
</div>
    <?php }?>
    <br/>
    <div class="beautiful_border">
        <form enctype="multipart/form-data" action="/admin/UploadFile" method="post">
            <h3>Загрузка файла:</h3>
            <input type="hidden" name="MAX_FILE_SIZE" value="20971520000000" id="MAX_FILE_SIZE">
            <input class="wi textbox" name="file" type="file" placeholder="Загрузка файла" required>
            <input class="pushButton" type="submit" name="submit" value="Загрузить"/>
        </form>
        <br/>
            <?php if ($_smarty_tpl->tpl_vars['files']->value!=null){?>
        <form method="POST" action="/admin/deleteFile">
            <table>
                <th>Загрузил</th>
                <th>Файл</th>
                <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
                <tr>
                    <td><span class="file"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['login']);?>
</span></td>
                    <td><a class="file" href="/public/uploads/<?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['name']);?>
</a></td>
                    <td><input  value="<?php echo $_smarty_tpl->tpl_vars['file']->value['name'];?>
" name="files[<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
]" type="checkbox" style="margin-left: 20px;"></td>
                </tr>
                <?php } ?>
            </table>
            <input class="pushButton" type="submit" name="submit" value="Удалить"/>
        </form>
            <?php }?>
    </div><?php }} ?>