<?php
/* Smarty version 3.1.33, created on 2020-11-09 20:38:51
  from 'C:\xampp\htdocs\prestashop\adminPrestashop\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fa9ef2bd25b12_99662854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83963e6bd5a2bb65e0c9bcf2fd979fbbdabd1e89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\adminPrestashop\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1604544386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa9ef2bd25b12_99662854 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
