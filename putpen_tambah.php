    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Tambah Data</h1>
          <p>Halaman Tambah Data Putusan / Penetapan</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Data</li>
          <li class="breadcrumb-item active"><a href="#">Tambah</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">	  
        <div class="tile">
        <h3 class="tile-title">Tambah Data Putusan / Penetapan</h3>
		<div class="row">
                <div class="col-lg-6">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">

					    <div class="alert alert-success">
							<strong>Data Perkara</strong>
						</div>
                        <div class="form-group">
                            <label for="nomor_putpen"><strong>Nomor Putusan/Permohonan:</strong></label>
							<div class="col-sm-6">
                                <input type="text" name="nomor_putpen" class="form-control" id="inputEmail3" placeholder="" required>
                            </div>
						</div>
						
                         <div class="form-group">
                            <label for="tanggal_putpen"><strong>Tanggal Putusan/Permohonan</strong></label>
                            <div class="col-sm-6">    
							  <input type="date" name="tanggal_putpen" class="form-control" id="inputEmail3" placeholder="" required>
                            </div>
						</div>
                         <div class="form-group">
                            <label for="tanggal_putpen"><strong>Tanggal Putusan/Permohonan</strong></label>
                            <div class="col-sm-6">    
							  <input type="date" name="tanggal_putpen" class="form-control" id="inputEmail3" placeholder="" required>
                            </div>
						</div>
						
					    <div class="alert alert-success">
							<strong>Data Penggugat / Pemohon</strong>
						</div>
						
                         <div class="form-group">
						 <div class="col-sm-12">
                            <label for="nama_p"><strong>Nama Penggugat/Pemohon</strong></label>
                                <input type="text" name="nama_p" class="form-control" id="inputEmail3" placeholder="" required>
                        </div></div>
                         <div class="form-group">
                            <label for="nik_p"><strong>NIK Penggugat/Pemohon</strong></label>
						<div class="col-sm-6">
                                <input type="text" name="nik_p" class="form-control" id="inputEmail3" placeholder="" required>
                        </div></div>						
                         <div class="form-group">
                            <label for="umur_p"><strong>Umur Penggugat/Pemohon (Tahun)</strong></label>
                            <div class="col-sm-2">
                                <input type="text" name="umur_p" class="form-control" id="inputEmail3" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="agama_p"><strong>Agama Penggugat/Pemohon</strong></label>
                            <div class="col-sm-6">
                                <select name="agama_p" class="form-control">
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                    <option value="Kristen Katolik">Kristen Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>									
									<option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan_p"><strong>Pendidikan Penggugat/Pemohon</strong></label>
                            <div class="col-sm-6">
                                <select name="pendidikan_p" class="form-control">
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA/SMK">SMA/SMK</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                    <option value="Tidak Sekolah">Tidak Sekolah</option>									
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan_p"><strong>Pekerjaan Penggugat/Pemohon</strong></label>
                            <div class="col-sm-12">
							
                                <input type="text" name="pekerjaan_p" class="form-control" id="inputPassword3" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat_p"><strong>Alamat Penggugat/Pemohon</strong></label>
                            <div class="col-sm-12">
							<textarea name="alamat_p" class="form-control" id="alamat_p" rows="3"required></textarea>
                            </div>
                        </div>



					    <div class="alert alert-success">
							<strong>Data Tergugat / Termohon</strong>
						</div>
						
                         <div class="form-group">
                            <label for="nama_t"><strong>Nama Termohon/Tergugat</strong></label>
                            <div class="col-sm-12">
                                <input type="text" name="nama_t" class="form-control" id="inputEmail3" placeholder="" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="nik_t"><strong>NIK Termohon/Tergugat</strong></label>
                            <div class="col-sm-6">
                                <input type="text" name="nik_t" class="form-control" id="inputEmail3" placeholder="" required>
                            </div>
                        </div>						
                         <div class="form-group">
                            <label for="umur_t"><strong>Umur Termohon/Tergugat (Tahun)</strong></label>
                            <div class="col-sm-2">
                                <input type="text" name="umur_t" class="form-control" id="inputEmail3" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="agama_t"><strong>Agama Termohon/Tergugat</strong></label>
                            <div class="col-sm-6">
                                <select name="agama_t" class="form-control">
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                    <option value="Kristen Katolik">Kristen Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>									
									<option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan_t"><strong>Pendidikan Termohon/Tergugat</strong></label>
                            <div class="col-sm-6">
                                <select name="pendidikan_t" value="<?=$data['pendidikan_t']?>"class="form-control">
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA/SMK">SMA/SMK</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                    <option value="Tidak Sekolah">Tidak Sekolah</option>									
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan_t"><strong>Pekerjaan Termohon/Tergugat</strong></label>
                            <div class="col-sm-12">							
                                <input type="text" name="pekerjaan_t" class="form-control" id="pekerjaan_t" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat_t"><strong>Alamat Termohon/Tergugat</strong></label>
                            <div class="col-sm-12">
							<textarea name="alamat_t" class="form-control" id="alamat_t" rows="3"required></textarea>
                            </div>
                        </div>
                        </div>
						<div class="col-lg-6">
					    <div class="alert alert-success">
							<strong>Data Perceraian</strong>
						</div>

                         <div class="form-group">
                            <label for="hukum"><strong>Hukum</strong></label>
                            <div class="col-sm-6">
                                <select name="hukum" class="form-control">
                                    <option value="Talak Bain">Talak Bain</option>
                                    <option value="Talak Raji">Talak Raji</option>
                                </select>
                            </div>
                        </div>
						
                         <div class="form-group">
                            <label for="keadaan_t"><strong>Keadaan Penggugat/Termohon</strong></label>
                            <div class="col-sm-6">
                                <select name="keadaan_t" class="form-control">
                                    <option value="Bada Dukhul">Bada Dukhul</option>
                                    <option value="Qabla Dukhul">Qabla Dukhul</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sebab"><strong>Sebab Perceraian</strong></label>
                            <div class="col-sm-6">
                                <input type="text" name="sebab" class="form-control" id="inputPassword3" placeholder="" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="perceraian_ke"><strong>Perceraian Ke</strong></label>
                            <div class="col-sm-2">
                                <input type="text" name="perceraian_ke" class="form-control" id="inputPassword3" placeholder="" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="nomor_ac"><strong>Nomor Akta Cerai</strong></label>
                               <div class="col-sm-6">
                                <input type="text" name="nomor_ac" class="form-control" id="inputEmail3" placeholder="" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tanggal_ac"><strong>Tanggal Akta Cerai</strong></label>
                                <div class="col-sm-6">
                                <input type="date" name="tanggal_ac" class="form-control" id="inputEmail3" placeholder="" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="nomor_an"><strong>Nomor Akta Nikah</strong></label>
                               <div class="col-sm-6">
                                <input type="text" name="nomor_an"  class="form-control" id="inputEmail3" placeholder="" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tanggal_an"><strong>Tanggal Akta Nikah</strong></label>
                                <div class="col-sm-6">
                                <input type="date" name="tanggal_an" class="form-control" id="inputEmail3" placeholder="" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="kua_an"><strong>KUA Akta Nikah</strong></label>
                            <div class="col-sm-12">
							<textarea name="kua_an" class="form-control" id="kua_an" rows="3"required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="iddah"><strong>Iddah</strong></label>
                            <div class="col-sm-6">
                                <select name="iddah" class="form-control">
                                    <option value="Suci">Suci</option>
                                    <option value="Haidh">Haidh</option>									
                                    <option value="Hamil">Hamil</option>
                                    <option value="Tidak Diketahui">Tidak Diketahui</option>
                                </select>
                            </div>
                        </div>


                         <div class="form-group">
                            <label for="lama_kawin"><strong>Lama Kawin (Tahun)</strong></label>
                            <div class="col-sm-2">
                                <input type="text" name="lama_kawin" class="form-control" id="inputEmail3" placeholder="" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="jenis_perkara"><strong>Jenis Perkara</strong></label>
                            <div class="col-sm-6">
                                <select name="jenis_perkara" class="form-control">
                                    <option value="Cerai Gugat">Cerai Gugat</option>
                                    <option value="Cerai Talak">Cerai Talak</option>
                                </select>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tahapan_proses"><strong>Tahapan Proses</strong></label>
                            <div class="col-sm-6">
                                <select name="tahapan_proses" class="form-control">
                                    <option value="Putusan">Putusan</option>
                                    <option value="Akta Cerai">Akta Cerai</option>
                                </select>
                            </div>
                        </div>

					    <div class="alert alert-success">
							<strong>Simpan Data</strong>
						</div>
              <div class="card mb-3 border-warning">
                <div class="card-body">
                  <blockquote class="card-blockquote">
                    <p>Pastikan data yang anda masukkan sudah benar dan tidak ada yang terlupa. Jika sudah silahkan klik tombol hijau dibawah ini</p>
                  </blockquote>
                </div>
              </div>

                        <!--Simpan Data-->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Tambah Data</button>
                            </div>
                        </div>
                    </form>

