<?php
/**
 * @author Samrat Khan - Apr 9, 2013
 */
require 'top.inc.php';
if(isset($_SESSION['user'])) {
$formLoad = new Form();

if (isset($_POST['addUser'])) {
    if (!empty($_POST)) {
        if (empty($_POST['username'])) {
            die("Please enter a username.");
        }
        if (empty($_POST['password'])) {
            die("Please enter a password.");
        }
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            die("Invalid E-Mail Address");
        }
        $query = "SELECT 1 FROM wms_users WHERE username = :username";
        $query_params = array(
            ':username' => $_POST['username']
        );
        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        } catch (PDOException $ex) {
            die("Failed to run query: " . $ex->getMessage());
        }
        $row = $stmt->fetch();
        
        if ($row) {
            die("This username is already in use");
        }
        $query = "SELECT 1 FROM wms_users WHERE email = :email";
        $query_params = array(':email' => $_POST['email']);

        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        } catch (PDOException $ex) {
            die("Failed to run query: " . $ex->getMessage());
        }
        $row = $stmt->fetch();
        if ($row) {
            die("This email address is already registered");
        }
        $query = "INSERT INTO wms_users ( username, password, salt, email, utype, cus_id, inserteddate, isActive ) VALUES ( :username, :password, :salt, :email, :utype, :cus_id, :inserteddate, :isActive )";
        
        
        $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647));
        $password = hash('sha256', $_POST['password'] . $salt);
        
        for ($round = 0; $round < 65536; $round++) {
            $password = hash('sha256', $password . $salt);
        }
        
        $query_params = array(
            ':username' => $_POST['username'],
            ':password' => $password,
            ':salt' => $salt,
            ':email' => $_POST['email'],
            ':utype' => $_POST['usertype'],
            ':cus_id' => $_POST['cus_id'],
            ':inserteddate' => date('Y-m-d H:i:s'),
            ':isActive' => $_POST['isActive']
        );

        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        } catch (PDOException $ex) {
            die("Failed to run query: " . $ex->getMessage());
        }
        header("Location: dashboard.php");
        die("Redirecting to dashboard.php");
    }
} else {
    ?>
    <form class="form-horizontal" action="" method="post">

        <div class="control-group">
            <label class="control-label" for="username"><?php echo $wms_users['username']; ?></label>
            <div class="controls"><?php echo $formLoad->textField('username', "span2", "", $wms_users['username']); ?></div>
        </div>
        <div class="control-group">
            <label class="control-label" for="email"><?php echo $wms_users['email']; ?></label>
            <div class="controls"><?php echo $formLoad->textField('email', "span2", "", $wms_users['email']); ?></div>
        </div>
        <div class="control-group">
            <label class="control-label" for="password"><?php echo $wms_users['password']; ?></label>
            <div class="controls"><?php echo $formLoad->passwordField('password', "span2", ""); ?></div>
        </div>
        <div class="control-group">
            <label class="control-label" for="usertype"><?php echo $wms_users['usertype']; ?></label>
            <div class="controls">
                <select name="usertype">
                    <option value="1">Super Administrator</option>
                    <option value="2">Administrator</option>
                    <option value="3">Warehouse Manager</option>
                    <option value="4">Customer</option>
                    <option value="5">Operator</option>
                </select>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="usertype"><?php echo $wms_users['usertype']; ?></label>
            <div class="controls">
                <select name="cus_id">
                    <?php
                        $query = "SELECT cus_id, cusname FROM customerinfo";
                        try {
                            $stmt = $db->prepare($query);
                            $stmt->execute();
                        } catch (PDOException $ex) {
                            die("Failed to run query: " . $ex->getMessage());
                        }
                        $rows = $stmt->fetchAll();
                        foreach($rows as $row):
                    ?>
                        <option value="<?php echo $row['cus_id']; ?>"><?php echo htmlentities($row['cusname'], ENT_QUOTES, 'UTF-8'); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        
        <input type="hidden" value="" name="inserteddate" />
        <input type="hidden" value="1" name="isActive" />
        
        <div class="control-group">
            <label class="control-label" for="inputEmail">&nbsp;</label>
            <div class="controls"><input class="btn btn-primary" type="submit" value="Add User" name="addUser" /></div>
        </div>

    </form>
    <?php
    require 'bottom.inc.php';
}
} else {
    header("Location: login.php");
}
?>