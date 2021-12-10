<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM putpen WHERE id_putpen ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Ubah Data</h1>
          <p>Halaman Ubah Data Putusan / Penetapan</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Data</li>
          <li class="breadcrumb-item active"><a href="#">Edit</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">	  
        <div class="tile">
        <h3 class="tile-title">Ubah Data Putusan / Penetapan</h3>
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
                                <input type="text" name="nomor_putpen" value="<?=$data['nomor_putpen']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Putusan/Permohonan" required>
                            </div>
						</div>
                         <div class="form-group">
                            <label for="tanggal_putpen"><strong>Tanggal Putusan/Permohonan</strong></label>
                            <div class="col-sm-6">    
								<input type="date" name="tanggal_putpen" value="<?=$data['tanggal_putpen']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Putusan/Permohonan" required>
                        </div>
						</div>

					    <div class="alert alert-success">
							<strong>Data Penggugat / Pemohon</strong>
						</div>
						
                         <div class="form-group">
						 <div class="col-sm-12">
                            <label for="nama_p"><strong>Nama Penggugat/Pemohon</strong></label>
                                <input type="text" name="nama_p" value="<?=$data['nama_p']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Nama Penggugat/Pemohon" required>
                        </div></div>
                         <div class="form-group">
                            <label for="nik_p"><strong>NIK Penggugat/Pemohon</strong></label>
						<div class="col-sm-6">
                                <input type="text" name="nik_p" value="<?=$data['nik_p']?>"class="form-control" id="inputEmail3" placeholder="Inputkan NIK Penggugat/Pemohon" required>
                        </div></div>						
                         <div class="form-group">
                            <label for="umur_p"><strong>Umur Penggugat/Pemohon (Tahun)</strong></label>
                            <div class="col-sm-2">
                                <input type="text" name="umur_p" value="<?=$data['umur_p']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Umur Penggugat/Pemohon" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="agama_p"><strong>Agama Penggugat/Pemohon</strong></label>
                            <div class="col-sm-6">
                                <select name="agama_p" value="<?=$data['agama_p']?>"class="form-control">
                                    <option value="Islam"<?=$data['agama_p']=='Islam' ? 'selected' : null?>>Islam</option>
                                    <option value="Kristen Protestan"<?=$data['agama_p']=='Kristen Protestan' ? 'selected' : null?>>Kristen Protestan</option>
                                    <option value="Kristen Katolik"<?=$data['agama_p']=='Kristen Katolik' ? 'selected' : null?>>Kristen Katolik</option>
                                    <option value="Hindu"<?=$data['agama_p']=='Hindu' ? 'selected' : null?>>Hindu</option>
                                    <option value="Budha"<?=$data['agama_p']=='Budha' ? 'selected' : null?>>Budha</option>
                                    <option value="Konghucu"<?=$data['agama_p']=='Konghucu' ? 'selected' : null?>>Konghucu</option>
									<option value="Lainnya"<?=$data['agama_p']=='Lainnya' ? 'selected' : null?>>Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan_p"><strong>Pendidikan Penggugat/Pemohon</strong></label>
                            <div class="col-sm-6">
                                <select name="pendidikan_p" value="<?=$data['pendidikan_p']?>"class="form-control">
                                    <option value="SD"<?=$data['pendidikan_p']=='SD' ? 'selected' : null?>>SD</option>
                                    <option value="SMP"<?=$data['pendidikan_p']=='SMP' ? 'selected' : null?>>SMP</option>
                                    <option value="SMA/SMK"<?=$data['pendidikan_p']=='SMA/SMK' ? 'selected' : null?>>SMA/SMK</option>
                                    <option value="D3"<?=$data['pendidikan_p']=='D3' ? 'selected' : null?>>D3</option>
                                    <option value="S1"<?=$data['pendidikan_p']=='S1' ? 'selected' : null?>>S1</option>
                                    <option value="S2"<?=$data['pendidikan_p']=='S2' ? 'selected' : null?>>S2</option>
                                    <option value="S3"<?=$data['pendidikan_p']=='S3' ? 'selected' : null?>>S3</option>
                                    <option value="Tidak Sekolah"<?=$data['pendidikan_p']=='Tidak Sekolah' ? 'selected' : null?>>Tidak Sekolah</option>									
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan_p"><strong>Pekerjaan Penggugat/Pemohon</strong></label>
                            <div class="col-sm-12">
							
                                <input type="text" name="pekerjaan_p" value="<?=$data['pekerjaan_p']?>"class="form-control" id="inputPassword3" placeholder="Inputkan Pekerjaan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat_p"><strong>Alamat Penggugat/Pemohon</strong></label>
                            <div class="col-sm-12">
							<textarea name="alamat_p" class="form-control" id="alamat_p" rows="3"required><?=$data['alamat_p']?></textarea>
                            </div>
                        </div>



					    <div class="alert alert-success">
							<strong>Data Tergugat / Termohon</strong>
						</div>
						
                         <div class="form-group">
                            <label for="nama_t"><strong>Nama Termohon/Tergugat</strong></label>
                            <div class="col-sm-12">
                                <input type="text" name="nama_t" value="<?=$data['nama_t']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Nama Termohon/Tergugat" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="nik_t"><strong>NIK Termohon/Tergugat</strong></label>
                            <div class="col-sm-6">
                                <input type="text" name="nik_t" value="<?=$data['nik_t']?>"class="form-control" id="inputEmail3" placeholder="Inputkan NIK Termohon/Tergugat" required>
                            </div>
                        </div>						
                         <div class="form-group">
                            <label for="umur_t"><strong>Umur Termohon/Tergugat (Tahun)</strong></label>
                            <div class="col-sm-2">
                                <input type="text" name="umur_t" value="<?=$data['umur_t']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Umur Termohon/Tergugat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="agama_t"><strong>Agama Termohon/Tergugat</strong></label>
                            <div class="col-sm-6">
                                <select name="agama_t" value="<?=$data['agama_t']?>"class="form-control">
                                    <option value="Islam"<?=$data['agama_t']=='Islam' ? 'selected' : null?>>Islam</option>
                                    <option value="Kristen Protestan"<?=$data['agama_t']=='Kristen Protestan' ? 'selected' : null?>>Kristen Protestan</option>
                                    <option value="Kristen Katolik"<?=$data['agama_t']=='Kristen Katolik' ? 'selected' : null?>>Kristen Katolik</option>
                                    <option value="Hindu"<?=$data['agama_t']=='Hindu' ? 'selected' : null?>>Hindu</option>
                                    <option value="Budha"<?=$data['agama_t']=='Budha' ? 'selected' : null?>>Budha</option>
                                    <option value="Konghucu"<?=$data['agama_t']=='Konghucu' ? 'selected' : null?>>Konghucu</option>
									<option value="Lainnya"<?=$data['agama_p']=='Lainnya' ? 'selected' : null?>>Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan_t"><strong>Pendidikan Termohon/Tergugat</strong></label>
                            <div class="col-sm-6">
                                <select name="pendidikan_t" value="<?=$data['pendidikan_t']?>"class="form-control">
                                    <option value="SD"<?=$data['pendidikan_t']=='SD' ? 'selected' : null?>>SD</option>
                                    <option value="SMP"<?=$data['pendidikan_t']=='SMP' ? 'selected' : null?>>SMP</option>
                                    <option value="SMA/SMK"<?=$data['pendidikan_t']=='SMA/SMK' ? 'selected' : null?>>SMA/SMK</option>
                                    <option value="D3"<?=$data['pendidikan_t']=='D3' ? 'selected' : null?>>D3</option>
                                    <option value="S1"<?=$data['pendidikan_t']=='S1' ? 'selected' : null?>>S1</option>
                                    <option value="S2"<?=$data['pendidikan_t']=='S2' ? 'selected' : null?>>S2</option>
                                    <option value="S3"<?=$data['pendidikan_t']=='S3' ? 'selected' : null?>>S3</option>
                                    <option value="Tidak Sekolah"<?=$data['pendidikan_t']=='Tidak Sekolah' ? 'selected' : null?>>Tidak Sekolah</option>									
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan_t"><strong>Pekerjaan Termohon/Tergugat</strong></label>
                            <div class="col-sm-12">							
                                <input type="text" name="pekerjaan_t" value="<?=$data['pekerjaan_t']?>"class="form-control" id="pekerjaan_t" placeholder="Inputkan Pekerjaan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat_t"><strong>Alamat Termohon/Tergugat</strong></label>
                            <div class="col-sm-12">
							<textarea name="alamat_t" class="form-control" id="alamat_t" rows="3"required><?=$data['alamat_t']?></textarea>
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
                                <select name="hukum" value="<?=$data['hukum']?>"class="form-control">
                                    <option value="Talak Bain"<?=$data['hukum']=='Talak Bain' ? 'selected' : null?>>Talak Bain</option>
                                    <option value="Talak Raji"<?=$data['hukum']=='Talak Raji' ? 'selected' : null?>>Talak Raji</option>
                                </select>
                            </div>
                        </div>
						
                         <div class="form-group">
                            <label for="keadaan_t"><strong>Keadaan Penggugat/Termohon</strong></label>
                            <div class="col-sm-6">
                                <select name="keadaan_t" value="<?=$data['keadaan_t']?>"class="form-control">
                                    <option value="Bada Dukhul"<?=$data['keadaan_t']=='Bada Dukhul' ? 'selected' : null?>>Bada Dukhul</option>
                                    <option value="Qabla Dukhul"<?=$data['keadaan_t']=='Qabla Dukhul' ? 'selected' : null?>>Qabla Dukhul</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sebab"><strong>Sebab Perceraian</strong></label>
                            <div class="col-sm-6">
                                <input type="text" name="sebab" value="<?=$data['sebab']?>"class="form-control" id="inputPassword3" placeholder="Inputkan Sebab" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="perceraian_ke"><strong>Perceraian Ke</strong></label>
                            <div class="col-sm-2">
                                <input type="text" name="perceraian_ke" value="<?=$data['perceraian_ke']?>"class="form-control" id="inputPassword3" placeholder="Inputkan Perceraian Ke" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="nomor_ac"><strong>Nomor Akta Cerai</strong></label>
                               <div class="col-sm-6">
                                <input type="text" name="nomor_ac" value="<?=$data['nomor_ac']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Akta Cerai" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tanggal_ac"><strong>Tanggal Akta Cerai</strong></label>
                                <div class="col-sm-6">
                                <input type="date" name="tanggal_ac" value="<?=$data['tanggal_ac']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Akta Cerai" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="nomor_an"><strong>Nomor Akta Nikah</strong></label>
                               <div class="col-sm-6">
                                <input type="text" name="nomor_an" value="<?=$data['nomor_an']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Akta Nikah" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tanggal_an"><strong>Tanggal Akta Nikah</strong></label>
                                <div class="col-sm-6">
                                <input type="date" name="tanggal_an" value="<?=$data['tanggal_an']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Akta Nikah" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="kua_an"><strong>KUA Akta Nikah</strong></label>
                            <div class="col-sm-12">
							<textarea name="kua_an" class="form-control" id="kua_an" rows="3"required><?=$data['kua_an']?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="iddah"><strong>Iddah</strong></label>
                            <div class="col-sm-6">
                                <select name="iddah" value="<?=$data['iddah']?>"class="form-control">
                                    <option value="Suci"<?=$data['iddah']=='Suci' ? 'selected' : null?>>Suci</option>
                                    <option value="Haidh"<?=$data['iddah']=='Haidh' ? 'selected' : null?>>Haidh</option>									
                                    <option value="Hamil"<?=$data['iddah']=='Hamil' ? 'selected' : null?>>Hamil</option>
                                    <option value="Tidak Diketahui"<?=$data['iddah']=='Tidak Diketahu' ? 'selected' : null?>>Tidak Diketahui</option>
                                </select>
                            </div>
                        </div>


                         <div class="form-group">
                            <label for="lama_kawin"><strong>Lama Kawin (Tahun)</strong></label>
                            <div class="col-sm-2">
                                <input type="text" name="lama_kawin" value="<?=$data['lama_kawin']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Lama Kawin" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="jenis_perkara"><strong>Jenis Perkara</strong></label>
                            <div class="col-sm-6">
                                <select name="jenis_perkara" value="<?=$data['jenis_perkara']?>"class="form-control">
                                    <option value="Cerai Gugat"<?=$data['jenis_perkara']=='Cerai Gugat' ? 'selected' : null?>>Cerai Gugat</option>
                                    <option value="Cerai Talak"<?=$data['jenis_perkara']=='Cerai Talak' ? 'selected' : null?>>Cerai Talak</option>
                                </select>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tahapan_proses"><strong>Tahapan Proses</strong></label>
                            <div class="col-sm-6">
                                <select name="tahapan_proses" value="<?=$data['tahapan_proses']?>"class="form-control">
                                    <option value="Putusan"<?=$data['tahapan_proses']=='Putusan' ? 'selected' : null?>>Putusan</option>
                                    <option value="Akta Cerai"<?=$data['tahapan_proses']=='Akta Cerai' ? 'selected' : null?>>Akta Cerai</option>
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
                                    <span class="fa fa-edit"></span> Update Data</button>
                            </div>
                        </div>
                    </form>

