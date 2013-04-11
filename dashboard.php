<?php

/**
 * @author Samrat Khan - Apr 8, 2013
 */
    require('top.inc.php');
?>
<?php
if(isset($_SESSION['user'])) {
    
} else {
    header("Location: login.php");
}
?>
<?php
    include ('bottom.inc.php');
?>