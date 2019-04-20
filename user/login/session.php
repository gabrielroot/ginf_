<?php 
session_start();

if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  exit('<script>location.href = "/ginf/user/login/index.php"</script>');
}
?>