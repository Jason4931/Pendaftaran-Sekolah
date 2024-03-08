<?php
$home="";
$daftar="";
$moderator="";
if($_SESSION["Active"] == "home"){
  $home="active";
}
else if($_SESSION["Active"] == "daftar"){
  $daftar="active";
}
else if($_SESSION["Active"] == "moderator"){
  $moderator="active";
}
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link <?=$home?>" href="/Pendaftaran Sekolah/?menu=home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn bg-success-subtle <?=$daftar?>" href="/Pendaftaran Sekolah/?menu=daftar">Daftar Siswa</a>
          </li>
          <?php if($_SESSION['Akses']=="Admin") {?>
          <li class="nav-item ms-lg-4">
            <a class="nav-link <?=$moderator?> ms-lg-4 me-lg-0 me-4 btn bg-warning-subtle" href="/Pendaftaran Sekolah/?menu=moderator">Moderator</a>
          </li>
          <?php } ?>
        </ul>
        <div class="d-flex">
          <span class="mx-2 text-end"><a href="" style="text-decoration:none"><?=$_SESSION["Nama"]?></a><a href="/Pendaftaran Sekolah/?logout" class="nav-link">Logout</a></span>
          <img class="d-block float-end" src="./Logo SMKN 4.jpeg" alt="" width="95px">
        </div>
      </div>
    </div>
</nav>