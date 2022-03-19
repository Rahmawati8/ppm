<?php
if (isset($_POST['kirim'])) {
    $nik =$_POST['nik'];
    $nama =$_POST['nama'];
    $username =$_POST['username'];
    $password =$_POST['password'];
    $telp =$_POST['telp'];

    $query =msqli_query($konek, "insert into pengguna values(
     NULL, '$nik','$nama','$username',
     md5('$password'), '$telp','netijen'
    )");

    if ($query) {
       $pesan = "<div class'alert alert-success'>Akun berhasil dibuat.</div>";
    } else {
       $pesan = "<div class'alert alert-success'>Terjadi kesalahan.</div>";
    }
}
?>

<div class="row">
         <div class="col-md-4 offset-md-4">
             <div class="card">
              <div class="card-header">
                 REGISTRASI 
              </div>
              <div class="card-body">
                 <form action="" method="post">
                     <div class="form-group">
                       <input type="text" name="nik" class="form-control" placeholder="NIK" required autofocus>    
                     </div>
                     <div class="form-group">
                        <input type="text" name="nama" class="form-control" placeholder="Nama lengkap" required autofocus>
                    </div>
                    <div class="form-group">
                       <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                    </div>
                    <div class="form-group">
                       <input type="password" name="password" class="form-control" placeholder="password" required autofocus>
                    </div>
                    <div class="form-group">
                       <label for="">No.telepon</label>
                       <input type="number" name="telp" class="form-control" placeholder="No.telepon" required autofocus>
                    </div>
                    <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>  
</div>
<a href="menu=login" class="text- muted"> Sudah Punya Akun? Login Sini </a>
                 </form> 
              </div>   
             </div>
         </div>   
        </div>