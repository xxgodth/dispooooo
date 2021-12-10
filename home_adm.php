	<?php 
	include 'config/koneksi.php';
	session_start();
	?>
 
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <?php if (isset($_SESSION['user'])) { ?>
                  <p align="right"><strong><?=$_SESSION['nama']?></strong> Anda masuk sebagai <strong><?=$_SESSION['ket']?></strong></p>
            <?php  } else {

            }?>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Pengguna</h4>
              <p><b>
					<?php 
$pengguna= mysqli_query($koneksi,"SELECT * FROM putpen");
$jumlah3 = mysqli_num_rows($pengguna);
 echo $jumlah3; ?>	Orang
			  
			  </b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
            <div class="info">
              <h4>Akta Cerai</h4>
              <p><b>
					<?php 
$akta_cerai= mysqli_query($koneksi2,"SELECT * FROM perkara WHERE tahapan_terakhir_text='Akta Cerai'");
$jumlah4 = mysqli_num_rows($akta_cerai);
 echo $jumlah4; ?> Item	  
			  </b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
              <h4>CERAI GUGAT</h4>
              <p><b>
					<?php 
$cerai_gugat= mysqli_query($koneksi2,"SELECT * FROM perkara WHERE jenis_perkara_id='347'");
$jumlah1 = mysqli_num_rows($cerai_gugat);
 echo $jumlah1; ?> Kasus
			  
			  </b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
            <div class="info">
              <h4>CERAI TALAK</h4>
              <p><b>
					<?php 
$cerai_talak= mysqli_query($koneksi2,"SELECT * FROM perkara WHERE jenis_perkara_id='346'");
$jumlah2 = mysqli_num_rows($cerai_talak);
 echo $jumlah2; ?> Kasus		  
			  </b></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="img"><img class="d-block img-fluid" src="assets/images/slide1.jpg" alt="First slide"></div>
    </div>
    <div class="carousel-item">
      <div class="img"><img class="d-block img-fluid" src="assets/images/slide2.jpg" alt="Second slide"></div>
    </div>
    <div class="carousel-item">
      <div class="img"><img class="d-block img-fluid" src="assets/images/slide3.jpg" alt="Third slide"></div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Tutorial Aplikasi</h3>
            <div class="bs-component">
              <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Tentang Aplikasi</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#putpen">Data Putusan / Penetapan</a></li>				
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#cetak">Cetak Laporan</a></li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show" id="home">
				<p>Aplikasi SI-S3GA adalah sebuah aplikasi berbasis web yang dibuat oleh Pengadilan Agama Nanga Bulik untuk mempermudah Instansi Pemerintahan lain seperti Dukcapil dan KUA untuk memperoleh kutipan putusan / penetapan Pengadilan Agama Nanga Bulik. Aplikasi SI-S3GA ini bertujuan untuk lebih efektif dan efisien dalam validasi putusan perceraian bagi perubahan data status kependudukan maupun status perkawinan. <br>Aplikasi SI-S3GA ini digunakan oleh beberapa user/pengguna antara lain:
<br>•	Admin Disdukcapil
<br>•	Admin KUA
<br>•	Admin Pengadilan Tingkat Pertama</p>
                </div>
                <div class="tab-pane fade" id="putpen">
                  <p>Untuk melihat data kutipan putusan / penetapan, silahkan anda Klik menu Data Putusan / Penetapan di samping kiri<br>Kemudian anda bisa memanfaatkan
				  tool searching untuk membantu anda mencari data yang anda perlukan<br><br><img height="120px" src="assets/images/putpen.jpg"></p>
                </div>				
                <div class="tab-pane fade" id="cetak">
                  <p>Untuk mencetak laporan kutipan Putusan/Penetapan Pengadilan Agama Nanga Bulik silahkan <br>anda Klik menu Cetak Laporan, kemudian pilih tanggal yang anda inginkan<br><br><img height="120px" src="assets/images/cetak.jpg"></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">


        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Putusan Terbaru</h3>
            <div><center>
              <iframe src="https://www.feedgrabbr.com/inframe/?widgetid=77fe1d86c6c7d5a396609ef8b" allowtransparency="true" style="border:0;background-color: transparent;width:300px;height:500px" ></iframe>
            </div>
          </div>
        </div>
 

        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Chat Informasi</h3>
            <div class="messanger">
              <div class="messages">
			  
<?php 


		$sql="SELECT * FROM `chat`";

		$query = mysqli_query($conn,$sql);
?>
			  
<?php
	if(mysqli_num_rows($query)>0)
	{
		while($row= mysqli_fetch_assoc($query))	
		{
?>
                <div class="message"><img width="50px" src="assets/images/<?php echo $row['username']; ?>.jpg">
                  <p class="info"><?php echo $row['message']; ?></p>
                </div>
<?php
		}
	}
	else
	{
?>
<div class="message">
			<p>
				Tidak ada percakapan sebelumnya.
			</p>
</div>
<?php
	} 
?>		  
			  
 
			  
			  

				
              </div>
  <form class="form-horizontal" method="post" action="kirim_pesan.php">			  
              <div class="sender">
                <input type="text" name="msg" placeholder="Kirim Pesan">
                <button class="btn btn-primary" type="submit"><i class="fa fa-lg fa-fw fa-paper-plane"></i></button>
              </div>
   </form>			  
            </div>
          </div>
        </div>
      </div>	  
    </main>