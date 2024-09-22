<?php
/* Smarty version 4.5.2, created on 2024-09-17 22:06:48
  from 'C:\xampp\htdocs\VCRM\layouts\v7\modules\Vtiger\ListViewQuickPreviewHeaderTitle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_66e9fd78268ba4_59292547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '106f58d5e3ae5ca8d02180f37ba9c15fe0b81769' => 
    array (
      0 => 'C:\\xampp\\htdocs\\VCRM\\layouts\\v7\\modules\\Vtiger\\ListViewQuickPreviewHeaderTitle.tpl',
      1 => 1715748848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e9fd78268ba4_59292547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('QUICK_PREVIEW', "true");
$_smarty_tpl->_subTemplateRender(vtemplate_path("DetailViewHeaderTitle.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('MODULE_MODEL'=>$_smarty_tpl->tpl_vars['MODULE_MODEL']->value,'RECORD'=>$_smarty_tpl->tpl_vars['RECORD']->value), 0, true);
}
}
