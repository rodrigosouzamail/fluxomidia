<?php
session_start();
require("conn.php");

unset($_SESSION['sessionUsuario']);
unset($_SESSION['sessionSenha']);
echo "<script>window.location='index.php';</script>";

?>