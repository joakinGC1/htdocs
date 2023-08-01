<?php
    if($_SESSION["is_admin"] != true) header("Location: clientes.php");
?>