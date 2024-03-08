<?php
$host="localhost";
$user="root";
$pass="";
$db="pendaftaran";
$koneksi=mysqli_connect($host, $user, $pass);
$db_koneksi=mysqli_select_db($koneksi, $db);
$id=$_GET['id'];
$query="DELETE FROM akundaftar WHERE `id`='$_GET[id]'";
$hasil=mysqli_query($koneksi, $query);
if($hasil) {
?>
<script language="javascript">
document.location.href="/Pendaftaran Sekolah/?menu=moderator";
</script>
<?php
}else{
    echo "gagal hapus data";
}
?>