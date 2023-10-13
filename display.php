<?php

include './auth.php';

require './html_template.php';

head();

function display() {
	global $servername, $username, $password;
	$conn = new mysqli($servername, $username, $password);
	$conn->connect_error;

	$create_table = "CREATE TABLE IF NOT EXISTS myMetrics.data (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, tp INT, fn INT, fp INT, tn INT)";
	$conn->query($create_table);


	$show = "SELECT * FROM myMetrics.data";
	$result = $conn->query($show);
	if ($result->num_rows > 0) {
		// output data of each row
		echo "<table>\n";
		echo "<tr><th>id</th><th>precision</th><th>recall</th><th>accuracy</th><th>f1 score</th></tr>\n";
		while($row = $result->fetch_assoc()) {
			$id = $row["id"];
			$tp = $row["tp"];
			$fn = $row["fn"];
			$fp = $row["fp"];
			$precision = bcdiv($tp, $tp+$fp, 3);
			$recall = bcdiv($tp, $tp+$fn, 3);
			$accuracy = bcdiv($tn+$tp, $tn+$fp+$tp+$fn, 3);
			$f1_score = 2 * bcdiv($precision * $recall, $precision + $recall, 3);
			echo "<tr><td>" . $row["id"] . "</td><td>" . $precision . "</td><td>" . $recall . "</td><td>" . $accuracy . "</td><td>" . $f1_score . "</td></tr>\n";
		}
		echo "</table>\n";
	} else {
		echo "0 results\n";
	}
	
}

display();

tail();

?>

