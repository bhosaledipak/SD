<?php
	include 'DBConnector.php';
	class RequirementDAO{
		private $rs;
		
		public function addRequirements($t,$k, $c,$p){
			$dbcon = new DBConnector();
			$dbcon->getConnetion();
			$sql = "insert into requirements (type,keyword,category,priority,status)values('$t','$k','$c','$p','No')";
			$this->rs = mysql_query($sql);
		}
		public function getSearch($t,$k, $c,$p){
			$dbcon = new DBConnector();
			$dbcon->getConnetion();
			$sql = "select * from requirements, provider p where type = '$t' and keyword = '$k' and category = '$c' and priority = '$p' and pid = p.id";
			$this->rs = mysql_query($sql);
		}
		public function getAllReq() {
			$dbcon = new DBConnector();
			$dbcon->getConnetion();
			$sql = "select * from requirements where status='No'";
			$this->rs = mysql_query($sql);
		}
		public function fulFillReq($id, $pid) {
			$dbcon = new DBConnector();
			$dbcon->getConnetion();
			$sql = "update requirements set status='Yes', pid = '$pid' where id = '$id'";
			$this->rs = mysql_query($sql);
		}		
		public function getResult(){
			return $this->rs;
		}
	}
?>