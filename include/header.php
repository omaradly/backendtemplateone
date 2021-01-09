<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="features">
        <meta name="keywords" content="html,css">
        <meta name="viewport" content="width=device-width,initial-Scale=1.0">
        <title>Project zero</title>
        <!--    bootstrap    -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="icon"  href="images/rocket.svg">
        <!--   end import     -->
        <link rel="stylesheet" href="css/master.css">
        <link rel="stylesheet" href="bootstrap-navbar-multi-level-dropdowns/css/bootnavbar.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    </head>
         <body>
        <?php session_start();?>
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">One</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/one/home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/one/about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/one/products.php">Products</a>
                    </li>
                    </ul>

                        <ul class="navbar-nav">
                            <?php if (!isset($_SESSION['mail'])) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/one/login.php">Login</a>
                            </li>
                            <?php } ?>
                            <?php if (isset($_SESSION['mail'])) { ?>
                            <li class="nav-item">
                                <a class="nav-link">Welcome 
                                    <?php echo $_SESSION['mail']; ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/one/logout.php">logout</a>
                            </li>
                            <?php } ?>
                        </ul>
                </div>
                </nav>











            <!-- ================================ end smallFooter =========================== -->
            <!--  ===============================  bootstrap  =======================  -->
            <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
            <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> 
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <!--   end import     -->
            <!-- Compressed JavaScript -->
            <script src="bootstrap-navbar-multi-level-dropdowns/js/bootnavbar.js"></script>
            <script type="text/javascript" src="js/loading-bar.js"></script>
            <script src="js/main.js"></script>
        </body>
</html>