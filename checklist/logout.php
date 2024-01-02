<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['pass']);
unset($_SESSION['nama']);
unset($_SESSION['email']);
unset($_SESSION['stat']);
unset($_SESSION['rol']);

$_SESSION['berhasil_keluar'] = "Anda telah berhasil keluar !!";
header("location: ../../login.php");