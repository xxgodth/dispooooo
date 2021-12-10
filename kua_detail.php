    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Detail</h1>
          <p>Informasi Detail Putusan / Penetapan</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tabel</li>
          <li class="breadcrumb-item active"><a href="#">Detail</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">	  
        <div class="tile">
        <h3 class="tile-title">Informasi Detail :</h3>
                    <!--Menampilkan data detail arsip-->
                    <?php
                            $sql = "SELECT a.nomor_akta_cerai, DATE_FORMAT (a.tgl_akta_cerai, '%d/%m/%Y') AS tgl_ac, a.no_seri_akta_cerai, 
                                  b.nomor_perkara, b.pihak1_text, b.pihak2_text,
                                  DATE_FORMAT (c.tanggal_putusan, '%d/%m/%Y') AS tgl_put, DATE_FORMAT (c.tanggal_bht, '%d/%m/%Y') AS tgl_bht,
                                  DATE_FORMAT (d.tgl_ikrar_talak, '%d/%m/%Y') AS tgl_ikrar,
                                  DATE_FORMAT (e.tgl_kutipan_akta_nikah, '%d/%m/%Y') AS tgl_kutipan, e.no_kutipan_akta_nikah,
                                  SUBSTRING(e.kua_tempat_nikah,21) AS kua
                                  FROM perkara_akta_cerai AS a
                                  LEFT JOIN perkara AS b ON a.perkara_id = b.perkara_id
                                  LEFT JOIN perkara_putusan AS c ON a.perkara_id = c.perkara_id 
                                  LEFT JOIN perkara_ikrar_talak AS d ON a.perkara_id = d.perkara_id 
                                  LEFT JOIN perkara_data_pernikahan AS e ON a.perkara_id = e.perkara_id								  
                                  WHERE a.tgl_akta_cerai IS NOT NULL ORDER BY a.nomor_akta_cerai DESC";
                    //proses query ke database
                    $query = mysqli_query($koneksi2, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-striped">
                        <tr>
                            <td>NAMA PENGGUGAT / PEMOHON</td> <td>: <?= $data['pihak1_text'] ?></td>
                        </tr>	
                        <tr>
                            <td>NAMA TERGUGAT / TERMOHON</td> <td>: <?= $data['pihak2_text'] ?></td>
                        </tr>			
                        <tr>
                            <td>TGL BHT</td> <td>: <?=$data['tgl_bht'];?></td>
                        </tr>
                        <tr>
                            <td>TGL IKRAR</td> <td>: <?=$data['tgl_ikrar'];?></td>
                        </tr>
						<tr>
                            <td>NOMOR AKTA CERAI</td> <td>: <?= $data['nomor_akta_cerai'] ?></td>
                        </tr> 
                        <tr>
                            <td>TGL AKTA CERAI</td> <td>: <?=$data['tgl_ac'];?></td>
                        </tr>
						<tr>
                            <td>NOMOR SERI AKTA CERAI</td> <td>: <?= $data['no_seri_akta_cerai'] ?></td>
                        </tr> 						
						<tr>
                            <td>NOMOR PUTUSAN PA</td> <td>: <?= $data['nomor_perkara'] ?></td>
                        </tr> 		
                        <tr>
                            <td>TGL PUTUSAN</td> <td>: <?=$data['tgl_put'];?></td>
                        </tr>
						<tr>
                            <td>NOMOR PUTUSAN PTA</td> <td>: </td>
                        </tr> 		
                        <tr>
                            <td>TGL PUTUSAN PTA</td> <td>: </td>
                        </tr>
						<tr>
                            <td>NOMOR PUTUSAN MA</td> <td>: </td>
                        </tr> 		
                        <tr>
                            <td>TGL PUTUSAN MA</td> <td>: </td>
                        </tr>


					
                    </table>
				

                <!--panel footer--> 
                <div>
				<a href="?page=kua&actions=tampil"><button class="btn btn-primary" type="button">Kembali ke Data Akta Cerai</button></a>
                </div>
                <!--end panel footer-->
</div>
</div>
</div>
    </main>