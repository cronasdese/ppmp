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
    <div class="container">
        <div>
            <a href="<?php echo base_url('Home_controller/createPPMP'); ?>">
                <button type="button" class="btn btn-default">Create PPMP</button>
            </a>
        </div>
        <div>
            <button type="button" class="btn btn-default">View PPMP</button>
        </div>
    </div>
</body>
</html>