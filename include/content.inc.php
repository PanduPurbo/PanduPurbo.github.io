<?PHP
	include("db.inc.php");
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

	session_unset();
?>

					<!--div class="content"style="width: 1200px;">

						  <div class="depan">
                    			<!-div class="depan-gif"></div-->
							
								<!--div align="center" title="Space Iklan Available"><strong>Space Iklan Available</strong></div>
							
					</div-->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel=”stylesheet” href=”coba\css\bootstrap.min.css”>
    <link rel=”stylesheet” href=”coba\js\bootstrap.min.js”>
    <link rel="stylesheet" href="coba\style.css">

  </head>
<body>

	<script src="coba\js\bootstrap.min.js"></script>

<div class="container">

<!--Jumbotron-->
<div class="p-5 mb-4 bg-light rounded-1 img-thumbnail">
  <div class="container-fluid py-5">
  	<img src="http://localhost/coba/img/staff.jpeg" alt="staff">
    <h1 class="display-4 fw-bold">Custom Jumbotron</h1>
    <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous
      versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
    <button class="btn btn-primary btn-lg" type="button">Button</button>
  </div>
</div>
<!--End Jumbotron-->

<!--card-->
<section id="card">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">

    <!----------------------------------------Card 1 ----------------------------------------------->	
      <div class="col mb-5">
        <div class="card h-100">
          <img src="http://localhost/coba/img/nur.gif" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Hosting</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.
              This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>

<!---------------------------------------------------Card 2----------------------------------------->

      <div class="col mb-5">
        <div class="card h-100 text-center">
          <img src="http://localhost/coba/img/kapal.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Domain</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>

<!-------------------------------------------------Card 3 ----------------------------------------->

      <div class="col mb-5">
        <div class="card h-100 text-end">
          <img src="http://localhost/coba/img/budi.gif" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Website</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.
              This card has even longer content than the first to show that equal height action.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>

<!-------------------------------------------------------------------------------------------------->      

    </div>
  </div>
</section>
<!--End card-->

	<div class="position-relative">
			<table class=" table table-striped">
				<tr>
					<td>

					<!--?PHP
						$sql = "select * from srt_masuk  where Srt_stat = 0 order by idSrt";
						$query = mysqli_query($conn,$sql) or die(mysqli_error());// or die("ERROR33"); 
						$count= 0;

						if(mysqli_num_rows($query) > 0 )
							{
								while($row = mysqli_fetch_object($query))
							{
								$count++;

								$idSrt = $row -> idSrt;
								$tgl_Smsk = $row -> tgl_Smsk;
								$Srt_From = $row -> Srt_From;
								$No_Srt = $row -> No_Srt;
								$tgl_Srt = $row -> tgl_Srt;
								$Hal_Srt = $row -> Hal_Srt;
								$Ket_Srt = $row -> Ket_Srt;
								//$beri_user = $row -> beri_user;

										
								$Srt_From = $row -> Srt_From;
								$No_Srt = $row -> No_Srt;
								$Hal_Srt = $row -> Hal_Srt;
								//$Ket_Srt = $row -> Ket_Srt;
								//$beri_tgl = tgl_indo($row -> beri_tgl);
								//$beri_user = $row -> beri_user;
								//$beri_id = $row -> beri_id;

								echo ('Post By :'.$Srt_From.' Nomor post: '.$idSrt.'');

								echo ('<p>(Jakarta, '.$tgl_Srt.') '.$Hal_Srt.'</p>');
								echo ('<p><a href="isi_surat_masuk.php?idSrt='.$idSrt.'">Selengkapnya...</a></p>');
								//echo ('<p><a href="isi_berita.php?beri_judul='.$beri_judul.'&beri_body='.$beri_body.'&beri_tgl='.$beri_tgl.'&beri_user='.$beri_user.'">Selengkapnya...</a></p>');
								echo ('<hr></hr>');
							}									
					  }else{	
								echo '<h2 class="PostHeaderIcon-wrapper"><span class="PostHeader">TIDAK ADA SURAT</span></h2>';
							}
					?-->	

				    </td>
			    </tr>

					<td width="51%">
					<!--?PHP
						$sql = "select top 4 * from srt_keluar where Srt_stat = '0'  order by idSrtKlr";
						$query = mysqli_query($conn, $sql);// or die("ERROR44"); 

						if(mysqli_num_rows($conn, $query) > 0 ){
							while($row = mysqli_fetch_object($query))
						{
							    $count++;

							    $Srt_Kpd = $row -> Srt_Kpd;
							    $tgl_SrtKlr = $row -> tgl_SrtKlr;
								$Hal_SrtKlr = $row -> Hal_SrtKlr;
								$Ket_SrtKlr = $row -> Ket_SrtKlr;
								$beri_tgl = tgl_indo($row -> beri_tgl);
								$beri_user = $row -> beri_user;
								$idSrtKlr = $row -> idSrtKlr;

								echo '<h2 class="PostHeaderIcon-wrapper"><span class="title">Surat Keluar :'.$Srt_Kpd.'</span></h2>';
								echo ('<p>(Jakarta, '.$tgl_SrtKlr.') '.$Hal_Srt.'</p>');
								echo ('<p><a href="isi_berita_Klr.php?idSrtKlr='.$idSrtKlr.'">Selengkapnya...</a></p>');
								//echo ('<p><a href="isi_berita.php?beri_judul='.$beri_judul.'&beri_body='.$beri_body.'&beri_tgl='.$beri_tgl.'&beri_user='.$beri_user.'">Selengkapnya...</a></p>');
								echo ('<hr></hr>');
						}									
					}else{	
						echo '<h2 class="PostHeaderIcon-wrapper"><span class="PostHeader">TIDAK ADA BERITA</span></h2>';
					}	
				?-->
					
				   </td>
				</table>
			</div>
		</div>
</body>
</html>