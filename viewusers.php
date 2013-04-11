<?php

/**
 * @author Samrat Khan - Apr 10, 2013
 */
    require('top.inc.php');
?>
<?php
if(isset($_SESSION['user'])) {
    $query = "SELECT * FROM wms_users";
    try {
        $stmt = $db->prepare($query);
        $stmt->execute();
    } catch (PDOException $ex) {
        die("Failed to run query: " . $ex->getMessage());
    }
    $rows = $stmt->fetchAll();
    echo "<table class=\"table table-hover\">";
            echo "<tr>";
                echo "<th>";
                    echo $wms_users['id'];
                echo "</th>";
                echo "<th>";
                    echo $wms_users['username'];
                echo "</th>";
                echo "<th>";
                    echo $wms_users['email'];
                echo "</th>";
                echo "<th>";
                    echo $wms_users['cus_id'];
                echo "</th>";
                echo "<th>";
                    echo $wms_users['utype'];
                echo "</th>";
                echo "<th>";
                    echo $wms_users['inserteddate'];
                echo "</th>";
            echo "</tr>";
            
        foreach ($rows as $row) {
            echo "<tr>";
                echo "<td>";
                    echo $row['id'];
                echo "</td>";
                echo "<td>";
                    echo $row['username'];
                echo "</td>";
                echo "<td>";
                    echo $row['email'];
                echo "</td>";
                echo "<td>";
                    echo $row['cus_id'];
                echo "</td>";
                echo "<td>";
                    echo $row['utype'];
                echo "</td>";
                echo "<th>";
                    echo $row['inserteddate'];
                echo "</th>";
            echo "</tr>";
        }
    echo "<table>";
} else {
    header("Location: login.php");
}
?>

<?php
    include ('bottom.inc.php');
?>