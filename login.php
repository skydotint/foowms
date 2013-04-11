<?php
/**
 * @author Samrat Khan - Apr 8, 2013
 */
require 'foo.config.php';
$submitted_username = '';
if (!empty($_POST)) {
    $query = "SELECT * FROM wms_users WHERE username = :username";
    $query_params = array(
        ':username' => $_POST['username']
    );

    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    } catch (PDOException $ex) {
        die("Failed to run query: " . $ex->getMessage());
    }
    $login_ok = false;
    $row = $stmt->fetch();
    if ($row) {
        $check_password = hash('sha256', $_POST['password'] . $row['salt']);
        for ($round = 0; $round < 65536; $round++) {
            $check_password = hash('sha256', $check_password . $row['salt']);
        }

        if ($check_password === $row['password']) {
            $login_ok = true;
        }
    }
    if ($login_ok) {
        unset($row['salt']);
        unset($row['password']);
        $_SESSION['user'] = $row;
        header("Location: dashboard.php");
        die("Redirecting to: dashboard.php");

    } else {
        print("Login Failed.");
        $submitted_username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link href="foo-drawer/css/login.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $(".username").focus(function() {
            $(".user-icon").css("left","-48px");
    });
    $(".username").blur(function() {
            $(".user-icon").css("left","0px");
    });

    $(".password").focus(function() {
            $(".pass-icon").css("left","-48px");
    });
    $(".password").blur(function() {
            $(".pass-icon").css("left","0px");
    });
});
</script>
</head>
<body>
<div id="wrapper">
    <div class="user-icon"></div>
    <div class="pass-icon"></div>
    <form name="login-form" class="login-form" action="" method="post">
        <div class="header">
            <h1>WMS LOGIN</h1>
            <span>Authentication</span>
        </div>
        <div class="content">
            <input name="username" type="text" class="input username" value="<?php echo $submitted_username; ?>" onfocus="this.value=''" />
            <input name="password" type="password" class="input password" value="Password" onfocus="this.value=''" />
        </div>
        <div class="footer">
            <input type="submit" name="submit" value="Login" class="button" />
        </div>
    </form>
</div>
<div class="gradient"></div>
</body>
</html>