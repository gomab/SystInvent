<?php
    include_once("./database/constants.php");

    if(isset($_SESSION["userid"])){
        header("location:".DOMAIN."/dashboard.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gomab</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--main css -->
    <link rel="stylesheet" href="./css/loader.css">
</head>
<body>
    <div class="overlay">
        <div class="loader">

        </div>
    </div>

    <!-- Navbar -->
    <?php include_once('./templates/header.php')  ?>
    <!-- End Navbar -->

    <br>
    <div class="container">

        <?php
            if(isset($_GET["msg"]) AND !empty($_GET["msg"])){
                ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?=$_GET["msg"] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
            }

        ?>

        <div class="card mx-auto" style="width: 18rem;">
            <img class="card-img-top mx-auto" style="width:60%" src="./images/login.png" alt="Login icon">
            <div class="card-body">
                <h5 class="card-title"></h5> 
                <form id="login_form" onsubmit="return false">
                    <div class="form-group">
                        <label for="log_email">Email</label>
                        <input type="email" class="form-control" name="log_email" id="log_email" aria-describedby="emailHelp"  placeholder="Enter email">
                        <small id="e_error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="log_password">Password</label>
                        <input type="password" class="form-control" name="log_password" id="log_password" placeholder="Password">
                        <small id="p_error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-lock">&nbsp</i>Se connecter</button>
                    <span><a href="register.php">S'enregistrer</a></span>
                    </form>
            </div>
            <div class="card-footer">
                <a href="#">Mot de passe oublié?</a>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
    <script src="js/loader.js"></script>
</body>
</html>