</div></div>
      </div>
</div>
</div>
                <div class="panel-footer">
                    <a href="?page=putpen&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Putusan / Penetapan
                    </a>
                </div>	  
    </main>




<?php
if($_POST){
    //Ambil data dari form
$nomor_putpen=$_POST['nomor_putpen'];
$tanggal_putpen=$_POST['tanggal_putpen'];
$nama_p=$_POST['nama_p'];
$nik_p=$_POST['nik_p'];
$umur_p=$_POST['umur_p'];
$agama_p=$_POST['agama_p'];
$pendidikan_p=$_POST['pendidikan_p'];
$pekerjaan_p=$_POST['pekerjaan_p'];
$alamat_p=$_POST['alamat_p'];
$nama_t=$_POST['nama_t'];
$nik_t=$_POST['nik_t'];
$umur_t=$_POST['umur_t'];
$agama_t=$_POST['agama_t'];
$pendidikan_t=$_POST['pendidikan_t'];
$pekerjaan_t=$_POST['pekerjaan_t'];
$alamat_t=$_POST['alamat_t'];
$hukum=$_POST['hukum'];
$keadaan_t=$_POST['keadaan_t'];
$sebab=$_POST['sebab'];
$perceraian_ke=$_POST['perceraian_ke'];
$nomor_ac=$_POST['nomor_ac'];
$tanggal_ac=$_POST['tanggal_ac'];
$nomor_an=$_POST['nomor_an'];
$tanggal_an=$_POST['tanggal_an'];
$kua_an=$_POST['kua_an'];
$iddah=$_POST['iddah'];
$lama_kawin=$_POST['lama_kawin'];
$jenis_perkara=$_POST['jenis_perkara'];
$tahapan_proses=$_POST['tahapan_proses'];
    //buat sql
    $query=  mysqli_query($koneksi, "INSERT INTO putpen VALUES('', 
'$nomor_putpen',
'$tanggal_putpen',
'$nama_p',
'$nik_p',
'$umur_p',
'$agama_p',
'$pendidikan_p',
'$pekerjaan_p',
'$alamat_p',
'$nama_t',
'$nik_t',
'$umur_t',
'$agama_t',
'$pendidikan_t',
'$pekerjaan_t',
'$alamat_t',
'$hukum',
'$keadaan_t',
'$sebab',
'$perceraian_ke',
'$nomor_ac',
'$tanggal_ac',
'$nomor_an',
'$tanggal_an',
'$kua_an',
'$iddah',
'$lama_kawin',
'$jenis_perkara',
'$tahapan_proses'
)") or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=putpen&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
