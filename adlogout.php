<?php
session_start();
unset($_SESSION["Did"]);
unset($_SESSION["Pw"]);
header("Location:index.html");
?>
