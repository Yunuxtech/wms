<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Home |  UrbanWaste-MS</title>
    <meta name="description" content="Association of Point of Sales Users Membership Registation" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="img/logo.png" type="image/gif" sizes="16x16" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
    <style>
        html{
            scroll-behavior:smooth;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100 bg-light">
    <!-- Nav-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark text-white">
        <div class="container">
            <h1 class="mb-0 h5 py-1 mr-3">
                <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="" /> UrbanWaste-MS
                </a>
            </h1>
            <a href="register.php" class="btn btn-outline-light py-1 ml-auto mx-sm-0 order-0 order-sm-last">
          Register Now
        </a>
            <button class="navbar-toggler ml-3" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services"> Services </a>
                    </li>
                    <?php include("include/header.php") ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- content -->
    <div class="container flex-grow-1 flex-shrink-0 py-5">
        <!-- <div class="mb-5 p-4 bg-white shadow-sm">
            <h3>FAQs on booking</h3>

            <div class="card-body">
                <ol>
                    <li class="mb-3">
                        jnjsnjsnjcsxcnsnnsjnxns
                        <ol type="a">
                            <li>JNsjnjsncsjnxjsjxsn.</li>
                            <li>jndcjdncjndjcdn.</li>
                        </ol>
                    </li>
                    <li class="mb-3">jcdnjdncjdnjncnc</li>
                </ol>
            </div>
        </div> -->
        <?php  include("include/slider.php");?>
        <!-- section for about -->
        <?php  include("include/main-content.php");?>
    </div>

    <!-- footer -->
    <?php  include("include/footer.php");?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>