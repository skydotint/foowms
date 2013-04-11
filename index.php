<?php

/**
 * @author Samrat Khan - Apr 7, 2013
 */
if(isset($_SESSION['user'])) {
    header("Location: dashboard.php");
} else {
    header("Location: login.php");
}
?>