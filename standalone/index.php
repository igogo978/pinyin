<?php
require_once "config.php";
$cwd_dir =  dirname(__FILE__) ;
if (!defined('PDO::ATTR_DRIVER_NAME')) {
$warn_msg = '注意: PHP需支援PDO才能正常執行';
}
if (in_array('sqlite',PDO::getAvailableDrivers())!=1){
	$warn_msg = '注意: PHP需支援SQLITE才能正常執行';
}

/*
if (!is_writable("$cwd_dir/db/ph.sqlite")){
	$warn_msg =  "資料庫不能寫入,將無法記錄每次選擇多音字的權重,但系統仍能正常操作";
}
*/
?>

<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>姓名譯音轉換</title>
<!-- InstanceEndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">

table.formdata {
  border: 1px solid #5F6F7E;
  border-collapse:collapse ;
  width:200px;
}

table.formdata tr {
  border: 1px solid #5F6F7E;
  background-color:#E2E2E2;
  color:#000000 ;
  text-align:left;
  font-weight:normal;
  padding:2px 4px 2px 4px ;
  margin:0;
}
caption{
  padding-bottom:0.5cm;
  text-decoration:underline;
  font-size:150%
}

#columns, #top{
 width: 100%;
 padding: 10px;
 margin: 0px auto;
}

#top {
  padding: 0px;
}

span.groove {
  display: inline;
  width: 100%;
  height:250px;
  border: 1px solid #5F6F79;
  float: right;
  border-style:dashed;
  border-width:1px;
  border-color: #8f8f8f;
  border-radius: 9px;
}

#diva{
	color: #333;
	margin: 0px 5px 5px 0px;
	padding: 10px;
	width: 45%;
	float: left;
}

#divb{
	position:relative;
	top:10px;
	float: left;
	color: #333;
	margin: 20px 0px 0px 0px;
	padding: 10px;
	width: 20%;
	display: inline;
}
div#dialog {
	background: #FDFCDC;
	display:none;
}

</style>

<script type='text/javascript' src='js/jquery-1.4.2.js'></script>

<link rel="stylesheet" href="js/jquery-ui.css" />
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-ui.js"></script>

<script type='text/javascript'>

$(function() {
  $("textarea").focus(function(event) {

		$(function() {
			$( "#dialog" ).dialog({ position: [700,70] });
		});
	
    // Erase text from inside textarea
    $(this).text("");
    // Disable text erase
    $(this).unbind(event);
  });
});

if(!String.prototype.trim) {  
  String.prototype.trim = function () {  
    return this.replace(/^\s+|\s+$/g,'');  
  };  
}

 function check_field(){
	var str = document.getElementById("field").value ;
	if(str.trim() == ''){
		alert("輸入內容不可為空白 ");
		return false;
	}
	if(str.match(/[A-z0-9\?\!\.\-+`\!\@#$\%\^\&\(\)_\\\'\;\}\{\>\<]/)){
		alert("請注意,若輸入內容包含非中文字,可能會產生不可預期錯誤 ");
		return false;
	}
 }


</script>
</head>
<body>
<div class="ui-dialog-titlebar" id="dialog" title="輸入格式">
姓名一<br/>
姓名二<br/>
姓名三<br/>
</div>

<div id="columns">
 <div id="top">
<div id="divb">
</div>
  <div id="diva">

<table class="formdata" >
  <caption>姓名譯音轉換系統</caption>
  <tr>
		<td>
		<Form id="form1" method="POST" action="sys/pinyin.module.php"  onsubmit="return check_field()">
<textarea id="field" name="raw_data" rows="12" cols="50" >
<?php
if (empty($warn_msg)){
$msg = "一次可譯音 {$limit_name_rows} 筆中文名字,請按以下格式輸入
區長郝
杜子騰
余仁傑
吳銘仁";
print $msg;
}else{
	print $warn_msg;
}
?>
</textarea>    
		</td>
	</tr>
<tr>
	<td>
		<p>
			<img style="border: 1px solid #000; margin-right: 15px" img id="captcha" src="./captcha/securimage_show.php" alt="CAPTCHA Image" align="left"/>
		</p>
		<p>
			<strong>需輸入驗証碼*:</strong>(長度為<?php print $captcha_code_length;?>)</strong><br />
			<input type="text" name="captcha_code" size="12" maxlength="8" />
			<a href="#" onclick="document.getElementById('captcha').src = './captcha/securimage_show.php?' + Math.random(); return false">[重取驗証碼]</a>
			<input type="submit"  class="boto" name="comentari" value="送出"/>
		</p>
	</td>
</tr>
<tr>
<td>
<p>
	Copyright &copy; 2013 <br/>
	Designed by 新北市:mingtsung 臺中市:igogo,tuheng.
</br>
</p>

</td>
</tr>
</Form>
</table>
</div>

<div id="divb">
</div>

</div>


</body>
