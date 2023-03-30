<?php
if(isset($_SESSION['mail']) && isset($_SESSION['password'])){
    session_destroy();
    header('Location:index.php');
}
?>