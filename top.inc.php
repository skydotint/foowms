<?php
require('foo.config.php');
/**
 * @author Samrat Khan - Apr 9, 2013
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $BasicInfo['title']; ?> Version: <?php echo $BasicInfo['version']; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $BasicInfo['description']; ?>">
        <meta name="author" content="<?php echo $BasicInfo['author']; ?>">
        <link href="<?php echo CONTENTPATH; ?>/foo-drawer/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo CONTENTPATH; ?>/foo-drawer/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="<?php echo CONTENTPATH; ?>/foo-drawer/css/custom.css" rel="stylesheet">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="ico/favicon.png">
    </head>
    <body>
<?php
    if(!empty($_SESSION['user'])) {
?>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="row-fluid">
            <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="dashboard.php" class="brand">WMS v 0.1</a>
            <div class="nav-collapse collapse">
                <ul role="navigation" class="nav">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" role="button" href="#" id="drop1">Inbound <b class="caret"></b></a>
                        <ul aria-labelledby="drop1" role="menu" class="dropdown-menu">
                            <li role="presentation"><a href="siEntry.php" tabindex="-1" role="menuitem">Inbound Entry</a></li>
                            <li role="presentation"><a href="grid.php" tabindex="-1" role="menuitem">Inbound Report</a></li>
                            <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Inbound Backup</a></li>
                            <li class="divider" role="presentation"></li>
                            <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Other</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" role="button" id="drop2" href="#">Outbound <b class="caret"></b></a>
                        <ul aria-labelledby="drop2" role="menu" class="dropdown-menu">
                            <li role="presentation"><a href="soEntry.php" tabindex="-1" role="menuitem">Outbound Entry</a></li>
                            <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Outbound Report</a></li>
                            <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Outbound Backup</a></li>
                            <li class="divider" role="presentation"></li>
                            <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Other</a></li>
                        </ul>
                    </li> 
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" role="button" id="drop2" href="#">Return <b class="caret"></b></a>
                        <ul aria-labelledby="drop2" role="menu" class="dropdown-menu">
                            <li role="presentation"><a href="soEntry.php" tabindex="-1" role="menuitem">Return Entry</a></li>
                            <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Return Report</a></li>
                            <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Return Backup</a></li>
                            <li class="divider" role="presentation"></li>
                            <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Other</a></li>
                        </ul>
                    </li> 
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" role="button" id="drop2" href="#">Admin Panel <b class="caret"></b></a>
                        
                        <ul aria-labelledby="dropdownMenu" role="menu" class="dropdown-menu">
                            <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Warehouse</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" tabindex="-1">Add Warehouse</a></li>
                                    <li><a href="#" tabindex="-1">View Warehouses</a></li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Users</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo CONTENTPATH; ?>/create-user.php" tabindex="-1">Add User</a></li>
                                    <li><a href="#" tabindex="-1">View Users</a></li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Engineer</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" tabindex="-1">Add Engineer</a></li>
                                    <li><a href="#" tabindex="-1">View Engineers</a></li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Bearer</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" tabindex="-1">Add Bearer</a></li>
                                    <li><a href="#" tabindex="-1">View Bearers</a></li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li class="dropdown-submenu">
                            <a href="#" tabindex="-1">Customer</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" tabindex="-1">Add Customer</a></li>
                                    <li><a href="#" tabindex="-1">View Customers</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" role="button" id="drop2" href="#">User Profile <b class="caret"></b></a>
                        <ul aria-labelledby="drop2" role="menu" class="dropdown-menu">
                            <li role="presentation"><a href="#" tabindex="-1" role="menuitem">View Profile</a></li>
                            <li role="presentation"><a href="edit_account.php" tabindex="-1" role="menuitem">Edit Profile</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav pull-right settings">
                    <li class="divider-vertical"></li>
                    <li><a data-placement="bottom" data-original-title="Logout" class="tip icon logout" href="dashboard.php"><i class="icon-large icon-user"></i> <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?></a></li>
                    <li class="divider-vertical"></li>
                    <li><a data-placement="bottom" data-original-title="Logout" class="tip icon logout" href="logout.php"><i class="icon-large icon-off"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<div class="row-fluid">