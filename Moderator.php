<?php
$sqlall = "SELECT * FROM `akundaftar`";
$resultall = $conn->query($sqlall);
$hal = "";
$activeHal = 1;
if (isset($_GET["hal" . $activeHal])) {
  ${"hal" . $activeHal} = "active";
  $_SESSION["hal"] = "0,10";
} else {
  ${"hal" . $activeHal} = "active";
  $_SESSION["hal"] = "0,10";
}
for ($i = 2; $i <= 100; $i++) {
  if (isset($_GET["hal" . $i])) {
    ${"hal" . $i} = "active";
    $_SESSION["hal"] = ($i - 1) * 10 . ",10";
    $activeHal = $i;
    ${"hal1"} = "";
  } else {
    ${"hal" . $i} = "";
  }
}
$sql = "SELECT * FROM `akundaftar` LIMIT $_SESSION[hal]";
$result = $conn->query($sql);
if(isset($_GET['inputsearch'])){
  $sql = "SELECT * FROM `akundaftar` WHERE `Nama`='$_GET[inputsearch]'";
  $result = $conn->query($sql);
  $search = "searching";
}
?>
<body>
  <?php include "Nav.php";?>
  <div class="card m-3">
    <div class="card-body m-3">
      <h4 class="card-title" style="color:#0891C0">Akun Terdaftar</h4>
      <form action="" method="get">
        <div class="row">
          <div class="col-lg-10 col-md-10 col-sm-9 col-7">
            <input hidden name="menu" value="moderator">
            <input class="form-control" type="text" name="inputsearch" placeholder="Nama">
          </div>
          <div class="col-lg-2 col-md-2 col-sm-3 col-5">
            <input class="btn bg-primary text-white btn-sm w-100 mt-1" type="submit" name="search" value="Search">
          </div>
        </div>
      </form>
      <hr><p class="card-text" style="text-align: justify;">
      <table border="1" style="text-align:center;" class="w-100">
        <tr style="background-color:gray">
          <th class="pt-3 pb-3">Nama</th>
          <th>Email</th>
          <th>NISN</th>
          <th>No HP</th>
          <th colspan="2">Action</th>
        </tr>
        <?php
        if (mysqli_num_rows($result)>0) {
          while($row = $result->fetch_assoc()) {
            ?>
            <tr>
              <td class="pt-3 pb-3"><?=$row["Nama"]?></td>
              <td><?=$row["Email"]?></td>
              <td><?=$row["NISN"]?></td>
              <td><?=$row["NoHP"]?></td>
              <td><a href="/Pendaftaran Sekolah/?menu=update&id=<?php echo $row['ID']; ?>">Update</a></td>
              <td><a href="delete.php?id=<?php echo $row['ID']; ?>" onClick="return confirm('Apakah anda yakin?')">Delete</a></td>
            </tr>
          <?php }
        } ?>
      </table>
      <?php if(mysqli_num_rows($resultall)>10) { ?>
            <div class="center mt-4">
                <div class="pagination">
                    <a href="/Pendaftaran Sekolah/?menu=moderator" class="<?=$hal1?>">1</a>
                    <a href="/Pendaftaran Sekolah/?menu=moderator&hal2" class="<?=$hal2?>">2</a>
                    <?php 
                    $max_pages = 100;
                    $links_per_page = 10;
                    for ($i = 3; $i <= $max_pages; $i++) {
                        $hal = "hal" . $i;
                        $condition = ($i - 1) * $links_per_page;
                        if (mysqli_num_rows($resultall) > $condition) {
                            echo '<a href="/Pendaftaran Sekolah/?menu=moderator&' . $hal . '" class="' . ${$hal} . '">' . $i . '</a>';
                        }
                    }
                    ?>
                </div>
            </div>
        <?php } ?>
      </p>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>