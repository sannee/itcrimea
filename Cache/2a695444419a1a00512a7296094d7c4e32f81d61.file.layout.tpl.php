<?php /* Smarty version Smarty-3.1.8, created on 2013-08-21 17:43:10
         compiled from "../Views\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1970751dc5395154853-50328223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a695444419a1a00512a7296094d7c4e32f81d61' => 
    array (
      0 => '../Views\\layout.tpl',
      1 => 1377092585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1970751dc5395154853-50328223',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51dc5395181219_41593137',
  'variables' => 
  array (
    'EventsCollumn' => 0,
    'event' => 0,
    'view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dc5395181219_41593137')) {function content_51dc5395181219_41593137($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="/Public/CSS/style.css" type="text/css"/>
        <title>IT Crimea</title>
    </head>

    <body>
        <div class="wrapper">

            <div class="header">
                <div class="content">
                    <a href="/"><div class="logo polaroid"></div><div style="clear: left;"></div></a>
                </div>
                <div class="img"></div>
            </div>
            <div class="top">
                <div class="topContainer">
                    <div class="menu">
                        <a class="active" href="/">Главная</a>
                        <a class="active" href="/events">Новости</a>
                        <a class="active" href="/sections">Разделы</a>
                        <a class="active" href="#">Контакты</a>
                    </div>
                </div>  
            </div>

            <div class="content">
                <div class="left-sb">
                    <h2>Последние события</h2>

                    <?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['EventsCollumn']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
                        <div class="row beautiful_border">
                            <a class="title" href="/events/show/event=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['id']);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['title']);?>
</a>
                            <h5><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['date']);?>
</h5>
                            <p>
                                <?php echo $_smarty_tpl->tpl_vars['event']->value['description'];?>

                            </p>
                            <a class="more" href="/events/show/event=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['event']->value['id']);?>
">Подробнее...</a>
                        </div>
                    <?php } ?>
                    <a href="/events" class="show-all">Смотреть все</a>
                </div>

                <div class="right-sb">
                    <h2>Разделы</h2>
                    <a href="/sections/show/section=Microsoft">
                        <img class="beautiful_border" src="/Public/Images/l_company_microsoft.png" title="microsot"/>
                    </a>
                    <a href="/sections/show/section=Cisco">
                        <img class="beautiful_border" src="/Public/Images/cisco-logo.png" title="Cisco"/>
                    </a>
                    <a href="/sections/show/section=D-Link">
                        <img class="beautiful_border" src="/Public/Images/D-link.jpeg" title="D-Link"/>
                    </a>
                </div>

                <div class="center-sb">
                    <?php echo $_smarty_tpl->tpl_vars['view']->value;?>


                </div>
                <div style="clear: both;"></div>
            </div>
            <div class="footer">
                <br>
                <span>IT Crimea, 2013</span>
            </div>
        </div>	
    </body>
</html><?php }} ?>