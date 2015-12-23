<?php /* Smarty version Smarty-3.1.7, created on 2015-12-17 03:51:43
         compiled from "D:\wamp\www\vtigercrm-debug\includes\runtime/../../layouts/vlayout\modules\Potentials\dashboards\TopPotentials.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1535672314f6ff931-71076160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3378fba1437774e43e2bfc150f2085147473916' => 
    array (
      0 => 'D:\\wamp\\www\\vtigercrm-debug\\includes\\runtime/../../layouts/vlayout\\modules\\Potentials\\dashboards\\TopPotentials.tpl',
      1 => 1373768345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1535672314f6ff931-71076160',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5672314f754e5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5672314f754e5')) {function content_5672314f754e5($_smarty_tpl) {?>

<div class="dashboardWidgetHeader">
	<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/WidgetHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div class="dashboardWidgetContent">
	<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/TopPotentialsContents.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div><?php }} ?>