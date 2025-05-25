<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="cssfile.css" />
    <link rel="stylesheet" href="phpfile.php" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&family=Montserrat&family=Satisfy&display=swap"
        rel="stylesheet" />
</head>

<body class="bg-light">
    <div class="contaier">
        <div class="topnav p-auto px-2 m-1">
            <header>
                <nav class="navbar navbar-expand-md">
                    <a class="navbar-brand col-lg-1">
                        <img class="rounded-circle mx-auto d-block img-fluid" src="../image/nstu-logo.jpg" alt="" />
                    </a>

                    <div class="col-lg-6 m-auto">
                        <h5 class="fw-bolder text-white mb-0 py-2">Noakhali Science and Technology University</h5>
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo02">
                        <span><i class="fas fa-bars navbar-icon float-end"></i></span>
                    </button>

                    <div class="collapse navbar-collapse col-lg-5" id="navbarTogglerDemo02">
                        <ul class="navbar-nav ml-auto py-2">
                            <li class="nav-item active"><a class="text-white nav-link text-center text-md-left"
                                    href="#">Home</a></li>
                            <li class="nav-item"><a class="text-white nav-link text-center text-md-left"
                                    href="#notice">Notice</a></li>
                            <li class="nav-item"><a class="text-white nav-link text-center text-md-left"
                                    href="#complaint">Complaint</a></li>
                            <li class="nav-item"><a class="text-white nav-link text-center text-md-left"
                                    href="#about">About Me</a></li>
                        </ul>
                        <ul class="navbar-nav me-right mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link text-white" href="login.php">Login</a></li>
                        </ul>
                    </div>
                </nav>
            </header>
        </div>


        <main>
            <!-- Carousel -->
            <section style="color: rgba(36, 1, 66, 0.952)">
                <div id="demo" class="carousel slide col-lg-12" data-bs-ride="carousel" data-bs-interval="2000"
                    data-bs-pause="hover">
                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../image/FMH.jpg" alt="Bangamata Sheikh Fojilatunnesa Mujib Hall"
                                class="rounded d-block mx-auto" />
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="carouesl-name">Bangamata Sheikh Fojilatunnesa Mujib Hall</h5>
                                <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../image/JBH.jpg" alt="Chicago" class="rounded d-block mx-auto" />
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="carouesl-name">Jatir Pita Bangabandhu Sheikh Mujibur Rahman Hall</h5>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../image/bks.jpeg" alt="Chicago" class="rounded d-block mx-auto" />
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="carouesl-name">Hazrat Bibi Khadiza Hall</h5>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../image/ash.jpeg" alt="Chicago" class="rounded d-block mx-auto" />
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="carouesl-name">Basha Shahid Abdus Salam Hall</h5>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../image/malek_hall.jpg" alt="New York" class="rounded d-block mx-auto" />
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="carouesl-name">Abdul Malek Ukil Hall</h5>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </section>
            <!-- </div>
        </div>


        </section>
        </div> -->

            <!-- another section -->
            <div class="container p-auto px-2 m-1 ">
                <div class="row pt-2">
                    <div>
                        <h3 class="fw-bolder text-center">Overview of NSTU</h3>
                        <!-- 
                    </div>
                    <div class="col-lg-6"> -->
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, dolore. Magni sequi officia id
                            optio debitis nostrum iste est cupiditate eos placeat? Numquam blanditiis aut, qui quae hic
                            quis
                            a molestias architecto repellat animi provident delectus dignissimos fuga odit sequi
                            recusandae
                            optio quia inventore cumque reprehenderit repudiandae obcaecati laboriosam. Dolore?</p>
                    </div>
                </div>
            </div>
        </main>

        <footer class="p-auto px-2 m-1">
            <div class="row  ">

                <div class="col-lg-6">
                    <p>&copy; All rights reserved by spicy king Restaurant</p>

                </div>

                <div class="col-lg-6">
                    <div class="media">

                        <a href="#"><i class="icon_style fas fa-arrow-alt-circle-up fa-0.5x"></i></a>
                        <a href="#"><i class="icon_style fab fa-youtube" style="color: #FF0000;"></i></a>
                        <a href="#"><i class="icon_style fab fa-twitter" style="color: #55ADED;"></i></a>
                        <a href="#"><i class="icon_style fab fa-whatsapp" style="color:#4CC65B;"></i></a>
                        <a href="#"><i class="icon_style fab fa-facebook" style="color:hsl(0, 0%, 100%) ;"></i></a>
                    </div>
                </div>
            </div>


        </footer>
    </div>

    <script src="javascriptfile.js"></script>
</body>

</html>