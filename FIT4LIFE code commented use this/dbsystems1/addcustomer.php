<?php
include ("db.php");

$pagename="Add a new customer";
echo "<title>".$pagename."</title>";
echo "<h2>".$pagename."</h2>";

echo "<body>";
echo "<hr><b>".date('d F Y H:i:s')."</b>";
echo "<hr>Fill the form below to add a new customer";


echo "<form method=post action=getcustomer.php>" ;
echo "<table border=0 cellpadding=10>";
echo "<tr><td>*cusID </td>";
echo "<td><input type=text name=form_cusID size=6></td></tr>";
echo "<tr><td>*cusName </td>";
echo "<td><input type=text name=form_cusName size=20></td></tr>";
echo "<tr><td>*custSurname </td>";
echo "<td><input type=text name=form_cusSurname size=20></td></tr>";
echo "<tr><td>*cusEmail </td>";
echo "<td><input type=text name=form_cusEmail size=20></td></tr>";
echo "<tr><td>*custMobileNo </td>";
echo "<td><input type=text name=form_custMobileNo size=20></td></tr>"
/*echo "<tr><td>*companyName</td>";*/
echo "<td><input type=text name=form_companyName size=6></td></tr>"
echo "<tr><td>*companyCode </td>";
echo "<td><input type=text name=form_companyCode size=6></td></tr>"
echo "<tr><td>*staffID </td>";
echo "<td><input type=text name=form_staffID size=6></td></tr>"
echo "<tr><td><input type=submit value='Add Customer'></td>";
echo "<td><input type=reset value='Clear Form'></td></tr>";
echo "</table>"; 
echo "</form>" ;

echo "</body>";
?>