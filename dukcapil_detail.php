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
                    $sql = "
SELECT a.`nomor_perkara`,a.`jenis_perkara_id`,a.`tahapan_terakhir_text`, f.`tgl_nikah`,d.`tanggal_bht`,
                                    DATE_FORMAT(d.`tanggal_putusan`,'%d/%m/%Y') AS tanggal_putusan,
                                    b.`nama`,p1.`pendidikan_id` AS pend1,p1.`pekerjaan`,p1.`alamat`,
                                    c.`nama` AS nama2,p2.`pendidikan_id` AS pend2,p2.`alamat` AS alamat2,p2.`pekerjaan` AS pekerjaan2,p2.`alamat` AS alamat2,
                                    a.`jenis_perkara_id` AS hukum,
                                    e.`qobla_bada`,e.`faktor_perceraian_id`,e.`nomor_akta_cerai`,
                                    DATE_FORMAT(e.`tgl_akta_cerai`,'%d/%m/%Y')AS tgl_akta_cerai,
                                    f.`no_kutipan_akta_nikah`,
                                    DATE_FORMAT(f.`tgl_kutipan_akta_nikah`,'%d/%m/%Y')AS tgl_kutipan_akta_nikah,f.`kua_tempat_nikah`,e.`keadaan_istri`,
                                    TIMESTAMPDIFF(YEAR,f.`tgl_nikah`, d.`tanggal_bht`) AS lama_nikah								
                                    FROM perkara AS a
                                    INNER JOIN perkara_pihak1 AS b ON a.`perkara_id` = b.perkara_id 
                                    INNER JOIN pihak AS p1 ON b.`pihak_id`=p1.`id`
                                    INNER JOIN perkara_pihak2 AS c ON a.`perkara_id`=c.`perkara_id` 
                                    INNER JOIN pihak AS p2 ON c.`pihak_id`=p2.`id`
                                    LEFT JOIN perkara_putusan AS d ON a.`perkara_id`=d.`perkara_id`
                                    LEFT JOIN perkara_akta_cerai AS e ON a.`perkara_id`=e.`perkara_id`
                                    LEFT JOIN perkara_data_pernikahan AS f ON a.`perkara_id`=f.`perkara_id`							
                                    WHERE a.`nomor_perkara` ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi2, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-striped"> 
                        <tr>
                            <td width="200" ><strong>NOMOR PUT/PEN</strong></td> <td>: <?= $data['nomor_perkara'] ?></td>
                        </tr>						
                        <tr>
                            <td>TGL PUT/PEN</td> <td>: <?=$data['tanggal_putusan']?></td>
                        </tr>
                        <tr>
                            <td>NAMA PIHAK 1</td> <td>: <?= $data['nama'] ?></td>
                        </tr>

                        <tr>
                            <td>PENDIDIKAN</td>  <td>: 					
							
<?php
                                    $pen1= $data['pend1'];
                                        if($pen1 == 1){
                                            echo "TK";
                                        }elseif($pen1 == 2){
                                            echo "SD";
                                        }elseif($pen1 ==3){
                                            echo "SLTP";
                                        }elseif ($pen1 ==4) {
                                            echo "SLTA";
                                        }elseif ($pen1==5) {
                                            echo "D1";
                                        }elseif ($pen1==6) {
                                            echo "D2";
                                        }elseif ($pen1==7) {
                                            echo "D3";
                                        }elseif ($pen1==8) {
                                            echo "D4";
                                        }elseif ($pen1==9) {
                                            echo "S1";
                                        }elseif ($pen1==10) {
                                            echo "S2";
                                        }elseif ($pen1==11) {
                                            echo "S3";
                                        }elseif ($pen1==12) {
                                            echo "Belum Sekolah";
                                        }else{
                                            echo "Tidak Ada";
                                        }
                                    ?>		
							
							</td>
                        </tr>
                            <td>PEKERJAAN</td> <td>: <?= $data['pekerjaan'] ?></td>
                        </tr>						
						<tr>
                            <td>ALAMAT</td> <td>: <?= $data['alamat'] ?></td>
                        </tr>
                        <tr>
                        <tr>
                            <td>NAMA PIHAK 2</td> <td>: <?= $data['nama2'] ?></td>
                        </tr>

                        <tr>
                            <td>PENDIDIKAN</td>  <td>: 					
							
