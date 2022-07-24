<?PHP
	include("db.inc.php");
	session_start();
	session_unset();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<link rel="shortcut icon" href="../images/spin.gif" type="image/x-icon" >
	<link rel=”stylesheet” href=”css/bootstrap.min.css” />
	<link rel=”stylesheet” href=”js/bootstrap.min.js” />

    <title><?PHP print($_PageTitle)?></title>
</head>
<body>

					<?PHP
						//get variable
					    //$nilai = isset ($array['index_array']) ? $array['index_array']:'';
						$mn_key=isset($_GET['mn_key']);							
						$mn_key1=isset($_GET['mn_key1']);
						$mn_key2=isset($_GET['mn_key2']);
						$mn_file=isset($_GET['mn_file']);
						$mn_lang=isset($_GET['mn_lang']);
						$userid=isset($_SESSION["_LOGIN_ID"]);
						if(isset($mn_key) == false){
							$mn_key = 1;
						}

						if(isset($_SESSION["ROLE"])=="") {
							$_SESSION["ROLE"] = "all" ;							
						}

						if ($mn_lang == "")
							$mn_lang = "ind";

							if ($mn_lang=="eng") {
								$_SESSION["ROLE1"] = $_SESSION["ROLE"]."_english";
							} elseif ($mn_lang=="ind") {
								$_SESSION["ROLE1"] = $_SESSION["ROLE"];
							}

						$role = $_SESSION["ROLE1"];

						$role1 = $_SESSION["ROLE"];
						$role2 = $_SESSION["ROLE"]."_english";

						if ($mn_lang=="eng") {
							echo '<div class="Headere-jpeg"></div>';
						} elseif ($mn_lang=="ind") {
							echo '<div class="Header-jpeg"></div>';
						}
					?>
                    <div class="logo">
						<?PHP
							if ($mn_file == "") {
								$url1 = "http://".$SERVER_NAME.":".$PORT_NUMBER."/Siperss/$role1/home.php?mn_key=1&mn_file=home.php&mn_lang=ind";
								$url2 = "http://".$SERVER_NAME.":".$PORT_NUMBER."/Siperss/$role2/home.php?mn_key=1&mn_file=home.php&mn_lang=eng";
							} else {
								$url1 = "http://".$SERVER_NAME.":".$PORT_NUMBER."/Siperss/$role1/$mn_file?mn_key=$mn_key&mn_key1=$mn_key1&mn_key2=$mn_key2&mn_file=$mn_file&mn_lang=ind";
								$url2 = "http://".$SERVER_NAME.":".$PORT_NUMBER."/Siperss/$role2/$mn_file?mn_key=$mn_key&mn_key1=$mn_key1&mn_key2=$mn_key2&mn_file=$mn_file&mn_lang=eng";
							}
						?>
                        <h1 id="name-text" class="logo-name">
						<!--?PHP 
							if ($mn_lang=="ind") {
								echo '<a href="'.$url2.'"><img src="../images/uk_flag.png"/> <b>English</b></a>'; 
								echo '&nbsp <img src="../images/indo_flag.png"/> Indonesia';	
							}
							elseif ($mn_lang=="eng") {
								echo '<img src="../images/uk_flag.png"/> English'; 
								echo '&nbsp <a href="'.$url1.'"><img src="../images/indo_flag.png"/> <b>Indonesia</b></a>';
							}
						?--> 
						</h1>
                    </div>
                </div>
            </body>
     </html>