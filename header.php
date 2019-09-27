<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
           
            body { 
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
            }

            .header {
                top:0;
                position:fixed;
                width:100%;
                overflow: hidden;
                background-color: #f1f1f1;
                padding: 5px;
              z-index: 1;
            }

            .header a {
                float: left;
                color: black;
                text-align: center;
                padding: 12px;
                text-decoration: none;
                font-size: 14px; 
                line-height: 25px;
                border-radius: 4px;
            }

            .header a.logo {
               
                font-weight: bold;
            }

            .header a:hover {
                background-color: #ddd;
                color: black;
            }

            .header a.active {
                background-color: dodgerblue;
                color: white;
            }

            .header-right {
                float: right;
            }

            @media screen and (max-width: 500px) {
                .header a {
                    float: none;
                    display: block;
                    text-align: left;
                }

                .header-right {
                    float: none;
                }
            }

        </style>
    </head>
    <body>

        <div class="header">
            <a href="#" class="logo"><img src='images/IDS Logo.JPG' style='width:50%'></a>
            <span style='color:red; margin-left:1px;text-align: left;'><?php echo $_SESSION['names']; ?></span>
    <!--        <span class='glow' style="margin-left:20px;">IDS AUTOMATED QUOTE PORTAL</span> -->
            <div class="header-right">
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </body>
</html>
