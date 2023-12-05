<?php
require_once("sqlfiles/conn.php");

$sd = $_REQUEST['sd'];
$ed = $_REQUEST['ed'];

// Send headers to initiate file download
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="BASIC_Data.xls"');
header('Cache-Control: max-age=0');

// Output Excel content
echo '<html xmlns:o="urn:schemas-microsoft-com:office:office"
      xmlns:x="urn:schemas-microsoft-com:office:excel"
      xmlns="http://www.w3.org/TR/REC-html40">
      <head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>YourSheetName</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head>
      <body>';

echo '<table>';
// Output headers
echo '<tr><td>No. of Recipients</td><td>No. of Invoices</td>...</tr>'; // Headers

// Fetch and loop through your data
$retrive_query = mysqli_query($conn, "select * from invoice where inv_date BETWEEN '" . $sd . "' AND  '" . $ed . "' ") or die(mysqli_error());

while ($row = mysqli_fetch_array($retrive_query)) {
    $cus = $row['quot_cust'];
    $s = mysqli_query($conn, "SELECT * FROM customer WHERE id='$cus' ") or die(mysqli_error());
    $r = mysqli_fetch_array($s);

    $s = $r['sid'];
    $sd = mysqli_query($conn, "SELECT * FROM state WHERE sid='$s' ") or die(mysqli_error());
    $sdd = mysqli_fetch_array($sd);

    // Output data for each row
    echo '<tr>';
    echo '<td>' . $r['gstin'] . '</td>';
    echo '<td align="center">' . $row['quot_no'] . '</td>';
    echo '<td>' . date("d/m/Y", strtotime($row['inv_date'])) . '</td>';
    echo '<td align="right">' . number_format($row['grandtotal'], 2) . '</td>';
    // ... output other data columns ...
    echo '<td align="right">' . number_format(($row['subtotal'] + $row['transpotation'] + $row['packing']), 2) . '</td>';
    echo '</tr>';
}

echo '</table>';

echo '</body></html>';
