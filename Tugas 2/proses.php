<?php
    if (isset($_POST['submit'])) {
$Name   = $_POST['Name'] ;
$Email   = $_POST['Email'];
$Pesan    = $_POST['Pesan'];
header("location:https://api.whatsapp.com/send?phone=6281223410886&text=Name:%20$Name%20%0aEmail:%20$Email%20%0aPesan:%20$Pesan");
} 
?>