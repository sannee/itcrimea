<?php /* Smarty version Smarty-3.1.8, created on 2013-08-21 18:03:41
         compiled from "../Views\admin\articles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2683851e1529342e1e0-74435263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bac4739014082ea7d1e9099fa41cb491cec4b4fe' => 
    array (
      0 => '../Views\\admin\\articles.tpl',
      1 => 1377093805,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2683851e1529342e1e0-74435263',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51e1529342ecd9_00211953',
  'variables' => 
  array (
    'error' => 0,
    'sections' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e1529342ecd9_00211953')) {function content_51e1529342ecd9_00211953($_smarty_tpl) {?>    <a class="adminmenu" href="/admin">Админ панель</a>
    <div class="beautiful_border">
        <center><h3>Добавление статьи</h3></center>
    </div>
    <br/>
    
    <?php if ($_smarty_tpl->tpl_vars['error']->value!=null){?>
        <div class="beautiful_border"  style="background: rgba(255, 0, 0, 0.3)"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value);?>
</div>
    <?php }?>
    
    <br/>
    <div class="beautiful_border">
        <script src="/public/Js/ckeditor/ckeditor.js"></script>
        <form method="post" action="/admin/AddArticle">
            <div>
                <h3>Заголовок:</h3>
                <br/>
                <input class="textbox" name="title" size="50" type="text" placeholder="Заголовок" required>
            </div>
<br/>
            <div>
                <h3>Раздел:</h3>
                <select class="textbox" name="section" required>
                    <?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value){
$_smarty_tpl->tpl_vars['section']->_loop = true;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['id']);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['title']);?>
</option>\
                    <?php } ?>
                </select>
            </div>

                <br/>
            <h3>Описание:</h3>
            <br/>
            <textarea id="description" name="description"></textarea>
            <br/>
            <h3>Полная статья:</h3>
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