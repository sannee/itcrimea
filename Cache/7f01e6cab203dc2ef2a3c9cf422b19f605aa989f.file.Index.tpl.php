<?php /* Smarty version Smarty-3.1.8, created on 2013-08-21 15:09:36
         compiled from "../Views\events\Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2805351dd5ec51730d5-61087547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f01e6cab203dc2ef2a3c9cf422b19f605aa989f' => 
    array (
      0 => '../Views\\events\\Index.tpl',
      1 => 1377083321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2805351dd5ec51730d5-61087547',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51dd5ec51ddef4_10798687',
  'variables' => 
  array (
    'events' => 0,
    'event' => 0,
    'permission' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dd5ec51ddef4_10798687')) {function content_51dd5ec51ddef4_10798687($_smarty_tpl) {?>    <?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
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
                
                <?php if ($_smarty_tpl->tpl_vars['permission']->value=="admin"){?>
                    <a href="/events/show/event=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['id']);?>
" class="more"  style="margin-left: 10px;">Подробнее...</a> 
                    <a href="/admin/EditEvent/id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['id']);?>
" class="more"  style="margin-left: 10px;">Изменить</a> 
                    <a href="/admin/DeleteEvent/id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['id']);?>
" class="more"  style="margin-left: 10px;">Удалить</a> 
                <?php }?>
              
                <?php if ($_smarty_tpl->tpl_vars['permission']->value==null||$_smarty_tpl->tpl_vars['permission']->value=="editor"){?>
                    <a href="/events/show/event=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['id']);?>
" class="more">Подробнее...</a>                
                <?php }?>
                
            </div>
        </div>
    <?php } ?>
<div class="paginator">
<?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

</div><?php }} ?>