<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$Email = $_POST['Email'];


mail ($to, $subject, "From: " . $firstname . $lastname);
echo "Your Message has been sent";

?>