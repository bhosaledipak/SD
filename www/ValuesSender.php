<?php
	$attr = $_REQUEST['attr'];
	include 'EmployeeDAO.php';
	$empl = new EmployeeDAO();
	$empl->getAllAttr($attr);
	$rs = $empl->getResult();
	$flag=true;
	while($row = mysql_fetch_array($rs,MYSQL_BOTH)){
		$flag=false;
		print '<option>';
		print $row[0];
		print '</option>';
	}
	if(flag){
		print "";
	}
?>