<?php
	//=========================================================================
	
	// set a global variable need to access MySQL
    // Server Name
     $SERVER_NAME = "localhost";
	//Port number
	 $PORT_NUMBER = "80";
	// MySQL Server Name
     $SERVER_DB = "localhost";
     // database username
     $USERNAME = "root";
     // username password
     $PASSWORD = "";
     // database name
     $db = "M_Golf";
     // create a connection between PHP and MySQL
     $conn = mysqli_connect($SERVER_DB, $USERNAME, $PASSWORD)
                or die("Check servername, username and password!");
	 
	 mysqli_select_db($conn,$db) 
		or die ("Invalid database name");
	 
	//=========================================================================
/*
	// set a global variable need to access MS SQL
    // Server Name
     $SERVER_NAMEDB = "localhost"; //name server dan instance ny
	 $SERVER_NAME = "localhost"; //name server dan instance ny
	 // database username
     $USERNAME = "sa";
     // username password
     $PASSWORD = "kosong";
     // database name
     $db = "Hubud";
     // create a connection between PHP and MS SQL
     $conn = mssql_connect($SERVER_NAMEDB, $USERNAME, $PASSWORD)
                or die("Check servername, username and password!");
	 
	 mssql_select_db($db, $conn)
		or die ("Invalid database name");
    */
//========================================================

	/*function dynamic_header()
	{
		header("Expires: Thu, 12 April 2023 05:00:00 GMT");
		header("Last-Moidified: ".
				gmdate("D, d M Y H:i:s"));
		if($SERVER_PROTOCOL == "HTTP/1,0")
			header("Pragma: no-cache");
		else
			header("Cache-control: no-cache, must-revalidate");
	}*/

	/*function createRandomPassword() 
	{

		$chars = "abcdefghijkmnopqrstuvwxyz023456789";
		srand((double)microtime()*1000000);
		$i = 0;
		$pass = '' ;
		while ($i <= 9) {
			$num = rand() % 33;
			$tmp = substr($chars, $num, 1);
			$pass = $pass . $tmp;
			$i++;
		}
		return $pass;
	}
	
	function setQuery( $sql, $offset = 0, $limit = 0 ) {
		$this->_sql = $sql;
		$this->_limit = intval( $limit );
		$this->_offset = intval( $offset );
	}
		function getNumRows( $cur=null ) {
		return mssql_num_rows( $cur ? $cur : $this->_cursor );
	}*/


/*	
	function authentication($user, $pass)
	{
		$query ="SELECT password FROM user WHERE username = '$user'";
		$result = mysql_query($query);
		$rows = mysql_fetch_row($result);
		$pass_inDB = $rows[0];

		$enc_pass = md5($pass);
		if($rows[0] == $enc_pass)
			return true;
		else
			return false;
	
	}
	
	function getRole($username)
	{
		$query = "SELECT inv_role, lib_role, xpdr_role FROM user WHERE username = '$username'";
		$result = mysql_query($query);
		$rows = mysql_fetch_row($result);
		return $rows;
		
	}
	
	function isLogin()
	{
		if($_SESSION["login"]=="true")
			return true;
		else 
			return false;		
	}
	
	function isAdministrator()
	{
		if($_SESSION["username"] == "administrator")
			return true;
		else 
			return false;
	}	
	
*/




?>
