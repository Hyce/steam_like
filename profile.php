<?php
include 'header.php';
?>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Steamy</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" style="float: right;">
                <li>
                    <a href="#">Profil</a>
                </li>
                <li>
                    <a href="./store.php">Store</a>
                </li>
                <li>
                    <a href="panier.php">Panier</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">

    <!-- Portfolio Item Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Profil
                <small>(Pseudo)</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Portfolio Item Row -->
    <div class="row">

        <div class="col-md-4">
            <img class="img-responsive" src="http://placehold.it/200x200" alt="">
        </div>

        <div class="col-md-8">
            <h3>Description</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
            <h3>Infos</h3>
            <ul style="list-style: none;display: inline;">
                <li>Nom :</li>
                <li>Prénom :</li>
                <li>E-mail :</li>
                <li>date de Naissance :</li>
            </ul>
        </div>

    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    <div class="row">

        <div class="col-lg-12">
            <h3 class="page-header">Jeux Possédés</h3>
        </div>

        <div class="col-sm-2 col-xs-6 infosjeu">
            <a href="#">
                <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                <div class="nomdujeu">
                    Nom du Jeu
                    <br/>
                    Type de jeu
                </div>
            </a>
        </div>

        <div class="col-sm-2 col-xs-6 infosjeu">
            <a href="#">
                <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                <div class="nomdujeu">
                    Nom du Jeu
                </div>
            </a>
        </div>

        <div class="col-sm-2 col-xs-6 infosjeu">
            <a href="#">
                <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                <div class="nomdujeu">
                    Nom du Jeu
                </div>
            </a>
        </div>

        <div class="col-sm-2 col-xs-6 infosjeu">
            <a href="#">
                <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                <div class="nomdujeu">
                    Nom du Jeu
                </div>
            </a>
        </div>
        <div class="col-sm-2 col-xs-6 infosjeu">
            <a href="#">
                <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                <div class="nomdujeu">
                    Nom du Jeu
                </div>
            </a>
        </div>

    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
    </footer>

</div>
<!-- /.container -->
<?php
include 'footer.php';
?>
