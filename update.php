<?php
include "Nav.php";
$host="localhost";
$user="root";
$pass="";
$db="pendaftaran";
$koneksi=mysqli_connect($host, $user, $pass);
$db_koneksi=mysqli_select_db($koneksi, $db);
$id=$_GET['id'];
$sql = "SELECT * FROM `akundaftar` WHERE `id`='$id'";
$result = $koneksi->query($sql);
if (mysqli_num_rows($result)>0) {
    while($row = $result->fetch_assoc()) {
        ?>
        <div class="m-4">
            <form method="post" action="">
                Nama: <input class="form-control" type="text" name="nama" value="<?=$row["Nama"]?>"><br>
                Email: <input class="form-control" type="text" name="email" value="<?=$row["Email"]?>"><br>
                NISN: <input class="form-control" type="text" name="nisn" value="<?=$row["NISN"]?>"><br>
                Nomor HP: <input class="form-control" type="text" name="nohp" value="<?=$row["NoHP"]?>"><br>
                <input class="btn bg-primary text-white" type="submit">
            </form>
        </div>
        <?php
    }
}
if(isset($_POST['nama'])){
    $query="UPDATE akundaftar SET `Nama`='$_POST[nama]', `Email`='$_POST[email]', `NISN`='$_POST[nisn]', `NoHP`='$_POST[nohp]' WHERE `id`='$id'";
    $hasil=mysqli_query($koneksi, $query);
    if($hasil) {
        // header('location:/Pendaftaran Sekolah/?menu=moderator');
        ?><script language="javascript">document.location.href="/Pendaftaran Sekolah/?menu=moderator";</script><?php
    }else{
        echo "Gagal update data";
        echo mysqli_error($koneksi);
    }
}
?>