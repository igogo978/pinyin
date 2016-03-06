<?php
exit;
/*引入學務系統設定檔*/
include "../../include/config.php";
include_once "../../include/sfs_case_PLlib.php";
if (empty($_SESSION['session_tea_sn'])){
	print "系統發生錯誤";
	exit;
}else {
//print_r($_POST);

	$stud_eng_names = $_POST ;
	//$access_log = "access_log";
	//$file = new SplFileObject($access_log, "a");
	foreach($stud_eng_names as $id => $name){
		//$sql = "UPDATE stud_base SET stud_name_eng='$name' WHERE stud_id ='$id'";
		$sql = "UPDATE stud_base SET stud_name_eng=? WHERE stud_id=?";
		$rs=$CONN->Execute($sql,array($name,$id));
	//	$file->fwrite("$id:$name\n");
		if (!$rs) {	print "儲存失敗"; exit; }
	}
		if ($rs) {	print "資料成功儲存了 ^_^ "; }
}
?>

