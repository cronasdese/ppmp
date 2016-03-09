<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href= "<?php echo base_url('assets/css/bootstrap.css'); ?>">
    <script src ="<?php echo base_url('assets/js/jquery-2.2.1.js'); ?>"></script>
    <script src ="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">TUP E-PPMP</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="<?php echo base_url('Navbar_controller/goHome'); ?>">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">
                        Create PPMP
                    </a>
                </li>
                <li>
                    <a href="#">
                        View PPMP
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">
                        <span class="glyphicon glyphicon-user"></span> 
                        <?php echo $user_details[0]->name; ?>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <?php echo $user_details[0]->position; ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('Navbar_controller/logout'); ?>">
                        <span class="glyphicon glyphicon-log-out"></span> 
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</body>
</html>