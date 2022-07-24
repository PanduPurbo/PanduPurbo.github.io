<?php
	//=========================================================================
	/*
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
     $db = "db_pelpeng";
     // create a connection between PHP and MySQL
     $conn = mysql_connect($SERVER_DB, $USERNAME, $PASSWORD)
                or die("Check servername, username and password!");
	 
	 mysql_select_db($db, $conn) 
		or die ("Invalid database name");
	 */
	//=========================================================================

	// set a global variable need to access MS SQL
    // Server Name
     $SERVER_NAME = "YOIMEN\I_SQLSERVER"; //name server dan instance ny
	 // database username
     $USERNAME = "sa";
     // username password
     $PASSWORD = "arsyah";
     // database name
     $db = "db_pelpeng";
     // create a connection between PHP and MS SQL
     $conn = mssql_connect($SERVER_NAME, $USERNAME, $PASSWORD)
                or die("Check servername, username and password!");
	 
	 mssql_select_db($db, $conn)
		or die ("Invalid database name");


	/*function dynamic_header()
	{
		header("Expires: Thu, 12 April 2025 05:00:00 GMT");
		header("Last-Moidified: ".
				gmdate("D, d M Y H:i:s"));
		if($SERVER_PROTOCOL == "HTTP/1,0")
			header("Pragma: no-cache");
		else
			header("Cache-control: no-cache, must-revalidate");
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



    function get_id($jenis,$prop,$tahun){
    $string_prop  =$prop;
    $string_jenis =$jenis;
    $string_tahun =$tahun;

     //get noakhir
     $cr_no = "select max(no_count) from tbl_count where jenis_id='".$jenis."'and tahun='".$tahun."'and prop ='".$prop."'";
     $hasil_cr = mssql_query($cr_no);
     $no=mssql_fetch_array($hasil_cr);
     $nony= $no[0];


      if (is_null($nony)){
       $nony=1;
      }
      else{
       $nony = $nony + 1;
      }
      if (strlen($string_prop)==1){
        $string_prop = "0".$string_prop;
      }
      if (strlen($string_jenis)==1){
        $string_jenis = "0".$string_jenis;
      }
      if (strlen($string_tahun)==1){
        $string_tahun = "0".$string_tahun;
      }
      $no_id = sprintf("%04d",$nony);
      $id_daftar = $string_jenis. $string_tahun.$string_prop.$no_id;
      return($id_daftar);
    }


function tgl_indo($tgl){
      $tanggal = substr($tgl,4,2);
      $bulan    = getBulan(substr($tgl,0,3));
      $tahun    = substr($tgl,7,4);
      return $tanggal."-".$bulan. "-".$tahun;
    }
function getBulan($bln){
      switch ($bln){
        case "Jan":
          return "Januari";
          break;
        case "Feb":
          return "Februari";
          break;
        case "Mar":
          return "Maret";
          break;
        case "Apr":
          return "April";
          break;
        case "Mai":
          return "Mei";
          break;
        case "Jun":
          return "Juni";
          break;
        case "Jul":
          return "Juli";
          break;
        case "Aug":
          return "Agustus";
          break;
        case "Sep":
          return "September";
          break;
        case "Oct":
          return "Okt";
          break;
        case "Nov":
          return "November";
          break;
        case "Des":
          return "Desember";
          break;
    }
}




?>
