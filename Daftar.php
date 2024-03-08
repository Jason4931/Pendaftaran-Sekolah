<?php
if(isset($_POST['nama'])) {
    $sql = "SELECT * FROM `akundaftar` WHERE `Nama`='$_POST[nama]' OR `Email`='$_POST[email]' OR `NISN`='$_POST[nisn]' OR `NoHP`='$_POST[nohp]'";
    $result = $conn->query($sql);
    if(mysqli_num_rows($result)>0){
        $fail=true;
        while($row = $result->fetch_assoc()) {
            if($_POST['nama']==$row['Nama']){
                echo '<script>alert("Nama sudah terdaftar!");</script>';
            }else if($_POST['email']==$row['Email']){
                echo '<script>alert("Email sudah terdaftar!");</script>';
            }else if($_POST['nisn']==$row['NISN']){
                echo '<script>alert("NISN sudah terdaftar!");</script>';
            }else if($_POST['nohp']==$row['NoHP']){
                echo '<script>alert("Nomor HP sudah terdaftar!");</script>';
            }
            break;
        }
    }
    if(!$fail){
        $sql2 = "INSERT INTO `akundaftar` (`Nama`, `Email`, `NISN`, `NoHP`) VALUES ('$_POST[nama]', '$_POST[email]', '$_POST[nisn]', '$_POST[nohp]')";
        $result2 = $conn->query($sql2);
        if($result2){
            header("location: /Pendaftaran Sekolah/?menu=daftar");
        }
    }
}
?>
<body>
  <?php include "Nav.php"; ?>
  <div class="card m-3">
    <div class="card-body m-3">
        <div style="color:#555566">
            <h2>Pendaftaran</h2>
            <b><?php if(date("l") == "Sunday") {
                echo "Minggu ";
            } else if(date("l") == "Monday") {
                echo "Senin ";
            } else if(date("l") == "Tuesday") {
                echo "Selasa ";
            } else if(date("l") == "Wednesday") {
                echo "Rabu ";
            } else if(date("l") == "Thursday") {
                echo "Kamis ";
            } else if(date("l") == "Friday") {
                echo "Jumat ";
            } else if(date("l") == "Saturday") {
                echo "Sabtu ";
            } ?></b><?php
            echo date("j F Y / h:i A"); ?>
        </div><hr>
        <form action="" method="post" class="row">
            <input hidden name="menu" value="absensiu">

            <div class="col-lg-2 col-md-3 col-sm-4 col-12 mt-1">
                <label class="form-label py-1"> Nama: </label>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8 col-12 mt-sm-1 mt-0">
                <input class="form-control" type="text" name="nama" placeholder="<?=$_SESSION['Nama']?>" required>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-12 mt-sm-1 mt-0">
                <label class="form-label py-1"> Email: </label>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8 col-12 mt-sm-1 mt-0">
                <input class="form-control" type="email" name="email" placeholder="<?=$_SESSION['Email']?>" required>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-12 mt-sm-1 mt-0">
                <label class="form-label py-1"> Nomor HP: </label>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8 col-12 mt-sm-1 mt-0">
                <input class="form-control" type="text" name="nohp" placeholder="Nomor HP" required>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-12 mt-sm-1 mt-0">
                <label class="form-label py-1"> NISN: </label>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8 col-12 mt-sm-1 mt-0">
            <input class="form-control" type="text" name="nisn" placeholder="NISN" required>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-12 mt-sm-3 mt-0">
                <label class="form-label py-1"> Fotokopi Rapor Atau Ijazah Terakhir: </label>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8 col-12 mt-sm-4 mt-0">
                <input class="form-control" type="file" name="rapor">
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-12 mt-sm-1 mt-0">
                <label class="form-label py-1"> Fotokopi KK: </label>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8 col-12 mt-sm-1 mt-0">
            <input class="form-control" type="file" name="kk">
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-12 mt-sm-1 mt-0">
                <label class="form-label py-1"> Pas Foto Terbaru: </label>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8 col-12 mt-sm-1 mt-0">
            <input class="form-control" type="file" name="foto">
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                <label class="form-label py-1"> Surat Keterangan Sehat Dari Dokter: </label>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8 col-12 mt-sm-2 mt-0">
            <input class="form-control" type="file" name="surat">
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-12 mt-sm-1 mt-0">
                <label class="form-label py-1"> Fotokopi Akta Kelahiran: </label>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8 col-12 mt-sm-1 mt-0">
            <input class="form-control" type="file" name="akta">
            </div>

            <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                <label class="form-label py-1"> Surat Rekomendasi Dari Sekolah Sebelumnya: (Jika Ada) </label>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8 col-12 mt-sm-4 mt-0">
            <input class="form-control" type="file" name="surat">
            </div>
            
            <div class="col-12 mt-2">
                <input class="btn bg-primary text-white w-100" type="submit" name="daftar" value="Submit"><br>
            </div>
        </form><br>
    </div>
  </div>
</body>
</html>