<?php
date_default_timezone_set("Asia/Kolkata");
backup_tables('localhost', 'root', 'Kev@l8347', 'saral2');

/* backup the db OR just a table */
$host = 'localhost';
$user = 'root';
$pass = 'Kev@l8347';
$name = 'saral2';

function backup_tables($host, $user, $pass, $name, $tables = '*')
{
    $link = mysqli_connect($host, $user, $pass);
    mysqli_select_db($link, $name);

	
    // get all of the tables
    if ($tables == '*') {
		$tables = array();
        $result = mysqli_query($link, 'SHOW TABLES');
        while ($row = mysqli_fetch_row($result)) {
			$tables[] = $row[0];
        }
    } else {
        $tables = is_array($tables) ? $tables : explode(',', $tables);
    }

    $return = '';

    foreach ($tables as $table) {
        $result = mysqli_query($link, "SELECT * FROM $table");
        $num_fields = mysqli_num_fields($result);

        $row2 = mysqli_fetch_row(mysqli_query($link, 'SHOW CREATE TABLE ' . $table));
        $return .= "\n\n" . $row2[1] . ";\n\n";

        for ($i = 0; $i < $num_fields; $i++) {
            while ($row = mysqli_fetch_row($result)) {
                $return .= 'INSERT INTO ' . $table . ' VALUES(';
                for ($j = 0; $j < $num_fields; $j++) {
                    $row[$j] = addslashes($row[$j]);
                    if (isset($row[$j])) {
                        $return .= '"' . $row[$j] . '"';
                    } else {
                        $return .= '""';
                    }
                    if ($j < ($num_fields - 1)) {
                        $return .= ',';
                    }
                }
                $return .= ");\n";
            }
        }
        $return .= "\n\n\n";
    }

    // save file
    $data = date("F_j_Y_g-i_a");
    $filename = 'C:/Downloads/Billing Software/DATABASE/db-backup-' . $data . '-' . $name . '.sql';

    // Set the Content-Disposition header
    header('Content-Disposition: attachment; filename="' . basename($filename) . '"');

    // Output the content of the file
    echo $return;

    // Exit after sending the file
    exit;
}

?>