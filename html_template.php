<?php

function head() {
	echo "<!DOCTYPE HTML>\n";
	echo "<html>\n";
	echo "<head>\n";
	echo "<title>Sample site</title>\n";
	echo "<meta charset='UTF-8'>\n";
	echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
	echo "<meta name='keyword' content=''>\n";
	echo "<meta name='description' content=''>\n";
	echo "<meta name='author' content=''>\n";
	echo "<script src='./validation.js'></script>\n";
	echo "<link rel='stylesheet' href='index.css'>\n";
	echo "</head>\n";
	echo "<body>\n";
}

function tail() {	
	echo "<a href='../' class='button'>Back to previous screen</a>\n";
	echo "</body>\n";
	echo "</html>\n";
}

?>

