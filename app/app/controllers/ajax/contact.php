<?php

if(isset($_POST['submit'])){

$data = json_encode($_POST);

mail("anandrmedia@gmail.com","New Enquiry from Website",$data);

header("Location: http://colorpencil.avesacademy.org/index.php/Avesacademy_c/contactus?success=1");
}