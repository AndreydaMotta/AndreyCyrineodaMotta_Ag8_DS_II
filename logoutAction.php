<?php require_once ('verificarAcesso.php'); ?>
<?php
$_SESSION = [];
session_destroy();

header('Location: index.php');
exit;