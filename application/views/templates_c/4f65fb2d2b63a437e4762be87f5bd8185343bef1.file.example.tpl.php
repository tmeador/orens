<?php /* Smarty version Smarty-3.1.7, created on 2012-03-16 15:14:44
         compiled from "application/third_party/Smarty/templates/example.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9566514234f63bb54d83a73-06405837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f65fb2d2b63a437e4762be87f5bd8185343bef1' => 
    array (
      0 => 'application/third_party/Smarty/templates/example.tpl',
      1 => 1331936079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9566514234f63bb54d83a73-06405837',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bold' => 0,
    'title' => 0,
    'error' => 0,
    'message' => 0,
    'base_url' => 0,
    'SCRIPT_NAME' => 0,
    'ip_address' => 0,
    'Name' => 0,
    'FirstName' => 0,
    'LastName' => 0,
    'contacts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f63bb550633d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f63bb550633d')) {function content_4f63bb550633d($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/html/api.thesecretlanguage.com/application/third_party/Smarty/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/api.thesecretlanguage.com/application/third_party/Smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_html_select_date')) include '/var/www/html/api.thesecretlanguage.com/application/third_party/Smarty/plugins/function.html_select_date.php';
if (!is_callable('smarty_function_html_select_time')) include '/var/www/html/api.thesecretlanguage.com/application/third_party/Smarty/plugins/function.html_select_time.php';
if (!is_callable('smarty_function_html_options')) include '/var/www/html/api.thesecretlanguage.com/application/third_party/Smarty/plugins/function.html_options.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"Example Smarty Page",'name'=>($_smarty_tpl->tpl_vars['Name']->value)), 0);?>


<h1>
<?php if ($_smarty_tpl->tpl_vars['bold']->value){?><b><?php }?>

Title: <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['title']->value);?>

<?php if ($_smarty_tpl->tpl_vars['bold']->value){?></b><?php }?>
</h1>

<?php if ($_smarty_tpl->tpl_vars['error']->value!=''){?><p class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p><?php }?>
<?php if ($_smarty_tpl->tpl_vars['message']->value!=''){?><p class="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p><?php }?>


<p>The configuration value of base_url is <em><?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
</em></p>

<p>The current date and time is <em><?php echo smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S");?>
</em></p>

<p>The value of global assigned variable $SCRIPT_NAME is <em><?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
</em></p>

<p>The value of server environment variable SERVER_NAME is <em><?php echo $_SERVER['SERVER_NAME'];?>
</em></p>

<p>The value of your IP address is: <em><?php echo $_smarty_tpl->tpl_vars['ip_address']->value;?>
</em></p>

<p>The value of {$Name} is <em><?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</em></p>

<p>The value of {$Name|upper} is <em><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['Name']->value, 'UTF-8');?>
</em></p>

<h2>An example of a section loop:</h2>
<ul>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['outer'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['name'] = 'outer';
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['FirstName']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['total']);
?>
<?php if ((1 & $_smarty_tpl->getVariable('smarty')->value['section']['outer']['index'] / 2)){?>
	<li><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['outer']['rownum'];?>
 . <?php echo $_smarty_tpl->tpl_vars['FirstName']->value[$_smarty_tpl->getVariable('smarty')->value['section']['outer']['index']];?>
 <?php echo $_smarty_tpl->tpl_vars['LastName']->value[$_smarty_tpl->getVariable('smarty')->value['section']['outer']['index']];?>
</li>
<?php }else{ ?>
	<li><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['outer']['rownum'];?>
 * <?php echo $_smarty_tpl->tpl_vars['FirstName']->value[$_smarty_tpl->getVariable('smarty')->value['section']['outer']['index']];?>
 <?php echo $_smarty_tpl->tpl_vars['LastName']->value[$_smarty_tpl->getVariable('smarty')->value['section']['outer']['index']];?>
</li>
<?php }?>
<?php endfor; else: ?>
	<li>none</li>
<?php endif; ?>
</ul>

<h2>An example of section looped key values:</h2>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['name'] = 'sec1';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['contacts']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total']);
?></li>
<ul>
	<li>phone: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['phone'];?>
</li>
	<li>fax: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['fax'];?>
</li>
	<li>cell: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['cell'];?>
</li>
</ul>
<?php endfor; endif; ?>

<h2>An example testing strip tags:</h2>
<table border=0><tr><td><a HREF="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
"><font color="red">This is a  test     </font></a></td></tr></table>


<h2>An example of the html_select_date function:</h2>

<form>
<?php echo smarty_function_html_select_date(array('start_year'=>1998,'end_year'=>2010),$_smarty_tpl);?>

</form>

<h2>An example of the html_select_time function:</h2>

<form>
<?php echo smarty_function_html_select_time(array('use_24_hours'=>false),$_smarty_tpl);?>

</form>

<h2>An example using form_validation:</h2>



<form action="#" method="post">
<fieldset>
	<label for="username">username:</label>
	<input type="text" name="username" id="username" value="" /><br />
	

	<label for="password">password:</label>

	<input type="password" name="password" id="password" value="" /><br />
	

	<label for="passconf">:</label>
	<input type="password" name="passconf" id="passconf" value="" /><br />
	

	<label for="email">:</label>
	<input type="text" name="email" id="email" value="" /><br />
	

	
	<label for="state">:</label>
	<select name='state'>
	<?php echo smarty_function_html_options(array('values'=>($_smarty_tpl->tpl_vars['state_values']->value),'output'=>($_smarty_tpl->tpl_vars['state_output']->value),'selected'=>($_smarty_tpl->tpl_vars['selected_state']->value)),$_smarty_tpl);?>

	</select><br />
	

	<input type="submit" name="action" value="submit" />
</form>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>