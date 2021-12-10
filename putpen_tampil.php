<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Putusan / Penetapan</h1>
          <p>Pengadilan Agama Nanga Bulik</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>	  
                    <tr>
                      <th>No</th>					
                      <th>No. Perkara</th>
                      <th>Proses</th>
                      <th>Pihak 1</th>
                      <th>Pihak 2</th>
                      <th>Alamat</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
							
            $sql  = "SELECT a.`nomor_perkara`,a.`jenis_perkara_id`,a.`tahapan_terakhir_text`, f.`tgl_nikah`,d.`tanggal_bht`,
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
                                    AND e.`tgl_akta_cerai`  IS NOT NULL ORDER BY e.`nomor_akta_cerai` DESC";	
							

                            $query = mysqli_query($koneksi2, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>					  
                    <tr>
                      <td><?= $nomor ?></td>					
                      <td><?= $data['nomor_perkara'] ?></td>
                      <td><?= $data['tahapan_terakhir_text'] ?></td>
                      <td><?= $data['nama'] ?></td>
                      <td><?= $data['nama2'] ?></td>					  
                      <td><?= $data['alamat'] ?></td>
                      <td>
					  <a href="?page=putpen&actions=detail&id=<?= $data['nomor_perkara'] ?>"><button class="btn btn-primary" type="button">Detail</button></a>
                      <?php } ?>			  
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>