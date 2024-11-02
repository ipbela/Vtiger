<?php
/* Smarty version 4.5.2, created on 2024-10-18 22:44:12
  from 'C:\xampp\htdocs\VCRM\layouts\v7\modules\Vtiger\uitypes\CurrencyList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6712e4bc26d4f5_19207081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e9e7d9f635aeba8f68165163dd4acc9ba46be75' => 
    array (
      0 => 'C:\\xampp\\htdocs\\VCRM\\layouts\\v7\\modules\\Vtiger\\uitypes\\CurrencyList.tpl',
      1 => 1715748848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6712e4bc26d4f5_19207081 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('CURRENCY_LIST', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getCurrencyList());?><select class="select2 inputElement" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CURRENCY_LIST']->value, 'CURRENCY_NAME', false, 'CURRENCY_ID');
$_smarty_tpl->tpl_vars['CURRENCY_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CURRENCY_ID']->value => $_smarty_tpl->tpl_vars['CURRENCY_NAME']->value) {
$_smarty_tpl->tpl_vars['CURRENCY_NAME']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_ID']->value;?>
" data-picklistvalue= '<?php echo $_smarty_tpl->tpl_vars['CURRENCY_ID']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue') == $_smarty_tpl->tpl_vars['CURRENCY_ID']->value) {?> selected <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['CURRENCY_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><?php }
}
