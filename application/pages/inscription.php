<?php
require_once 'application/models/user.php';

if(isset($_POST['newmail']) && isset($_POST['newpass'])){
    sign_in($newmail, $newpass);
}
?>