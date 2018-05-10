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
</head>
<body>
    <!-- Navbar -->
    <?php include_once('./templates/header.php')  ?>
    <!-- End Navbar -->

    <br>
    <div class="container">
        <div class="card mx-auto" style="width: 30rem;">
            <div class="card-header">
                S'enregistrer
            </div>
            <div class="card-body">
                <h5 class="card-title"></h5> 
                <form id="register_form">
                    <div class="form-group">
                        <label for="username">Nom</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Votre Nom">
                    </div>

                    <div class="form-group">
                        <label for="lastname">Prenom</label>
                        <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Votre Nom">
                    </div>

                     <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Retapez Password">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Retapez Password</label>
                        <input type="password" name="re-password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label for="role">Role</label>
                        <select name="role" id="role" class="form-control">
                            <option value="1">Admin</option>
                            <option value="0">Other</option>
                        </select>
                    </div>

                   
                    <button type="submit" name="user_register" class="btn btn-primary"><i class="fa fa-user">&nbsp</i>S'enregistrer</button>
                    <span><a href="index.php">Se connecter</a></span>
                    </form>
            </div>
    
        </div>
    </div>
</body>
</html>