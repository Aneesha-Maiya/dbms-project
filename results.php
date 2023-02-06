<!DOCTYPE html>
    <?php
        session_start();
        include("includes/header.php");

        if(!isset($_SESSION['user_email'])){ 
            header("location: index.php");
        }
    ?>

<html>
    <head>
        <title>See results</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type= "text/css" href="style/home_style2.css">
    </head>
    <body>
        <div class= "row">
            <center><h2>See Your results</h2></center>
            <?php results(); ?>        
        </div>   
    </body>
</html>