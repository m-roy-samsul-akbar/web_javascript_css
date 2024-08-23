<?php
    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true) {
     echo '<script>window.location="login.php"</script>';
    }

    $query = mysqli_query($conn, "SELECT * FROM tb_admin WHERE admin_id  = '".$_SESSION['id']."' ");
    $d = mysqli_fetch_object($query);
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>owishop</title>
 <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 <!-- header -->
 <header>
  <div class="container">
  <h1><a href="dasboard.php">owishop</a></h1>
  <ul>
   <li><a href="dasboard.php">Dasboard</a></li>
   <li><a href="Profil.php">Profil</a></li>
   <li><a href="data produk.php">Data Produk</a></li>
   <li><a href="keluar.php">Keluar</a></li>
  </ul>
     </div>
 </header>

 <!-- content --> 
 <div class="section">
  <div class="container">
  <h3>Profil</h3>
  <div class="box">
   <form action="" method="POST">
    <input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="<?php echo $d->admin_name ?>" required>
    <input type="text" name="user" placeholder="Username" class="input-control" value="<?php echo $d->username ?>" required>
    <input type="text" name="hp" placeholder="No Hp" class="input-control" value="<?php echo $d->admin_telp ?>" required>
    <input type="email" name="email" placeholder="Email" class="input-control" value="<?php echo $d->admin_email ?>" required>
    <input type="text" name="alamat" placeholder="Alamat" class="input-control" value="<?php echo $d->admin_addres ?>" required>
    <input type="submit" name="submit" value="Ubah Profil" class="btn">
   </form>
   <?php
       if(isset($_POST['submit'])){

        $nama   = $_POST['nama'];
        $user   = $_POST['user'];
        $hp     = $_POST['hp'];
        $email  = $_POST['email'];
        $alamat = $_POST['alamat'];

        $update = mysqli_query($conn, "UPDATE tb_admin SET
                     admin_nama = '".$nama."',
                     username = '".$user."',
                     admin_tlp = '".$hp."',
                     admin_email = '".$email."',
                     admin_addres = '".$alamat."'
                     WHERE admin_id = '".$d->admin_id."' ");
        if($update){
         echo '<script>alert("Ubah data berhasil")</script>';
         echo '<script>window.location="profil.php"<script>';
        }else{
         echo 'gagal '.mysqli_error($conn);
        }
       }

   ?>
  </div> <h3>Ubah Password</h3>
  <div class="box">
   <form action="" method="POST">
    <input type="password" name="pass1" placeholder="password baru" class="input-control"  required>
    <input type="password" name="pass2" placeholder="confirmasi password baru" class="input-control" required>
    <input type="submit" name="ubah_password" value="Ubah password" class="btn">
   </form>
   <?php
       if(isset($_POST['ubah_password'])){

        $pass1  = $_POST['pass1'];
        $pass2  = $_POST['pass2'];

        if ($pass2 != $pass1){
                        echo '<script>alert("konfirmasi password tidak sesuai")</script>';
        }else{
         $u_pass = mysqli_query($conn, "UPDATE tb_admin SET
                     password = '".MD5($pass1)."'
                     WHERE admin_id = '".$d->admin_id."' ");
         if($u_pass){
          echo '<script>alert("Ubah data berhasil")</script>';
             echo '<script>window.location="profil.php"<script>';
         }else{
          echo 'gagal '.mysqli_error($conn);
         }
        }

       }

   ?>
  </div>

 <!-- footer -->
 <footer>
  <div class="container"> 
   <small>Copyright &copy; 2023 - owishop.</small>
  </div>
 </footer>
</body>
</html>