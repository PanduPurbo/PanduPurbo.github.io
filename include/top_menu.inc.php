<?PHP
	include("db.inc.php");
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

	session_unset();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	
	<link rel=”stylesheet” href=”coba\css\bootstrap.min.css” />
	<link rel=”stylesheet” href=”coba\js\bootstrap.min.js” />
	<link rel=”stylesheet” href=”coba\style.css” />
	<title><?PHP print($_PageTitle)?></title>
</head>
<body>
<script src="coba\js\bootstrap.min.js"></script>

<nav class="navbar fixed-top navbar-expand-lg bg-warning text-white shadow-sm" style="background-color: #e2bbbb">
  <div class="container-fluid">
    <a class="navbar-brand font-weight-bold text-white" href="#"> 
    	<img src="http://localhost/coba/img/logoPus.gif" alt="" width="45" height="65">PUSHIDROSAL TNI AL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-white">
          
       
        
					<?PHP
						$query ="SELECT * FROM tbl_menu1 where menu1_jns = '".$role."' order by menu1_id";

						$result = mysqli_query($conn,$query);
							while($object = mysqli_fetch_object($result))
						{
							$menu_name = $object -> menu1_nama;
							$menu_key = $object -> menu1_id;
							$menu_file = trim($object -> menu1_file);
							$menu_tipe = $object -> menu1_tipe;	

							if ($mn_key == $menu_key) {
								$url = "http://".$SERVER_NAME.":".$PORT_NUMBER."/Hubud/".$role."/" .  
								$menu_file ."?mn_key=$menu_key&mn_lang=$mn_lang&mn_file=$menu_file";
								echo('<li class="nav-item"><a class="nav-link active text-white" href="'.$url.'" role="button" data-bs-toggle="dropdown" aria-expanded="false">'.$menu_name.'</a>');
								//echo('<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href='.$url.'>'.$menu_name.'</a>');
							}
							else { 
								$url = "http://".$SERVER_NAME.":".$PORT_NUMBER."/Hubud/".$role."/" .  
								$menu_file ."?mn_key=$menu_key&mn_lang=$mn_lang&mn_file=$menu_file";
								echo('<li class="nav-link dropdown"><a class="nav-link text-white"  href="'.$url.'" role="button" data-bs-toggle="dropdown" aria-expanded="false">'.$menu_name.'</a>');
								//echo('<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href='.$url.'>'.$menu_name.'</a>');
							}

							//============================Dropdown menu====================
							if ($menu_tipe == "p") {								
							}	
							elseif ($menu_tipe == "m") {
								$query1 ="SELECT * FROM tbl_menu2 where menu1_id=".$menu_key. " and menu2_jns = '".$role."'  order by menu2_id";
								$result1 = mysqli_query($conn,$query1);
								echo('<ul class="dropdown-menu">');
								while($object1 = mysqli_fetch_object($result1))
								{
									$menu_name1 = $object1 -> menu2_nama;
									$menu_key1 = $object1 -> menu2_id;
									$menu_file1 = trim($object1 -> menu2_file);
									$menu_tipe1 = $object1 -> menu2_tipe;
									$url1 = "http://".$SERVER_NAME.":".$PORT_NUMBER."/Hubudk/".$role."/" .$menu_file1 ."?mn_key=$menu_key&mn_key1=$menu_key1&mn_lang=$mn_lang&mn_file=$menu_file1";
										echo('<li class="nav-item dropdown"> <a class="dropdown-item text-white" href='.$url1.'>'.$menu_name1.'</a>');
									   // echo('<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href='.$url1.'>'.$menu_name1.'</a>');
									    
									if ($menu_tipe1 == "p") {										
									}
									elseif ($menu_tipe1 == "m") {
										//echo('<li><a href="">'.$menu_name1.'</a>');
										$query2 ="SELECT * FROM tbl_menu3 where menu2_id=".$menu_key1. " and menu3_jns = '".$role."'  order by menu3_id";
										$result2 = mysqli_query($conn,$query2);
										echo('<ul class="dropdown-menu">');
										while($object2 = mysqli_fetch_object($result2))
										{
											$menu_name2 = $object2 -> menu3_nama;
											$menu_key2 = $object2 -> menu3_id;
											$menu_file2 = trim($object2 -> menu3_file);
											$menu_tipe2 = $object2 -> menu3_tipe;
											$url2 = "http://".$SERVER_NAME.":".$PORT_NUMBER."/Hubudf/".$role."/" .$menu_file2 ."?mn_key=$menu_key&mn_key1=$menu_key1&mn_key2=$menu_key2&mn_lang=$mn_lang&mn_file=$menu_file2";
											echo('<li><a class="dropdown-item text-white" href="'.$url2.'" role="button" data-bs-toggle="dropdown" aria-expanded="false">'.$menu_name2.'</a>');	
										}
										echo('</ul>');
									}
									echo('<hr class="dropdown-devider"> </li>');
								}
								echo('</ul>');
							}
							echo('</li>');
						}
					?>
		</ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</body>
</html>

			
