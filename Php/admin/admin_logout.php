<?php
session_start();
if(isset($_SESSION['email'])){
    unset($_SESSION['email']);
}

header( 'Location: http://localhost/WebCompetition/Php/admin/login_form.php' ) ;
?>