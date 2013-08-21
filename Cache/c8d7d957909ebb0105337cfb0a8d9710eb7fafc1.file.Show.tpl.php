<?php /* Smarty version Smarty-3.1.8, created on 2013-07-10 15:02:19
         compiled from "../Views\Article\Show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2863151dd3d1760f4e4-40182838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8d7d957909ebb0105337cfb0a8d9710eb7fafc1' => 
    array (
      0 => '../Views\\Article\\Show.tpl',
      1 => 1373454132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2863151dd3d1760f4e4-40182838',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51dd3d176cb774_91801946',
  'variables' => 
  array (
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dd3d176cb774_91801946')) {function content_51dd3d176cb774_91801946($_smarty_tpl) {?><div class="center-sb">
        <div class="row">
            <div>
                <h1><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h1>
                <h5><?php echo $_smarty_tpl->tpl_vars['article']->value['date'];?>
</h5>
                <h3>Автор: "<?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
"</h3>
                <p>
                    <?php echo $_smarty_tpl->tpl_vars['article']->value['text'];?>

                </p>
            </div>
        </div>
</div>
<?php }} ?>