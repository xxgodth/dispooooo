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
        <tr>
            <th rowspan="2">No</th>
            <th rowspan="2">Penggugat/Pemohon</th>
            <th rowspan="2">Tergugat/Termohon</th>
            <th>A.Tanggal BHT</th>
            <th>A.Nomor Akta Cerai</th>
            <th>A.Nomor Putusan PA/Msy</th>
            <th>A.Nomor Putusan PTA/Msy</th>
            <th>A.Nomor Putusan MA-RI</th>
            <th rowspan="2">No Seri Akta Cerai</th>
        </tr>
        <tr>
            <td><b>B.Tanggal Ikrar</b></td>
            <td><b>B.Tanggal Akta Cerai</b></td>
            <td><b>B.Tanggal Putusan PA/Msy</b></td>
            <td><b>B.Tanggal Putusan PTA/Msy</b></td>
            <td><b>B.Tanggal Putusan MA-RI</b></td>
        </tr>
        <tr bgcolor="#f2f2f2" align="center">
            <td><b>1</b></td>
            <td><b>2</b></td>
            <td><b>3</b></td>
            <td><b>4</b></td>
            <td><b>5</b></td>
            <td><b>6</b></td>
            <td><b>7</b></td>
            <td><b>8</b></td>
            <td><b>9</b></td>
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
							
            $sql  = "SELECT a.nomor_akta_cerai, DATE_FORMAT (a.tgl_akta_cerai, '%d/%m/%Y') AS tgl_ac, a.no_seri_akta_cerai, 
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
                                  WHERE a.tgl_akta_cerai BETWEEN '$dari_tanggal' AND '$sampai_tanggal'
                                  ORDER BY a.nomor_akta_cerai ASC";	

                            $query = mysqli_query($koneksi2, $sql) or die("SQL Anda Salah");
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
              ?>					  
			  
                        <!-- mulai datanya -->
						
                            <tr>
                                <td rowspan="2"><?php echo $nomor?></td>
                                <td rowspan="2"><?= $data['pihak1_text']?></td>
                                <td rowspan="2"><?= $data['pihak2_text']?></td>
                                <td>A.<?= $data['tgl_bht']?></td>
                                <td>A.<?= $data['nomor_akta_cerai']?></td>
                                <td>A.<?= $data['nomor_perkara']?></td>
                                <td>A.</td>
                                <td>A.</td>
                                <td rowspan="2"><?= $data['no_seri_akta_cerai'] ?></td>
                            </tr>
                            <tr>
                                <td>B.<?= $data['tgl_ikrar']?></td>
                                <td>B.<?= $data['tgl_ac']?></td>
                                <td>B.<?= $data['tgl_put']?></td>
                                <td>B.</td>
                                <td>B.</td>
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