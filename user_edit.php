    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Edit User</h1>
          <p>Ubah Data Pengguna</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">User</li>
          <li class="breadcrumb-item active"><a href="#">Edit</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">	  
        <div class="tile">
        <h3 class="tile-title">Ubah Data Pengguna :</h3>

<?php
$id=$_GET['uid'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM user WHERE username='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>

                    <!--membuat form untuk tambah data-->
					<div class="col-lg-6">
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="user_nama" class="col-sm-3 control-label">Nama User</label>
                             <div class="col-sm-9">
								<input type="text" name="user_nama" value="<?=$data['user_nama']?>"class="form-control" id="inputEmail3" placeholder="Input Nama Lengkap">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" name="username" value="<?=$data['username']?>"class="form-control" id="inputEmail3" placeholder="Input Username">
                            </div>
                        </div>
						</div>
						<div class="col-lg-6">
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" value="<?=$data['email']?>" class="form-control" id="inputPassword3" placeholder="Input Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" value="<?=$data['ket']?>" class="form-control" id="inputPassword3" placeholder="Input Keterangan">
                            </div>
                        </div>
						<div class="form-group">
								<label for="pass" class="col-sm-3 control-label">Password</label>
								<div class="col-sm-9">
									<input type="password" value="" placeholder="ubah password" class="form-control" name="pass" required>
								</div>	
								</div>						
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Ubah Data User</button>
                            </div>
                        </div>
						</div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=user&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data User
                    </a>
                </div>

<?php
if($_POST){
    //Ambil data dari form
    $user_nama=$_POST['user_nama'];
	  $username=$_POST['username'];
		$email =$_POST['email'];
		$ket =$_POST['ket'];
		$pass =$_POST['pass'];		
    //buat sql
    $sql="UPDATE user SET user_nama = '$user_nama', username='$username', email='$email',
	       ket='$ket', pass=md5('$pass') WHERE username='$id'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit User Error");
    if ($query){
        echo "<script>window.location.assign('?page=user&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



</div>
</div>
</div>
    </main>