<?php
session_start();

$_SESSION['nome'] = "Vitor Kenzo Onouye Fujihara";

header("location:pagina2.php");