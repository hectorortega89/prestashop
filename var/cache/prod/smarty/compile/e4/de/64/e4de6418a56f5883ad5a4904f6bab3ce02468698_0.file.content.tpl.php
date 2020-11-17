<?php
/* Smarty version 3.1.33, created on 2020-11-09 20:38:44
  from 'C:\xampp\htdocs\prestashop\adminPrestashop\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fa9ef2444a6f1_14457149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4de6418a56f5883ad5a4904f6bab3ce02468698' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\adminPrestashop\\themes\\new-theme\\template\\content.tpl',
      1 => 1604544386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa9ef2444a6f1_14457149 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
