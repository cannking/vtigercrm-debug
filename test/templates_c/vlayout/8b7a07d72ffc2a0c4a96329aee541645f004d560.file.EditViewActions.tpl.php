<?php /* Smarty version Smarty-3.1.7, created on 2015-12-14 11:07:52
         compiled from "D:\wamp\www\vtigercrm\includes\runtime/../../layouts/vlayout\modules\Vtiger\EditViewActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27051566ea308bbe789-51366589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b7a07d72ffc2a0c4a96329aee541645f004d560' => 
    array (
      0 => 'D:\\wamp\\www\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\EditViewActions.tpl',
      1 => 1398442051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27051566ea308bbe789-51366589',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_566ea308bd719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566ea308bd719')) {function content_566ea308bd719($_smarty_tpl) {?>

<div class="row-fluid"><div class="pull-right"><button class="btn btn-success" type="submit"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><a class="cancelLink" type="reset" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><div class="clearfix"></div></div><br></form></div><?php }} ?>