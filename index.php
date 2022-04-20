<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Home | Bus Booking System</title>
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
            <a href="register.html" class="btn btn-outline-light py-1 ml-auto mx-sm-0 order-0 order-sm-last">
          Register Now
        </a>
            <button class="navbar-toggler ml-3" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services"> Services </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reserveSeat.html">Reserve a Seat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bookedSeat.html">Booked History </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">
                        My Profile
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu bg-dark text-white">
                            <li class="nav-item"><a href="#" class="nav-link">My Profile</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Comments</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Logout</a></li>
                        </ul>
                    </li>
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
            <section id="about" class="container-fluid py-5">
                <div class="title">
                    <h2  class="text-center mb-5">About</h2>
                </div>
                <div class="row">
                    <div class="col-8">
                        <p class="text-justify">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta maxime in ullam. Quam rem sequi facilis ipsum illo, quia sit quaerat repudiandae soluta reiciendis porro laborum consequuntur modi rerum molestiae.
                        Quidem sapiente assumenda quasi fugiat! Praesentium minus quaerat veniam nulla sunt voluptas error nam corrupti ab tempore blanditiis cumque a, dignissimos vel recusandae maxime cum harum suscipit quibusdam atque! Dolorem.
                        Quia porro, deserunt illo dicta at quasi eum perspiciatis sequi sed ipsum architecto repellendus odio vero nulla blanditiis doloribus voluptatibus. Reprehenderit minima delectus vel error fuga cumque, nulla ducimus velit!
                        Quidem, reiciendis quis. Provident nisi rem pariatur et quod dolorum neque eos illo quis doloribus dignissimos, deserunt harum? Assumenda totam, est suscipit libero ipsam dolorem animi doloribus obcaecati. Hic, officiis.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid aspernatur reprehenderit nulla, commodi iste est! Odit beatae ab vel illo. Excepturi fuga tempora culpa, eveniet animi deleniti officia consequatur quod!
                        Ea corrupti ad unde vero laboriosam dolorum, veritatis quae rem quasi exercitationem necessitatibus omnis quia recusandae autem sit distinctio possimus iusto aliquam officia ipsa cupiditate incidunt, fuga reiciendis magni! Voluptate.
                        </p>
                    </div>
                    <div class="col-4">
                       <img src="img/image-1.jpg" class="d-block w-100 img-thumbnail" alt="" srcset="" style="height:300px" >
                    </div>
                </div>
            </section>  
                <!-- end -->
            <!-- section service -->
            
            <section id="services" class="container-fluid py-5 bg-white" style="border-radius:7px;">
                <div class="title">
                    <h2  class="text-center  mb-5">Services</h2>
                </div>
                <div class="row">
                    <div class="col-3">
                    <div class="card mb-3">
                        <img src="img/image-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    </div>
                    <div class="col-3">
                    <div class="card mb-3">
                        <img src="img/image-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    </div>
                    <div class="col-3">
                    <div class="card mb-3">
                        <img src="img/image-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card mb-3">
                    <img src="img/image-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                </div>
                
                
            </section>      
    </div>

    <!-- footer -->
    <footer class="p-3 mt-auto bg-white shadow">
        <div class="container">
            <p class="text-muted float-left">
                <b>Supervisor</b>: Dr. ------
            </p>
            <p class="float-right">
                <b>Developed by</b>: --------
            </p>
        </div>
    </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>