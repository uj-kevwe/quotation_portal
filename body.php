<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if($_SESSION['role']=="maker"){
            //    echo $_SESSION['role'];
                require 'maker_dashboard.php';
            }
            elseif($_SESSION['role']=="checker"){
                require 'checker_dashboard.php';
            }
        ?>
    </body>
</html>
