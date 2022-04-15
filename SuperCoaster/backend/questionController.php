<?php
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$message = $_POST['message'];

file_put_contents('../questions.txt', $fullName . ", " . $email . " - " . $message, FILE_APPEND);

$msg = 'Thank you for your message';
header("location: ../index.php?msg=$msg");





?>