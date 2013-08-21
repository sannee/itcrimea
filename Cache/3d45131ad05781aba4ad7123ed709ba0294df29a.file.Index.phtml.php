<?php /* Smarty version Smarty-3.1.8, created on 2013-07-09 21:30:16
         compiled from "../Views\Home\Index.phtml" */ ?>
<?php /*%%SmartyHeaderCode:2529551dc48a81f3b44-55479146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d45131ad05781aba4ad7123ed709ba0294df29a' => 
    array (
      0 => '../Views\\Home\\Index.phtml',
      1 => 1368478246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2529551dc48a81f3b44-55479146',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51dc48a8228831_50962454',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51dc48a8228831_50962454')) {function content_51dc48a8228831_50962454($_smarty_tpl) {?><<?php ?>?php
$size = sizeof($this->row);
for ($i = 0; $i < $size; $i++) {
    echo '<h2>' . $this->row[$i]['title'] . '</h2>';
    echo '<p>'.$this->row[$i]['description'] . '</p>';
    ?<?php ?>>
    <a  class="more" href ="<<?php ?>?php echo $this->category[$i]['name'] . '/' . $this->row[$i]['title_eng']?<?php ?>> " > Подробнее...</a>
  
        <<?php ?>?php echo '<br><br>';
    }
?<?php ?>><?php }} ?>