<?php /* Smarty version Smarty-3.0.4, created on 2016-02-20 04:59:44
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/modx/modx-2.4.2-pl/setup/templates/install.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101853920756c7e4b01be085-90924030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fb23df6d68a865c895660bae0b898aafc71d54c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/modx/modx-2.4.2-pl/setup/templates/install.tpl',
      1 => 1444115180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101853920756c7e4b01be085-90924030',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script type="text/javascript" src="assets/js/sections/install.js"></script>
<form id="install" action="?action=install" method="post">
<h2><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['install_summary']) ? $_smarty_tpl->getVariable('_lang')->value['install_summary'] : null);?>
</h2>
<?php if ($_smarty_tpl->getVariable('failed')->value){?>
<p><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['errors_occurred']) ? $_smarty_tpl->getVariable('_lang')->value['errors_occurred'] : null);?>
</p>
<?php }else{ ?>
<p>
    <?php echo (isset($_smarty_tpl->getVariable('_lang')->value['install_success']) ? $_smarty_tpl->getVariable('_lang')->value['install_success'] : null);?>

    <br />(<a style="font-size: .9em" href="#continuebtn"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['skip_to_bottom']) ? $_smarty_tpl->getVariable('_lang')->value['skip_to_bottom'] : null);?>
</a>)
    <br /><br />
    <a href="javascript:void(0);" class="modx-toggle-success"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['toggle_success']) ? $_smarty_tpl->getVariable('_lang')->value['toggle_success'] : null);?>
</a> | 
    <a href="javascript:void(0);" class="modx-toggle-warning"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['toggle_warnings']) ? $_smarty_tpl->getVariable('_lang')->value['toggle_warnings'] : null);?>
</a>
    
</p>
<?php }?>
<ul class="checklist">
<?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('results')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value){
?>
<li class="<?php echo (isset($_smarty_tpl->tpl_vars['result']->value['class']) ? $_smarty_tpl->tpl_vars['result']->value['class'] : null);?>
 finalsuccess" <?php if (!$_smarty_tpl->getVariable('failed')->value){?>style="display: none;"<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['result']->value['msg']) ? $_smarty_tpl->tpl_vars['result']->value['msg'] : null);?>
</li>
<?php }} ?>
</ul>

<br />

<a id="continuebtn"></a>

<div class="setup_navbar">
<?php if ($_smarty_tpl->getVariable('failed')->value){?>
    <button type="button" id="modx-next" onclick="MODx.go('install');"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['retry']) ? $_smarty_tpl->getVariable('_lang')->value['retry'] : null);?>
</button>
    <button type="button" id="modx-back" onclick="MODx.go('summary');"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['back']) ? $_smarty_tpl->getVariable('_lang')->value['back'] : null);?>
</button>
<?php }else{ ?>
    <input type="submit" id="modx-next" name="proceed" value="<?php echo (isset($_smarty_tpl->getVariable('_lang')->value['next']) ? $_smarty_tpl->getVariable('_lang')->value['next'] : null);?>
" autofocus="autofocus" />
<?php }?>
</div>
</form>