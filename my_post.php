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
        <title>My post</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type= "text/css" href="style/home_style2.css">
    </head>
    <body>
        <div class= "row">
            <div class="col-sm-12">
                <center><h2>Your latest Posts</h2></center>
                <?php user_posts();  ?>
            </div>
        </div>   
    </body>
</html>