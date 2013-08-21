<?php /* Smarty version Smarty-3.1.8, created on 2013-08-21 15:45:52
         compiled from "../Views\events\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:966351dd616b719590-20371056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6da8cc1f931300a25c08b15c5136b14178f8ffa7' => 
    array (
      0 => '../Views\\events\\show.tpl',
      1 => 1377085266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '966351dd616b719590-20371056',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51dd616b770992_06747724',
  'variables' => 
  array (
    'event' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dd616b770992_06747724')) {function content_51dd616b770992_06747724($_smarty_tpl) {?>        <div class="row beautiful_border">
            <div>
                <h1><a href="/events/show/event=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['id']);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['title']);?>
</a></h1>
                <h5><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['date']);?>
</h5>
                <h3>Автор: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['author']);?>
"</h3>
                <p>
                    <?php echo $_smarty_tpl->tpl_vars['event']->value['text'];?>

                </p>
            </div>

        </div>
                
               <?php }} ?>