<?php
                                    $pen2= $data['pend2'];
                                        if($pen1 == 1){
                                            echo "TK";
                                        }elseif($pen2 == 2){
                                            echo "SD";
                                        }elseif($pen2 ==3){
                                            echo "SLTP";
                                        }elseif ($pen2 ==4) {
                                            echo "SLTA";
                                        }elseif ($pen2==5) {
                                            echo "D1";
                                        }elseif ($pen2==6) {
                                            echo "D2";
                                        }elseif ($pen2==7) {
                                            echo "D3";
                                        }elseif ($pen2==8) {
                                            echo "D4";
                                        }elseif ($pen2==9) {
                                            echo "S1";
                                        }elseif ($pen2==10) {
                                            echo "S2";
                                        }elseif ($pen2==11) {
                                            echo "S3";
                                        }elseif ($pen2==12) {
                                            echo "Belum Sekolah";
                                        }else{
                                            echo "Tidak Ada";
                                        }
                                    ?>		
							
							</td>
                        </tr>
                            <td>PEKERJAAN</td> <td>: <?= $data['pekerjaan2'] ?></td>
                        </tr>						
						<tr>
                            <td>ALAMAT</td> <td>: <?= $data['alamat2'] ?></td>
                        </tr>
                        <tr>



						
						<tr>
                            <td>HUKUM</td> <td>:

                                <?php
                                    $hk=$data['hukum'];
                                    if ($hk==346){
                                        echo "Talak Raj'i";
                                    }else if ($hk==347){
                                        echo "Talak Bain";
                                    }else{
                                        echo "-";
                                    }
                                ?>
                             </td>
                        </tr>
						<tr>
                            <td>NOMOR AKTA CERAI</td> <td>: <?= $data['nomor_akta_cerai'] ?></td>
                        </tr>					
                        <tr>
                            <td>TGL AKTA CERAI</td> <td>: <?=$data['tgl_akta_cerai']?></td>
                        </tr>						
						<tr>
                            <td>NOMOR AKTA NIKAH</td> <td>: <?= $data['no_kutipan_akta_nikah'] ?></td>
                        </tr>			
                        <tr>
                            <td>TGL AKTA NIKAH</td> <td>: <?=$data['tgl_kutipan_akta_nikah']?></td>
                        </tr>
						<tr>
                            <td>KUA TEMPAT NIKAH</td> <td>: <?= $data['kua_tempat_nikah'] ?></td>
                        </tr>
						<tr>
                            <td>LAMA NIKAH</td> <td>: <?= $data['lama_nikah'] ?> Tahun</td>
                        </tr>
						<tr>
                            <td>JENIS PERKARA</td> <td>:
							
							    <?php
                                    $jp= $data['jenis_perkara_id'];
                                    if ($jp==346){
                                        echo "CT";
                                    }else if($jp==347){
                                        echo "CG";
                                    }else{
                                        echo "-";
                                    }
                                ?>
							
							
							</td>
                        </tr>
						<tr>
                            <td>TAHAPAN PROSES</td> <td>: <?= $data['tahapan_terakhir_text'] ?></td>
                        </tr>						
                    </table>
				

                <!--panel footer--> 
                <div>
				<a href="?page=dukcapil&actions=tampil"><button class="btn btn-primary" type="button">Kembali ke Data Putusan / Penetapan</button></a>
                </div>
                <!--end panel footer-->
</div>
</div>
</div>
    </main>