<?php
	class DBConnector{
		private $db_conn;  
		function getConnetion(){
			$db_conn = mysql_connect('chatbuff.com:3306', 'sdroot', 'sdroot');
			//$db_conn = mysql_connect('localhost', 'root', '');
			//mysql_select_db('gcm', $db_conn);
			if (!$db_conn) {
				die('Could not connect: ' . mysql_error());
			}
			mysql_select_db('sd', $db_conn);
		}
		function  closeConnection(){
			mysql_close($db_conn);
		}
	}
?>