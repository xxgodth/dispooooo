<title>Laporan Putusan Penetapan</title>
<?php
	include '../config/koneksi.php';
	include 'function_tanggal.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Report Table</title>
                 <style type="text/css">
                   @page{
                       /* A4 Landscape */
                       /* size: 29.7cm 21cm; */
                       /* Folio Landscape */
                       size: 33cm 21.6cm;
                       margin:5mm 5mm 5mm 5mm;
                   }
                   #outtable{
                     /* padding: 20px; */
                     border:1px solid #e3e3e3;
                     /* width:600px; */
                     /* border-radius: 5px; */
                   }
                
                   .short{
                     width: 50px;
                   }
                
                   .normal{
                     width: 150px;
                   }
                
                   table{
                     border-collapse: unset;
                     border: 1px;
                     font-family: arial;
                     color:#5E5B5C;
                   }
               
                   table tr{
                     font:normal 11px Tahoma, sans-serif;
                   }
                
                   thead th{
                     /* border: 1px; */
                     text-align: left;
                     /* padding: 10px; */
                   }
                
                   tbody td{
                     border-top: 1px solid #e3e3e3;
                     padding: 0px;
                   }
                
                   tbody tr:nth-child(even){
                     background: #F6F5FA;
                   }
                
                   tbody tr:hover{
                     background: #EAE9F5
                   }
		.header {
			text-align: center;
			margin: -.5rem 0;
		}
		#lead {
                width: auto;
                position: relative;
                margin: 25px 0 0 75%;
            }
		.lead {
			font-weight: bold;
			text-decoration: underline;
			margin-bottom: -10px;
		}
		.logo1 {
			float: left;
			position: relative;
			width: 80px;
			height: 90px;
			margin: 0 0 0 1.2rem;
		}

		.text {
			font-size: 15px!important;
			font-weight: bold;
			text-transform: uppercase;
		}		
                 </style>
               </head>
               <body>
		<div class="header">
			<img src="../assets/images/logo.png" class="logo1"><center>
			<h1 class="text">PENGADILAN AGAMA NANGA BULIK</h1>
			<h4>Jl. Bukit Hibul Timur (eks Aula Bappeda) Komplek Perkantoran Pemda Kabupaten Lamandau.</h4>
			<h4>Phone : Telp: 0532-6613013 Email : panangabulik@gmail.com Website : pa-nangabulik.go.id</h4></center>
			<td colspan="3" bordered="#000000">
				<div align="center" style="border: solid; font-size: 10px;">
				</div>
			</td>
		</div><br>
	   
                   <div id="outtable">
                     <table>
                         <thead>
                         <tr >
                         <th>Putusan PA</th>
                         <th colspan="2">Pemohon/Penggugat</th>
                         <th colspan="2">Termohon/Tergugat</th>
                         <th>Perceraian yang Terjadi</th>
                         <th>Akta Cerai</th>
                         <th colspan="2">Akta Nikah</th>
                         <th rowspan="4">Iddah</th>
                         <th rowspan="4">Lama Nikah</th>
                         <th rowspan="4">Ket</th>
                     </tr>
                     <tr align="">
                         <td><b>A.Nomor</b></td>
                         <td><b>A.Nama</b></td>
                         <td rowspan="3" align="center"><b>Alamat</b></td>
                         <td><b>A.Nama</b></td>
                         <td rowspan="3" align="center"><b>Alamat</b></td>
                         <td><b>A.Hukum</b></td>
                         <td><b>A.Nomor</b></td>
                         <td><b>A.Nomor</b></td>
                         <td rowspan="3" align="center"><b>KUA</b></td>
                     </tr>
                     <tr>
                         <td rowspan="2"><b>B.Tanggal</b></td>
                         <td><b>B.Pendidikan</b></td>
                         <td><b>B.Pendidikan</b></td>
                         <td><b>B.Keadaan</b></td>
                         <td rowspan="2"><b>B.Tanggal</b></td>
                         <td rowspan="2"><b>B.Tanggal</b></td>
                     </tr>
                     <tr >
                         <!-- <td></td> -->
                         <td><b>C.Pekerjaan</b></td>
                         <td><b>C.Pekerjaan</b></td>
                         <td><b>C.Sebab</b></td>
                         <!-- <td colspan="2"></td> -->
                         <!-- <td></td> -->
                     </tr>
                     <tr  bgcolor="#f2f2f2" align="center">
                         <td><b>1</b></td>
                         <td><b>2</b></td>
                         <td><b>3</b></td>
                         <td><b>4</b></td>
                         <td><b>5</b></td>
                         <td><b>6</b></td>
                         <td><b>7</b></td>
                         <td><b>8</b></td>
                         <td><b>9</b></td>
                         <td><b>10</b></td>
                         <td><b>11</b></td>
                         <td><b>12</b></td>
                     </tr>
                         </thead>
                         <tbody>
 


			<?php
			
					$dari_tanggal = $_POST['dari_tanggal'];
					$sampai_tanggal= $_POST['sampai_tanggal'];
					$kec= $_POST['kec'];

					//indonesia Tgl
					$dari_tanggal_indo = IndonesiaTgl2($dari_tanggal);
					$sampai_tanggal_indo= IndonesiaTgl2($sampai_tanggal);			

			
			

                       //buat sql untuk tampilan data, gunakan kata kunci select
							
            $sql  = "SELECT a.`nomor_perkara`,a.`jenis_perkara_id`,f.`tgl_nikah`,d.`tanggal_bht`,
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
                                    WHERE YEAR(a.tanggal_pendaftaran) > 2016
                                    AND d.`tanggal_putusan` IS NOT NULL
                                    AND d.`status_putusan_id`=62
                                    AND e.`tgl_akta_cerai`  IS NOT NULL
                                    AND e.tgl_akta_cerai BETWEEN '$dari_tanggal' AND '$sampai_tanggal' 
                                    AND f.`kua_tempat_nikah` LIKE '%Kecamatan $kec%'
                                    ORDER BY e.`nomor_akta_cerai` ASC";	

                            $query = mysqli_query($koneksi2, $sql) or die("SQL Anda Salah");
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
              ?>					  
			  
                        <!-- mulai datanya -->
                            <tr                              >
                                <td><b>A.</b><?= $data['nomor_perkara']?></td>
                                <td><b>A.</b><?= $data['nama']?></td>
                                <td rowspan="3"><?= $data['alamat']?></td>
                                <td><b>A.</b><?= $data['nama2']?></td>
                                <td rowspan="3"><?= $data['alamat2']?></td>
                                <td><b>A.</b>
                                <?php
                                    $hk=$row->hukum;
                                    if ($hk==346){
                                        echo "Talak Raj'i";
                                    }else if ($hk==347){
                                        echo "Talak Bain";
                                    }else{
                                        echo "-";
                                    }
                                ?>
                                </td>
                                <td><b>A.</b><?= $data['nomor_akta_cerai']?></td>
                                <td><b>A.</b><?= $data['no_kutipan_akta_nikah']?></td>
                                <td rowspan="3">
                                <?php
                                    $kua = $data['kua_tempat_nikah'];
                                    $stredit = str_replace("Kantor Urusan Agama "," ",$kua);
                                    echo $stredit;
                                ?>
                                </td>
                                <td rowspan="3">
                                <?php 
                                    $iddah = $data['keadaan_istri'];
                                    if ($iddah==1){
                                        echo "Suci";
                                    }else if ($iddah==2){
                                        echo "Haid";
                                    }else if ($iddah==3){
                                        echo "Hamil";
                                    }else{
                                        echo "Tidak diketahui";
                                    }
                                ?>
                                </td>
                                <td rowspan="3">
                                <?php 
                                    $tanggalnikah = new DateTime($data['tgl_nikah']);
                                    $tanggalbht = new DateTime($data['tanggal_bht']);
                                    $y = $tanggalbht->diff($tanggalnikah)->y; 
                                    $m = $tanggalbht->diff($tanggalnikah)->m;
                                    $d = $tanggalbht->diff($tanggalnikah)->d;
                                    echo $y.",".$m."th"
                                ?>
                                </td>
                                <td rowspan="3">
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
                            <!-- B -->
                            <tr >
                                <td rowspan="2"><b>B.</b><?= $data['tanggal_putusan']?></td>
                                <td><b>B.</b><?php
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
                                    ?></td>
                                <td><b>B.</b><?php
                                    $pen2= $data['pend2'];
                                        if($pen2 == 1){
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
                                    ?></td>
                                <td>
                                <?php
                                    $t= $data['qobla_bada']; 
                                    ?>
                                    <b>B.</b><?php if ($t>0){
                                        echo "Ba'da Duhul";
                                    }else{
                                        echo "Qobla Duhul";
                                    }
                                    ?>
                                </td>
                                <td rowspan="2"><b>B.</b><?= $data['tgl_akta_cerai']?></td>
                                <td rowspan="2"><b>B.</b><?= $data['tgl_kutipan_akta_nikah']?></td>
                            </tr>
                            <!-- C -->
                            <tr >
                                <!-- <td></td>  -->
                                <td><b>C.</b><?= $data['pekerjaan']?></td>
                                <td><b>C.</b><?= $data['pekerjaan2']?></td>
                                <td><b>C.</b>F<?= $data['faktor_perceraian_id']?></td> 
                                <!-- <td colspan="2"></td>  -->
                                <!-- <td></td> -->
                            </tr>


            <?php } ?>
			
			
			
			
                         </tbody>
                     </table>
                    </div>			
		<script type="text/javascript">
		window.print();
	</script>
		
               </body>
               </html>	