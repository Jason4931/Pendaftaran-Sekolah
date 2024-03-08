<?php
session_start();
session_destroy();
header('location: /Pendaftaran Sekolah/?login');
?>