</div></div>
                </div>
                <div class="panel-footer">
                    <a href="?page=putpen&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Putusan / Penetapan
                    </a>
                </div>
</div>
</div>
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
    $sql="UPDATE putpen SET 
nomor_putpen='$nomor_putpen',
tanggal_putpen='$tanggal_putpen',
nama_p='$nama_p',
nik_p='$nik_p',
umur_p='$umur_p',
agama_p='$agama_p',
pendidikan_p='$pendidikan_p',
pekerjaan_p='$pekerjaan_p',
alamat_p='$alamat_p',
nama_t='$nama_t',
nik_t='$nik_t',
umur_t='$umur_t',
agama_t='$agama_t',
pendidikan_t='$pendidikan_t',
pekerjaan_t='$pekerjaan_t',
alamat_t='$alamat_t',
hukum='$hukum',
keadaan_t='$keadaan_t',
sebab='$sebab',
perceraian_ke='$perceraian_ke',
nomor_ac='$nomor_ac',
tanggal_ac='$tanggal_ac',
nomor_an='$nomor_an',
tanggal_an='$tanggal_an',
kua_an='$kua_an',
iddah='$iddah',
lama_kawin='$lama_kawin',
jenis_perkara='$jenis_perkara',
tahapan_proses='$tahapan_proses'


     WHERE id_putpen ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=putpen&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



