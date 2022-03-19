<?php
if (isset($_POST['kirim'])) {
    $username = $_POST['username'];
    $username = $_POST['password'];

    $query = mysql_query($konek, "select * from pengguna where
    username='$username' and password=md5('$password') ");
    
    $jumlah = mysqli_num_rows($query);

    if ($jumlah > 0) {
        $sesi = mysql_fetch_assoc($query);

        $_SESSION['id'] = $sesi['id_pengguna'];
        $_SESSION['nik'] = $sesi['nik'];
        $_SESSION['nama'] = $sesi['nama'];
        $_SESSION['level'] = $sesi['level'];

        print "<meta http-equiv='refresh' content='0; url=?menu=home'>";
      } else {
        $pesan = "<div class='alert alert-danger'>Username & password tidak cocok</div>";
      }
}
?>

</div>
        <div class="row">
         <div class="col-md-4 offset-md-4">
             <div class="card">
              <div class="card-header">
                 LOGIN
              </div>
              <div class="card-body">
               <?php print $pesan?>
                 <form action="" method="post">
                     <div class="form-group">
                       <input type="text" name="uername" class="form-control" placeholder="Username" required autofocus>
                    </div>
                    <div class="form-group">
                       <input type="password" name="password" class="form-control" placeholder="password" required autofocus>
                    </div>
                    <BUtton type="submit" name="kirim" class="btn btn-primary">Kirim</Button>
                 </form> 
              </div>   
             </div>
         </div>   
        </div>