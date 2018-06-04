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
        <div class="row">
            <div class="col-md-4">
                <div class="card mx-auto" style="width: 18rem;">
                    <img class="card-img-top mx-auto" style="width:60%" src="./images/user.png" alt="Login icon">
                    <div class="card-body">
                        <h5 class="card-title"><strong class="text-center">Votre Profil</strong></h5> 
                        <p class="card-text"><i class="fa fa-user">&nbsp;</i>Ma Fumu</p>
                        <p class="card-text"><i class="fa fa-user">&nbsp;</i>Admin</p>
                        <p class="card-text">Derniere connection: xxxx-xx-xx</p>
                        <a href="#" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>
                        Editer
                        </a>
                    
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="jumbotron" style="width:100%; height:100%;">
                    <h1>Bienvenu Admin,</h1>
                    <div class="row">
                        <div class="col-sm-6">
                            <iframe src="http://free.timeanddate.com/clock/i677i7mb/n336/szw110/szh110/hocbbb/hbw6/cf100/hgr0/fas16/fdi64/mqc000/mqs4/mql20/mqw2/mqd94/mhc000/mhs3/mhl20/mhw2/mhd94/mmc000/mml10/mmw1/mmd94/hmr7/hsc000/hss1/hsl90" frameborder="0" width="110" height="110">
                            </iframe>
                        </div>
                        <div class="col-sm-6">     
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Commandes</h4>
                                    <p class="card-text">Gestion des Commandes</p>
                                    <a href="#" class="btn btn-primary">Nouvelle Commande</a>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body" style="width: 20rem;">
                        <h4 class="card-title">Categories</h4>
                        <p class="card-text">Gestion des Categories</p>
                        <a href="#" data-toggle="modal" data-target="#category-add" class="btn btn-primary">Ajouter</a>
                        <a href="#" class="btn btn-primary">Gérer</a>
                    </div>
                </div>                
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body" style="width: 20rem;">
                        <h4 class="card-title">Brands</h4>
                        <p class="card-text">Gestion des marques</p>
                        <a href="#" data-toggle="modal" data-target="#brand-add" class="btn btn-primary">Ajouter</a>
                        <a href="#" class="btn btn-primary">Gérer</a>
                    </div>
                </div>                
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body" style="width: 20rem;">
                        <h4 class="card-title">Produits</h4>
                        <p class="card-text">Gestion des produits</p>
                        <a href="#" data-toggle="modal" data-target="#product-add" class="btn btn-primary">Ajouter</a>
                        <a href="#" class="btn btn-primary">Gérer</a>
                    </div>
                </div>                
            </div>                    
        </div>
    </div>


    <!-- modal category add Form -->
    <?php include('./templates/category-add.php') ?>                            
    <!-- End modal category add -->

    <!-- modal product add Form -->
    <?php include('./templates/product-add.php') ?>                            
    <!-- End modal category add -->

    <!-- modal brand add Form -->
    <?php include('./templates/brand-add.php') ?>                            
    <!-- End modal category add -->

    <script src="js/main.js"></script>
</body>
</html>