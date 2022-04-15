<?php
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$titel = $_POST['titel'];
$message = $_POST['message'];

file_put_contents('../questions.txt', $fullName . ", " . $email . ", " . $titel . " - " . $message, FILE_APPEND);

$msg = 'Thank you for your message';
header("location: ../index.php?msg=$msg");





?>