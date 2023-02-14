
<?php 
session_start();
if(!(isset($_SESSION['logged_in']) and ($_SESSION['logged_in']=='yes' )))
{
    header('location:login.php');
}

?>

<link href="img/favicon.ico" rel="icon">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


<link href="css/style.css" rel="stylesheet">
    <div class="container-fluid">
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">Medical</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Wizard</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="">
                    <div class="input-group">
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0"></p>
                <h5 class="m-0"></h5>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark mb-30">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">MEDICAL</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">WIZARD</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="action.php?patient=yes" class="nav-item nav-link">Patient Details</a>
                            <a href="action.php?manage=yes" class="nav-item nav-link">Manage Data</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="logout.php" class="btn px-0 ml-3">
                               <img src="img/icons/logout.png" alt="login" width="130px" height="50px"/>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>



<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="public/lib/easing/easing.min.js"></script>
<script src="public/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="js/main.js"></script>
<script src="js/actions.js"></script>
