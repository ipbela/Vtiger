<?php
/* Smarty version 4.5.2, created on 2024-09-17 22:28:34
  from 'C:\xampp\htdocs\VCRM\layouts\v7\modules\Install\InstallPreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_66e9f4822604e9_27334712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94a8156d1f7b3ad4e7157e4aab26e67dd246da04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\VCRM\\layouts\\v7\\modules\\Install\\InstallPreProcess.tpl',
      1 => 1715748848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e9f4822604e9_27334712 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input type="hidden" id="module" value="Install" />
<input type="hidden" id="view" value="Index" />
<div class="container-fluid page-container">
	<div class="row">
		<div class="col-sm-6">
			<div class="logo">
				<img src="<?php echo vimage_path('logo.png');?>
"/>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="head pull-right">
				<h3><?php echo vtranslate('LBL_INSTALLATION_WIZARD','Install');?>
</h3>
			</div>
		</div>
	</div>
<?php }
}
