<?php

/**
 * @author Samrat Khan - Apr 8, 2013
 */

function GetCustomerName($id) {
    $query = "SELECT cus_id, cusname FROM customerinfo WHERE cus_id = {$id} LIMIT 1";
    $rows = mysql_query($query);
    $row = @mysql_fetch_array($rows, MYSQL_ASSOC);
    return $row["cusname"];
}
?>
