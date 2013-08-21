<?php /* Smarty version Smarty-3.1.8, created on 2013-07-09 21:55:26
         compiled from "../Views\layout.phtml" */ ?>
<?php /*%%SmartyHeaderCode:2053551daceb2848b80-96640782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e08ea04141d831f7ee039cc1bbc572019a305ca' => 
    array (
      0 => '../Views\\layout.phtml',
      1 => 1373392518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2053551daceb2848b80-96640782',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51daceb29a3039_77991010',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51daceb29a3039_77991010')) {function content_51daceb29a3039_77991010($_smarty_tpl) {?>﻿<!DOCTYPE html>

<html>
    
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="../Public/css/style.css" type="text/css"/>
        <title>IT Crimea</title>
    </head>
    
    <body>

        <div class = "wrapper">
            <div class = "top">
                <div class = "menu">
                    <a class = "active" href = "/">Главная</a>
                    <a class = "active" href = "/news">Новости</a>
                    <a class = "active" href = "/categories">Разделы</a>
                    <a class = "active" href = "/contacts">Контакты</a>
                </div>
            </div>

            <div class = "header">
                <a href = "/"><div class = "logo"></div></a>
                <div class = "img"></div>
            </div>
<?php echo $_smarty_tpl->tpl_vars['view']->value;?>

            <div class = "content">
                <div class = "left-sb">
                    <h2>Последние события</h2>

                    <div class = "row">
                        <a class = "title" href=#>title</a>
                        <h5>Время</h5>
                        <p>
                            Описание
                        </p>
                        <a class = "more" href =#>Подробнее...</a>
                    </div>

                    <a href = "/news" class = "show-all">Смотреть все</a>
                </div>
                <div class = "center-sb">
                </div>
                <div class="right-sb">
                    <h2>Разделы</h2>

                    <a href="/microsoft">
                        <img src="../Public/Images/l_company_microsoft.png" title="microsot"/>
                    </a>

                    <a href="#">
                        <img src="../Public/Images/l_company_microsoft.png" title="microsot"/>
                    </a>

                    <a href="#">
                        <img src="../Public/Images/l_company_microsoft.png" title="microsot"/>
                    </a>

                    <a href="#">
                        <img src="../Public/Images/l_company_microsoft.png" title="microsot"/>
                    </a>

                    <a href="#">
                        <img src="../Public/Images/l_company_microsoft.png" title="microsot"/>
                    </a>
                </div>
            </div>
            <div class="footer"></div>
        </div>	
    </body>
</html><?php }} ?>