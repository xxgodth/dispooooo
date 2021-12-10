<?php

require '../config/koneksi.php'; ?>
<?php 
	
	if (isset($_POST['cari_tgl'])) {
        $halaman = 5;
        $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
        $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;		
		$query = "select * from putpen where tanggal_putpen between '".$_POST['cari_tgl']."' and '".$_POST['cari_tgl2']."'";
		$result = mysqli_query($con, $query);
		$count1 = mysqli_num_rows($result);
        $pages = ceil($count1/$halaman);
        $no =$mulai+1;			
	}
	else {
        $halaman = 5;
        $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
        $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
		$query1 = "select * from putpen";
		$result1 = mysqli_query($con, $query1);
		$count1 = mysqli_num_rows($result1);
        $pages = ceil($count1/$halaman);
		$query = "select * from putpen LIMIT $mulai, $halaman";
		$result = mysqli_query($con, $query);
		$count = mysqli_num_rows($result);
        $no =$mulai+1;		
	}

	if (isset($_POST['cari_tgl'])) {
		$hidden = "select * from putpen where tanggal_putpen between '".$_POST['cari_tgl']."' and '".$_POST['cari_tgl2']."'";
	}

?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Cetak data</h1>
          <p>Cetak Data Putusan / Penetapan</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tabel</li>
          <li class="breadcrumb-item active"><a href="#">Cetak</a></li>
        </ul>
      </div>

	  
      <div class="row">
   <div class="col-md-12">
          <div class="tile">
			<div>
			<form method="post">
				<table id="cari_table">
					<tr>
						<td>Tanggal :</td>
						<td><input type="date" name="cari_tgl" required></td>
						<td>s/d</td>
						<td><input type="date" name="cari_tgl2" required></td>
						<td><input id="btn_cari" class="btn btn-s-md btn-info" type="submit" value="CARI"></td>
					</tr>
				</table>
			</form>
             </div>
			 			<div class="count">
				<b><span class="label label-info">Jumlah Data : <?php echo $count1; ?></span></b>
			</div>
			 <br>
			<div>
				<table class="table table-striped">
					<tr>
                      <th>No</th>					
                      <th>No. Perkara</th>
                      <th>Proses</th>
                      <th>Pihak 1</th>
                      <th>Pihak 2</th>
                      <th>Alamat</th>
                      <th>Aksi</th>
					</tr>

					<?php
						while ($row = mysqli_fetch_assoc($result)){
					?>
					<tr>
						
						<td class="nomor" style="text-align: center;"><?php echo $no;?></td>
						<td class="nomor"><?php echo $row['nomor_putpen'];?></td>
                        <td class="nomor"><?= $row['tahapan_proses'] ?></td>
                        <td class="nomor"><?= $row['nama_p'] ?></td>
                        <td class="nomor"><?= $row['nama_t'] ?></td>					  
                        <td class="nomor"><?= $row['alamat_p'] ?></td>
                        <td><a href="?page=putpen&actions=detail&id=<?= $row['id_putpen'] ?>"><button class="btn btn-primary" type="button">Cetak</button></a></td>						

					</tr>
						<?php $no++; }?>
				</table>


          
                  <div class="pull-right">
                  <ul class="pagination no-margin">
  <?php for ($i=1; $i<=$pages ; $i++){ ?>
  
    <?php 
  				if ($i>=1) { ?>
					<li><a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a><li>
					
					<?php
				}
  ?>
  
 
  <?php } ?>				  
                  </ul>
                </div>




				
			</div>
			<?php 
				if ($count1 == 0) {
					echo "<script language='javascript'>alert('Data tidak tersedia atau tidak ditemukan')</script>";
				}
			?>		  
			  
			  
			<form method="post" action="report/export_pdf.php" target="_blank">
			<div><center>
				<button type="submit" class="btn btn-s-md btn-warning" name="pdf"> CETAK LAPORAN </button>
				<?php
				if (isset($_POST['cari_tgl'])) {
				?>
				<input type="hidden" name="h_sql" value="<?php echo $hidden; ?>">
				<?php }?>
			</div>
			</form>

		


         </div>
        </div>
         </div>
        </div>
</main>		
