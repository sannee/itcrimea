<?php /* Smarty version Smarty-3.1.8, created on 2013-08-21 18:19:04
         compiled from "../Views\editor\files.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2650051fa67de1a0274-06438604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea27c181e3d173799f450e474e8ed124d69efbfa' => 
    array (
      0 => '../Views\\editor\\files.tpl',
      1 => 1375603924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2650051fa67de1a0274-06438604',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51fa67de3a6c91_07984924',
  'variables' => 
  array (
    'error' => 0,
    'files' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fa67de3a6c91_07984924')) {function content_51fa67de3a6c91_07984924($_smarty_tpl) {?>    <a class="adminmenu" href="/editor">Панель редактора</a>
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
        <form enctype="multipart/form-data" action="/editor/UploadFile" method="post">
            <h3>Загрузка файла:</h3>
            <input type="hidden" name="MAX_FILE_SIZE" value="20971520000000" id="MAX_FILE_SIZE">
            <input class="wi textbox" name="file" type="file" placeholder="Загрузка файла" required>
            <input class="pushButton" type="submit" name="submit" value="Загрузить"/>
        </form>
        <br/>
        <?php if ($_smarty_tpl->tpl_vars['files']->value!=null){?>
            <form method="POST" action="/editor/deleteFile">
                <h5>Список файлов:</h5>
                <br/>
                <table>
                    <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
                        <tr>
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