<?php

session_start();


if(!isset($_SESSION["id_usuario"]) || !isset($_SESSION["usuario"]))
{

header("Location: ../login/login.html");
exit;
}
?>