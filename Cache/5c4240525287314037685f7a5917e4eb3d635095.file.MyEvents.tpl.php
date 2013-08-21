<?php /* Smarty version Smarty-3.1.8, created on 2013-08-18 20:26:43
         compiled from "../Views\editor\MyEvents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67051fa834084a453-61581276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c4240525287314037685f7a5917e4eb3d635095' => 
    array (
      0 => '../Views\\editor\\MyEvents.tpl',
      1 => 1375603984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67051fa834084a453-61581276',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51fa8340b1ae28_86708258',
  'variables' => 
  array (
    'events' => 0,
    'event' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51fa8340b1ae28_86708258')) {function content_51fa8340b1ae28_86708258($_smarty_tpl) {?>
    <?php if ($_smarty_tpl->tpl_vars['events']->value==null){?>
        <div class="row beautiful_border"  style="background: rgba(255, 0, 0, 0.3)">
            Вы еще не добавили ниодного события
        </div>
    <?php }?>

    <?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
        <div class="row beautiful_border">
            <div>
                <h1><a href="/events/show/event=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['id']);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['title']);?>
</a></h1>
                <h5><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['date']);?>
</h5>
                <h3>Автор: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['author']);?>
"</h3>
                <p>
                    <?php echo $_smarty_tpl->tpl_vars['event']->value['description'];?>

                </p>
                <a href="/events/show/event=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['id']);?>
" class="more"  style="margin-left: 10px;">Подробнее...</a> 
                <a href="/editor/EditEvent/id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['id']);?>
" class="more"  style="margin-left: 10px;">Изменить</a> 
                <a href="/editor/DeleteEvent/id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['id']);?>
" class="more"  style="margin-left: 10px;">Удалить</a> 
            </div>
        </div>
    <?php } ?>
<?php }} ?>