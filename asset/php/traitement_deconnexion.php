<?php
session_start();
unset($_SESSION['connected']);
unset($_SESSION['nom']);
unset($_SESSION['prenom']);
unset($_SESSION['email']);
header('location:../../index.php')
?>