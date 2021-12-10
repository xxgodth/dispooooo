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

	  
      <form method="post" action="views/lap_putpen.php" target="_blank">	<div class="row">	
   <div class="col-md-12">
          <div class="tile">	

		<div class="row">

			<div class="col-lg-6">
			            <div class="form-group">
                            <label for="tanggal_putpen"><strong>Dari Tanggal</strong></label>
                            <div class="col-sm-6">    
								<input type="date" name="dari_tanggal" class="form-control" id="tanggal" placeholder="" required>
                            </div>
						</div>
			            <div class="form-group">
                            <label for="tanggal_putpen"><strong>Sampai Tanggal</strong></label>
                            <div class="col-sm-6">    
								<input type="date" name="sampai_tanggal" class="form-control" id="tanggal2" placeholder="" required>
                         </div>
						</div>
                         <div class="form-group">
						 <div class="col-sm-6">
                            <label for="kec"><strong>Kecamatan</strong></label>
                                <input type="text" name="kec" class="form-control" id="kec" placeholder="Ketik Kecamatan" required>
                        </div></div>						
            </div>

			<div class="col-lg-6">
			            <div class="form-group">
                            <label for="tanggal_putpen"><strong>Cetak Data</strong></label>
                            <div class="col-sm-6">    
									<button type="submit" name="cetak" class="btn btn-success btn-sm"><i class="fa fa-print"></i> Cetak Laporan</button><br><br>						
									<a href="?page=laporan&actions=cetak" class="btn btn-warning btn-sm"><i class="fa fa-refresh"></i> Refresh</a>

                         </div>	
					 

                </div>



	





					</div>

			</div>
		</div>
		</div>
		</div></form>
</main>		
	
	