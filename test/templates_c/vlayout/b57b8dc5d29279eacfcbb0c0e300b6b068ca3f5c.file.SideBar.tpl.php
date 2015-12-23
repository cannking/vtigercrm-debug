<?php /* Smarty version Smarty-3.1.7, created on 2015-12-17 10:41:43
         compiled from "D:\wamp\www\vtigercrm-debug\includes\runtime/../../layouts/vlayout\modules\Vtiger\SideBar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25257567291675a5e09-25939229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b57b8dc5d29279eacfcbb0c0e300b6b068ca3f5c' => 
    array (
      0 => 'D:\\wamp\\www\\vtigercrm-debug\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\SideBar.tpl',
      1 => 1373768345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25257567291675a5e09-25939229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_567291677409e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567291677409e')) {function content_567291677409e($_smarty_tpl) {?>
<div class="sideBarContents"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBarLinks.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="clearfix"></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBarWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>