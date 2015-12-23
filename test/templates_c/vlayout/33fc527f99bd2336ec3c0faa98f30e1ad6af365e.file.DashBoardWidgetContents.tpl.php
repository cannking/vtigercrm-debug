<?php /* Smarty version Smarty-3.1.7, created on 2015-12-15 05:16:17
         compiled from "D:\wamp\www\vtigercrm\includes\runtime/../../layouts/vlayout\modules\Vtiger\dashboards\DashBoardWidgetContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6848566fa221e18fd3-17805440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33fc527f99bd2336ec3c0faa98f30e1ad6af365e' => 
    array (
      0 => 'D:\\wamp\\www\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\dashboards\\DashBoardWidgetContents.tpl',
      1 => 1432539165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6848566fa221e18fd3-17805440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_566fa221ea734',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566fa221ea734')) {function content_566fa221ea734($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['DATA']->value)>0){?><input class="widgetData" type=hidden value='<?php echo Vtiger_Util_Helper::toSafeHTML(ZEND_JSON::encode($_smarty_tpl->tpl_vars['DATA']->value));?>
' /><div class="widgetChartContainer" style="height:250px;width:85%"></div><?php }else{ ?><span class="noDataMsg"><?php echo vtranslate('LBL_EQ_ZERO');?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php echo vtranslate('LBL_MATCHED_THIS_CRITERIA');?>
</span><?php }?><?php }} ?>