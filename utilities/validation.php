<?php

 function test_input($data) {
    $errDate = "";
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
	return $data;
 }
?>