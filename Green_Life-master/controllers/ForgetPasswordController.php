<?php
$phn="";
$err_phn="";
if(isset($_POST['btn_submit'])){
	if(empty($_POST['phn'])){
		$err_phn="insert phone no";
	}
    elseif (!is_numeric($_POST['phn'])) {
    	$err_phn="invalid";
    }
	else{
		$phn=htmlspecialchars($_POST['phn']);
	}
}

?>