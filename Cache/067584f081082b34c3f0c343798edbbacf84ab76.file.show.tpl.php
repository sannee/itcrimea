<?php /* Smarty version Smarty-3.1.8, created on 2013-08-21 15:23:40
         compiled from "../Views\article\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:557051dd3ce4a525b4-67832852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '067584f081082b34c3f0c343798edbbacf84ab76' => 
    array (
      0 => '../Views\\article\\show.tpl',
      1 => 1377084201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '557051dd3ce4a525b4-67832852',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51dd3ce4bca474_33519887',
  'variables' => 
  array (
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dd3ce4bca474_33519887')) {function content_51dd3ce4bca474_33519887($_smarty_tpl) {?>        <div class="row beautiful_border">
            <div>
                <h1><a href="/article/show/id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['id']);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title']);?>
</a></h1>
                <h5><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['date']);?>
</h5>
                <h3>Автор: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['author']);?>
"</h3>
                <p>
                    <?php echo $_smarty_tpl->tpl_vars['article']->value['text'];?>

                </p>
            </div>
        </div>
<?php }} ?>