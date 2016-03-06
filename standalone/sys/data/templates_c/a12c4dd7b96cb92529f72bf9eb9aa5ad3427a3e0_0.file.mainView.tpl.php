<?php /* Smarty version 3.1.27, created on 2016-03-06 14:37:27
         compiled from "/var/www/163.17.210.131/htdocs/pinyin/sys/templates/mainView.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9600869256dc40a71e9d73_12531626%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a12c4dd7b96cb92529f72bf9eb9aa5ad3427a3e0' => 
    array (
      0 => '/var/www/163.17.210.131/htdocs/pinyin/sys/templates/mainView.tpl',
      1 => 1456895074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9600869256dc40a71e9d73_12531626',
  'variables' => 
  array (
    'my_title' => 0,
    'my_title_version' => 0,
    'pinyin_method_options' => 0,
    'default_pinyin' => 0,
    'class_name' => 0,
    'users_name_data' => 0,
    'id' => 0,
    'uuid' => 0,
    'name' => 0,
    'keep_data' => 0,
    '_post_name_format' => 0,
    'pinyin_selected_values' => 0,
    'py_method' => 0,
    'post_ph_selected_values' => 0,
    'ph_sn' => 0,
    'name_format_options' => 0,
    'eng_name_format' => 0,
    'action_options' => 0,
    'route' => 0,
    'hanzi_multi_ph' => 0,
    'pos' => 0,
    'hanzi' => 0,
    'multi_ph_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56dc40a72c6912_01587233',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56dc40a72c6912_01587233')) {
function content_56dc40a72c6912_01587233 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/var/www/163.17.210.131/htdocs/pinyin/sys/vendor/smarty/smarty/libs/plugins/function.html_options.php';

$_smarty_tpl->properties['nocache_hash'] = '9600869256dc40a71e9d73_12531626';
?>
<!DOCTYPE html>
<html>
<head>


<title>
<?php echo $_smarty_tpl->tpl_vars['my_title']->value;?>

</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<style type="text/css">
	body {
		font-family: "Helvetica Neue", Helvetica, Arial, "微軟正黑體", sans-serif;
	}

	table.table {
		font-size: 18px;
	}

	table.submitdata {
		font-size: 16px;
	}

	table.my_title{
		border-width:3px;
		border-color: #FFFFF3;
		border-radius:5;
	}
	table.my_title td{
		height: 50px;
		vertical-align: bottom;
	}

</style>

<?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-1.9.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  console.log("hello");
<?php echo '</script'; ?>
>

</head>



<body class="container" ng-app>


<table class="my_title" >
	<tr>
		<td>
			<h3><u><?php echo $_smarty_tpl->tpl_vars['my_title']->value;?>
</u></h3>
		</td>
		<td>
			<h5><?php echo $_smarty_tpl->tpl_vars['my_title_version']->value;?>
</h5>
		</td>
	</tr>
</table>

<table class="submitdata" >
<tr>
	<td>
	 <form name='form1' method='post' action=''>
	全部設為:		<?php echo smarty_function_html_options(array('style'=>"background-color:#FDFCDC;",'name'=>'set_all_pinyin_metod','options'=>$_smarty_tpl->tpl_vars['pinyin_method_options']->value,'selected'=>$_smarty_tpl->tpl_vars['default_pinyin']->value,'onchange'=>"this.form.submit()"),$_smarty_tpl);?>


		 <input name="class_name" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['class_name']->value;?>
">
   	         

<?php
$_from = $_smarty_tpl->tpl_vars['users_name_data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['name']->_loop = false;
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
$foreach_name_Sav = $_smarty_tpl->tpl_vars['name'];
?>
		<?php $_smarty_tpl->tpl_vars['uid'] = new Smarty_Variable($_smarty_tpl->tpl_vars['id']->value, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['uuid'] = new Smarty_Variable("users_name_data[".((string)$_smarty_tpl->tpl_vars['uid']->value)."]", null, 0);?>
		<input name="<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
<input name="keep_data[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][number]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['keep_data']->value[$_smarty_tpl->tpl_vars['id']->value]['number'];?>
">
<input name="keep_data[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][exist_eng_name]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['keep_data']->value[$_smarty_tpl->tpl_vars['id']->value]['exist_eng_name'];?>
">

<?php
$_smarty_tpl->tpl_vars['name'] = $foreach_name_Sav;
}
?>

	 </form>
	</td>
	<td>
	<form name='form2' method='post' action=''>
		<input name="set_name_format" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['_post_name_format']->value;?>
">
		<input name="set_all_pinyin_metod" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['default_pinyin']->value;?>
">

<?php
$_from = $_smarty_tpl->tpl_vars['users_name_data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['name']->_loop = false;
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
$foreach_name_Sav = $_smarty_tpl->tpl_vars['name'];
?>
		<?php $_smarty_tpl->tpl_vars['uid'] = new Smarty_Variable($_smarty_tpl->tpl_vars['id']->value, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['uuid'] = new Smarty_Variable("users_name_data[".((string)$_smarty_tpl->tpl_vars['uid']->value)."]", null, 0);?>
		<input name="<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
<?php
$_smarty_tpl->tpl_vars['name'] = $foreach_name_Sav;
}
?>


		<?php
$_from = $_smarty_tpl->tpl_vars['pinyin_selected_values']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['py_method'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['py_method']->_loop = false;
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['py_method']->value) {
$_smarty_tpl->tpl_vars['py_method']->_loop = true;
$foreach_py_method_Sav = $_smarty_tpl->tpl_vars['py_method'];
?>

      
      <?php $_smarty_tpl->tpl_vars['uid'] = new Smarty_Variable($_smarty_tpl->tpl_vars['id']->value, null, 0);?>
      <?php $_smarty_tpl->tpl_vars['uuid'] = new Smarty_Variable("pinyin_select[".((string)$_smarty_tpl->tpl_vars['uid']->value)."]", null, 0);?>
       <input name="<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['py_method']->value;?>
">
<input name="keep_data[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][number]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['keep_data']->value[$_smarty_tpl->tpl_vars['id']->value]['number'];?>
">
<input name="keep_data[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][exist_eng_name]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['keep_data']->value[$_smarty_tpl->tpl_vars['id']->value]['exist_eng_name'];?>
">

        
        <?php if (isset($_smarty_tpl->tpl_vars['post_ph_selected_values']->value[$_smarty_tpl->tpl_vars['id']->value])) {?>
          <?php
$_from = $_smarty_tpl->tpl_vars['post_ph_selected_values']->value[$_smarty_tpl->tpl_vars['id']->value];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ph_sn'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ph_sn']->_loop = false;
$_smarty_tpl->tpl_vars['pos'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['pos']->value => $_smarty_tpl->tpl_vars['ph_sn']->value) {
$_smarty_tpl->tpl_vars['ph_sn']->_loop = true;
$foreach_ph_sn_Sav = $_smarty_tpl->tpl_vars['ph_sn'];
?>
            <?php $_smarty_tpl->tpl_vars['uid'] = new Smarty_Variable($_smarty_tpl->tpl_vars['id']->value, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['uuid'] = new Smarty_Variable("ph_select[".((string)$_smarty_tpl->tpl_vars['uid']->value)."][".((string)$_smarty_tpl->tpl_vars['pos']->value)."]]", null, 0);?>
             <input name="<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ph_sn']->value;?>
">
          <?php
$_smarty_tpl->tpl_vars['ph_sn'] = $foreach_ph_sn_Sav;
}
?>
        <?php }?>

    <?php
$_smarty_tpl->tpl_vars['py_method'] = $foreach_py_method_Sav;
}
?>

		 <input name="class_name" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['class_name']->value;?>
">
   	         
			譯寫格式:
		<?php echo smarty_function_html_options(array('name'=>'set_name_format','options'=>$_smarty_tpl->tpl_vars['name_format_options']->value,'selected'=>$_smarty_tpl->tpl_vars['_post_name_format']->value,'onchange'=>"this.form.submit()"),$_smarty_tpl);?>

</form>
</td>

<td></td>
<td>
	<form name='press_print' method='post' action='' target="_blank" >
		 <input name="class_name" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['class_name']->value;?>
">
		<input name="set_name_format" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['_post_name_format']->value;?>
">
		<input name="set_all_pinyin_metod" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['default_pinyin']->value;?>
">

<?php
$_from = $_smarty_tpl->tpl_vars['users_name_data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['name']->_loop = false;
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
$foreach_name_Sav = $_smarty_tpl->tpl_vars['name'];
?>
		<?php $_smarty_tpl->tpl_vars['uid'] = new Smarty_Variable($_smarty_tpl->tpl_vars['id']->value, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['uuid'] = new Smarty_Variable("users_name_data[".((string)$_smarty_tpl->tpl_vars['uid']->value)."]", null, 0);?>
		<input name="<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
<input name="keep_data[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][number]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['keep_data']->value[$_smarty_tpl->tpl_vars['id']->value]['number'];?>
">
<input name="keep_data[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][exist_eng_name]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['keep_data']->value[$_smarty_tpl->tpl_vars['id']->value]['exist_eng_name'];?>
">
<input name="keep_data[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][new_eng_name]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['eng_name_format']->value[$_smarty_tpl->tpl_vars['id']->value];?>
">
<input name="keep_data[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][user_name]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['users_name_data']->value[$_smarty_tpl->tpl_vars['id']->value];?>
">

	
<?php
$_smarty_tpl->tpl_vars['name'] = $foreach_name_Sav;
}
?>

		<?php
$_from = $_smarty_tpl->tpl_vars['pinyin_selected_values']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['py_method'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['py_method']->_loop = false;
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['py_method']->value) {
$_smarty_tpl->tpl_vars['py_method']->_loop = true;
$foreach_py_method_Sav = $_smarty_tpl->tpl_vars['py_method'];
?>

			
			<?php $_smarty_tpl->tpl_vars['uid'] = new Smarty_Variable($_smarty_tpl->tpl_vars['id']->value, null, 0);?>
			<?php $_smarty_tpl->tpl_vars['uuid'] = new Smarty_Variable("pinyin_select[".((string)$_smarty_tpl->tpl_vars['uid']->value)."]", null, 0);?>
			 <input name="<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['py_method']->value;?>
">

				
				<?php if (isset($_smarty_tpl->tpl_vars['post_ph_selected_values']->value[$_smarty_tpl->tpl_vars['id']->value])) {?>
					<?php
$_from = $_smarty_tpl->tpl_vars['post_ph_selected_values']->value[$_smarty_tpl->tpl_vars['id']->value];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ph_sn'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ph_sn']->_loop = false;
$_smarty_tpl->tpl_vars['pos'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['pos']->value => $_smarty_tpl->tpl_vars['ph_sn']->value) {
$_smarty_tpl->tpl_vars['ph_sn']->_loop = true;
$foreach_ph_sn_Sav = $_smarty_tpl->tpl_vars['ph_sn'];
?>
						<?php $_smarty_tpl->tpl_vars['uid'] = new Smarty_Variable($_smarty_tpl->tpl_vars['id']->value, null, 0);?>
						<?php $_smarty_tpl->tpl_vars['uuid'] = new Smarty_Variable("ph_select[".((string)$_smarty_tpl->tpl_vars['uid']->value)."][".((string)$_smarty_tpl->tpl_vars['pos']->value)."]]", null, 0);?>
						 <input name="<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ph_sn']->value;?>
">
					<?php
$_smarty_tpl->tpl_vars['ph_sn'] = $foreach_ph_sn_Sav;
}
?>
				<?php }?>

		<?php
$_smarty_tpl->tpl_vars['py_method'] = $foreach_py_method_Sav;
}
?>
	<?php echo smarty_function_html_options(array('name'=>'view_selected','options'=>$_smarty_tpl->tpl_vars['action_options']->value,'selected'=>$_smarty_tpl->tpl_vars['route']->value),$_smarty_tpl);?>

		 <input name="class_name" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['class_name']->value;?>
">

	<input type='submit' class="btn-primary" name='submit_print' value='確定執行'>
</form>
</td><td width="1%"></td>
<td>
  <div class='desc'>
	<form id="aform">
	<select id="downloadDoc" size="1" style="background-color:#F8F8FF;">
	<option value="nothing" selected="selected">本系統設計依據</option>
	<option value="./tools/doc/pinyinshouce_7881.pdf">教育部中文譯音使用原則</option>
	<option value="./tools/doc/tc.id4631.pdf">臺中市畢業證書拼音格式</option>
	</select>
	</form>

<?php echo '<script'; ?>
 type='text/javascript'>
	var selectmenu=document.getElementById("downloadDoc")
	selectmenu.onchange=function(){ //run some code when "onchange" event fires
	 var chosenoption=this.options[this.selectedIndex] //this refers to "selectmenu"
	 if (chosenoption.value!="nothing"){
		window.open(chosenoption.value, "", "") //open target site (based on option's value attr) in new window
	 }
}
<?php echo '</script'; ?>
>
</div>
</td>
</tr>

</table>

<table class="table table-hover table-condensed table-striped table-bordered" cellspacing="0" width="100%" >
		<form name='form9' method='post' action='' target="" >
		 <input name="set_all_pinyin_metod" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['default_pinyin']->value;?>
">
		 <input name="set_name_format" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['_post_name_format']->value;?>
">

		 <input name="class_name" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['class_name']->value;?>
">
   	         
		

  <tr class="danger"> 
    <th width="3%">座號</th>
    <th width="5%">學號</th>
    <th class="col-md-1">姓名</th>
		 <th class="col-md-1">拼音方式</th>
		 <th class="col-md-3">多音字</th>
		 <th class="col-md-3">姓名英譯</th>
<?php
$_from = $_smarty_tpl->tpl_vars['users_name_data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['name']->_loop = false;
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
$foreach_name_Sav = $_smarty_tpl->tpl_vars['name'];
?>
	
		<?php $_smarty_tpl->tpl_vars['uid'] = new Smarty_Variable($_smarty_tpl->tpl_vars['id']->value, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['uuid'] = new Smarty_Variable("users_name_data[".((string)$_smarty_tpl->tpl_vars['uid']->value)."]", null, 0);?>
		<input name="<?php echo $_smarty_tpl->tpl_vars['uuid']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
<input name="keep_data[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][number]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['keep_data']->value[$_smarty_tpl->tpl_vars['id']->value]['number'];?>
">
<input name="keep_data[<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
][exist_eng_name]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['keep_data']->value[$_smarty_tpl->tpl_vars['id']->value]['exist_eng_name'];?>
">
	

  <tr>

    <td><?php echo $_smarty_tpl->tpl_vars['keep_data']->value[$_smarty_tpl->tpl_vars['id']->value]['number'];?>
  </td>
    <td>
        <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 
    </td>
    <td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
    <td style="white-space:nowrap">

<?php if ($_smarty_tpl->tpl_vars['route']->value == "mainView") {?>
  		
  <?php $_smarty_tpl->tpl_vars['uid'] = new Smarty_Variable($_smarty_tpl->tpl_vars['id']->value, null, 0);?>
  <?php $_smarty_tpl->tpl_vars['uuid'] = new Smarty_Variable("pinyin_select[".((string)$_smarty_tpl->tpl_vars['uid']->value)."]", null, 0);?>
  <?php echo smarty_function_html_options(array('name'=>((string)$_smarty_tpl->tpl_vars['uuid']->value),'selected'=>$_smarty_tpl->tpl_vars['pinyin_selected_values']->value[$_smarty_tpl->tpl_vars['id']->value],'options'=>$_smarty_tpl->tpl_vars['pinyin_method_options']->value,'onchange'=>"this.form.submit()"),$_smarty_tpl);?>

<?php } else { ?>
  
  <?php echo $_smarty_tpl->tpl_vars['pinyin_method_options']->value[$_smarty_tpl->tpl_vars['pinyin_selected_values']->value[$_smarty_tpl->tpl_vars['id']->value]];?>

<?php }?>
	</td>
	<td>

	
	<?php if (isset($_smarty_tpl->tpl_vars['hanzi_multi_ph']->value[$_smarty_tpl->tpl_vars['id']->value])) {?>
		<?php
$_from = $_smarty_tpl->tpl_vars['hanzi_multi_ph']->value[$_smarty_tpl->tpl_vars['id']->value];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['multi_ph_options'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['multi_ph_options']->_loop = false;
$_smarty_tpl->tpl_vars['pos'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['pos']->value => $_smarty_tpl->tpl_vars['multi_ph_options']->value) {
$_smarty_tpl->tpl_vars['multi_ph_options']->_loop = true;
$foreach_multi_ph_options_Sav = $_smarty_tpl->tpl_vars['multi_ph_options'];
?>
			<?php echo $_smarty_tpl->tpl_vars['hanzi']->value[$_smarty_tpl->tpl_vars['id']->value][$_smarty_tpl->tpl_vars['pos']->value]['chinese'];?>

				<?php $_smarty_tpl->tpl_vars['uid'] = new Smarty_Variable($_smarty_tpl->tpl_vars['id']->value, null, 0);?>
				<?php $_smarty_tpl->tpl_vars['uuid'] = new Smarty_Variable("ph_select[".((string)$_smarty_tpl->tpl_vars['uid']->value)."][".((string)$_smarty_tpl->tpl_vars['pos']->value)."]]", null, 0);?>

				<?php echo smarty_function_html_options(array('name'=>$_smarty_tpl->tpl_vars['uuid']->value,'options'=>$_smarty_tpl->tpl_vars['multi_ph_options']->value,'selected'=>$_smarty_tpl->tpl_vars['post_ph_selected_values']->value[$_smarty_tpl->tpl_vars['id']->value][$_smarty_tpl->tpl_vars['pos']->value],'onchange'=>"this.form.submit()"),$_smarty_tpl);?>

		<?php
$_smarty_tpl->tpl_vars['multi_ph_options'] = $foreach_multi_ph_options_Sav;
}
?>
	<?php }?>


<?php if ($_smarty_tpl->tpl_vars['route']->value != "mainView") {?>
	<?php if (isset($_smarty_tpl->tpl_vars['hanzi_multi_ph']->value[$_smarty_tpl->tpl_vars['id']->value])) {?>
		<?php
$_from = $_smarty_tpl->tpl_vars['hanzi_multi_ph']->value[$_smarty_tpl->tpl_vars['id']->value];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['multi_ph_options'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['multi_ph_options']->_loop = false;
$_smarty_tpl->tpl_vars['pos'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['pos']->value => $_smarty_tpl->tpl_vars['multi_ph_options']->value) {
$_smarty_tpl->tpl_vars['multi_ph_options']->_loop = true;
$foreach_multi_ph_options_Sav = $_smarty_tpl->tpl_vars['multi_ph_options'];
?>
			<span class="multi_ph">
			<?php echo $_smarty_tpl->tpl_vars['hanzi']->value[$_smarty_tpl->tpl_vars['id']->value][$_smarty_tpl->tpl_vars['pos']->value]['chinese'];?>
:
			<?php $_smarty_tpl->tpl_vars['ph_sn'] = new Smarty_Variable($_smarty_tpl->tpl_vars['post_ph_selected_values']->value[$_smarty_tpl->tpl_vars['id']->value][$_smarty_tpl->tpl_vars['pos']->value], null, 0);?>
			<?php echo $_smarty_tpl->tpl_vars['hanzi_multi_ph']->value[$_smarty_tpl->tpl_vars['id']->value][$_smarty_tpl->tpl_vars['pos']->value][$_smarty_tpl->tpl_vars['ph_sn']->value];?>

			</span>
		 <?php
$_smarty_tpl->tpl_vars['multi_ph_options'] = $foreach_multi_ph_options_Sav;
}
?>
  <?php }?>
<?php }?>  
	</td>
  <td>
    
    
    <?php echo $_smarty_tpl->tpl_vars['eng_name_format']->value[$_smarty_tpl->tpl_vars['id']->value];?>

  </td>
</tr>

<?php
$_smarty_tpl->tpl_vars['name'] = $foreach_name_Sav;
}
?>

		</form>
</table>

<br/>
    <div>
	
	
    </div>


</body>
</html>
<?php }
}
?>