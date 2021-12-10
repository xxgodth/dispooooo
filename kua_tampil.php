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
                      <th>Penggugat/Pemohon</th>
                      <th>Tergugat/Termohon</th>
                      <th>Nomor Putusan</th>
                      <th>Tanggal Putusan</th>					  
                      <th>Nomor Akta Cerai</th>
                      <th>Tanggal Akta Cerai</th>
					  
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
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
                    $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>					  
                    <tr>
                      <td><?= $nomor ?></td>					
                      <td><?= $data['pihak1_text'] ?></td>
                      <td><?= $data['pihak2_text'] ?></td>
                      <td><?= $data['nomor_perkara'] ?></td>					  
                      <td><?= $data['tgl_put'] ?></td>					  
                      <td><?= $data['nomor_akta_cerai'] ?></td>
                      <td><?= $data['tgl_ac'] ?></td>					  
                      <td>
					  <a href="?page=kua&actions=detail&id=<?= $data['nomor_perkara'] ?>"><button class="btn btn-primary" type="button">Detail</button></a>
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