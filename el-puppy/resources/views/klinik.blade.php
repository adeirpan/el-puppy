<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous">

        <link href="{!! asset('css/service.css') !!}" rel="stylesheet"/>

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="img/favicon.ico"/>

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/b5b2ac5d79.js" crossorigin="anonymous"></script>

        <title>Clinic</title>
    </head>
    <body>

        <!-- Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <img id="logo" src="{!! asset('./img/Site/logo.png') !!}" width="100" height="100">
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                id="navbarDropdown"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="#!">All Products</a>
                                </li>
                                <li><hr class="dropdown-divider"/></li>
                                <li>
                                    <a class="dropdown-item" href="#!">Popular Items</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#!">New Arrivals</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!--End Navbar-->

        <!--Card-->
        <div class="container">
            <h2 class="text-center">Selamat Datang Di Klinik Kami</style>
        </h2>
        <p class="text-center">Tim Doctor kami siap melayani peliharaan anda</p>
        <h3 class="class">Jadwal Dokter
        </h3>

        <div class="d-flex justify-content-around mt-3">
            <div class="card" style="width: 16rem;">
                <img src="{!! asset('./img/Site/dokter_hewan.jpg') !!}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">drh.Alana Liora</h5>
                    <p class="card-text">Senin-Rabu-Jumat<br>08.00-12.00 & 16.00-20.00<br></p>
                    <a href="#" class="btn btn-primary">Booking</a>
                </div>
            </div>

            <div class="card" style="width: 16rem;">
                <img src="{!! asset('./img/Site/dokter_hewan2.jpg') !!}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">drh.Elvina Askana</h5>
                    <p class="card-text">Senin-Kamis-Jumat<br>10.00-14.00 & 16.00-20.00<br></p>
                    <a href="#" class="btn btn-primary">Booking</a>
                </div>
            </div>

            <div class="card" style="width: 16rem;">
                <img src="{!! asset('./img/Site/dokter_hewan3.jpg') !!}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">drh.Calista Zalfa</h5>
                    <p class="card-text">Selasa-Kamis-Jumat<br>10.00-14.00 & 16.00-20.00<br></p>
                    <a href="#" class="btn btn-primary">Booking</a>
                </div>
            </div>

            <div class="card" style="width: 16rem;">
                <img src="{!! asset('./img/Site/dokter_hewan4.jpg') !!}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">drh.Helia Chessy</h5>
                    <p class="card-text">Rabu-Kamis-Sabtu<br>08.00-12.00 & 14.00-18.00</p>
                    <a href="#" class="btn btn-primary">Booking</a>
                </div>
            </div>

        </div>

    </div>
    <!--End Card-->

    <!--Header Keunggulan-->
    <div class="container">
        <h2 class="text-center">Keunggulan Dari Doctor Kami</style>
    </h2>
</div>
<!--End Header Keunggulan-->

<!--Keunggulan-->\
<div class="container mb-2">
    <div class="card-group iklan">
        <div class="card text-white  mb-3 iklan">
            <i
                class="fa-solid fa-graduation-cap fa-5x d-flex justify-content-center text-light mb-2 mt-2"></i>
            <div class="card-body">
                <h5 class="card-title text-center">Berkualitas</h5>
                <p class="card-text text-center ">Setiap dokter yang berada dibawah naungan
                    El-Puppy memiliki pengalaman minimal 5 tahun dalam dunia medis hewan dan
                    memiliki sertifikat yang bertaraf nasional
                </p>
            </div>
        </div>
        <div class="card text-white  mb-3 iklan">
            <i
                class="fa-solid fa-user-tie fa-5x d-flex justify-content-center text-light mb-2 mt-2"></i>
            <div class="card-body">
                <h5 class="card-title text-center">Professional</h5>
                <p class="card-text text-center">Semua Groomer di El-Puppy mempunyai Pengalaman
                    & Standar Prosedur (SOP) terbaik dalam melayani Grooming anabul kesayangan Kamu.</p>
            </div>
        </div>
        <div class="card text-white  mb-3 iklan">
            <i
                class="fa-solid fa-face-grin fa-5x d-flex justify-content-center text-light mb-2 mt-2"></i>
            <div class="card-body">
                <h5 class="card-title text-center">Ramah</h5>
                <p class="card-text text-center">Setiap dokter pada tim kami selalu senantiasa
                    mendengarkan dengan baik keluhan dari setiap customer El-Puppy</p>
            </div>
        </div>
    </div>
</div>
<!--End Keunggulan-->

<!--Footer-->
<footer class=" bg-primary">
    <div class="container">
        <p class="m-0 text-center text-white foot">Copyright &copy; El Puppy 2022</p>
    </div>
</footer>
<!--End Footer-->

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!-- <script
src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
crossorigin="anonymous"></script> <script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
crossorigin="anonymous"></script> -->
</body>
</html>
