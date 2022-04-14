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
        <link href="./service.css" rel="stylesheet"/>
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="img/favicon.ico"/>

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/b5b2ac5d79.js" crossorigin="anonymous"></script>

        <title>Service</title>
    </head>
    <body>

        <!-- Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <img
                    id="logo"
                    src="{!! asset('./img/Site/logo.png') !!}"
                    width="100"
                    height="100">
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
            <h2 class="text-center">Selamat Datang Di Jasa Perawatan Kami</style>
        </h2>
        <p class="text-center">Tim Groomer kami siap melayani peliharaan anda</p>
        <div class="d-flex justify-content-around mt-3 ">
            <img src="{!! asset('./img/Site/Promo.jpg') !!}" style="object-fit: cover;"/>
        </div>
        <h3 class="class">Jenis Perawatan</h3>
        <br>
        <br>
        <div class="d-flex justify-content-around mt-3">
            <div class="card" style="width: 16rem;">
                <img
                    src="{!! asset('./img/Site/nail_clipping.jpg') !!}"
                    width="160"
                    height="160"
                    class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nail Clipping</h5>
                    <p class="card-text">Proses grooming / perawatan memotong kuku anjing / kucing
                        ini untuk mengurangi resiko melukai owner ataupun groomer saat grooming atau
                        saat dimandikan.</p>

                </div>
            </div>

            <div class="card" style="width: 16rem;">
                <img
                    src="{!! asset('./img/Site/ear_cleaning.jpg') !!}"
                    width="160"
                    height="160"
                    class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ear Cleaning</h5>
                    <p class="card-text">Proses grooming membersihkan telinga ini untuk mencegah
                        anabul Kamu dari resiko penyakit telinga.</p>

                </div>
            </div>

            <div class="card" style="width: 16rem;">
                <img
                    src="{!! asset('./img/Site/bathing.jpg') !!}"
                    width="160"
                    height="160"
                    class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Bathing</h5>
                    <p class="card-text">Pada proses grooming ini, seluruh badan anabul Kamu akan
                        dibasahi dengan air hangat secara merata dengan hati-hati supaya air tidak masuk
                        ke dalam telinga. Khusus grooming memandikan KUCING, menghindari area muka dan
                        kepala<br></p>

                </div>
            </div>

            <div class="card" style="width: 16rem;">
                <img
                    src="{!! asset('./img/Site/fur_brushing.jpg') !!}"
                    width="160"
                    height="160"
                    class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Fur Brushing</h5>
                    <p class="card-text">Proses grooming ini merupakan penyisiran yang dilakukan
                        pada seluruh permukaan bulu anabul. Hal ini dilakukan untuk menghindari bulu
                        agar tidak gimbal ataupun lembab yang menyebabkan tumbuhnya jamur pada badan
                        kucing Anda.</p>

                </div>
            </div>

        </div>
        <br>
        <br>
        <div class="col-md-3">
            <h1 style="margin-bottom: 40px;">Service</h1>
            <form class="myForm" action="/auth" method="GET">
                <p>Id
                    <span><input type="text" id="kode" name="kode" style="margin-left: 180px;"></span></p>
                <p>Nama
                    <span><input type="nama" id="nama" name="nama" style="margin-left: 180px;"></span></p>
                <p>Alamat
                    <textarea
                        type="deskripsi"
                        id="deskripsi"
                        name="deskripsi"
                        style="margin-left: 180px;"
                        cols="40"
                        rows="5"></textarea>
                </p>
                <p>Nomor Telepon
                    <span><input type="nama" id="nama" name="nama" style="margin-left: 180px;"></span></p>
                <p>Jenis Perawatan<select
                    class="form-select"
                    aria-label="Default select example"
                    style="margin-left: 180px;">
                        <option selected="selected">pilih type</option>
                        <option value="1">Cukur Bulu</option>
                        <option value="2">Pengembang Biakan</option>
                        <option value="3">Cari Jodoh</option>
                    </select>
                </p>
                <p>Jam Service
                    <span><input type="jumlah" id="jumlah" name="jumlah" style="margin-left: 180px;"></span></p>
                <p>Catatan
                    <textarea
                        type="deskripsi"
                        id="deskripsi"
                        name="deskripsi"
                        style="margin-left: 180px;"
                        cols="40"
                        rows="5"></textarea>
                </p>
            </form>
            <button type="submit" class="main-btn" onclick="location.href='/index' ">Book</button>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    </body>

</div>
<!--End Card-->

<!--Header Keunggulan-->
<div class="container">
    <h2 class="text-center">Keunggulan Dari Perawatan Kami</style>
</h2>
</div>
<!--End Header Keungulan-->

<!--Keunggulan-->
<div class="container mb-2">
<div class="card-group iklan">
    <div class="card text-white  mb-3 iklan">
        <i
            class="fa-solid fa-shield-halved fa-5x d-flex justify-content-center text-light mb-2 mt-2"></i>
        <div class="card-body">
            <h5 class="card-title text-center">Produk Terjamin</h5>
            <p class="card-text text-center ">Setiap produk Grooming yang kami gunakan,
                mulai dari ear cleaner sampai pemberian parfum, menggunakan produk-produk
                Premium yang 100% aman untuk anabul Kamu.</p>
        </div>
    </div>
    <div class="card text-white mb-3 iklan">
        <i
            class="fa-solid fa-user-tie fa-5x d-flex justify-content-center text-light mb-2 mt-2"></i>
        <div class="card-body">
            <h5 class="card-title text-center ">Professional</h5>
            <p class="card-text text-center">Semua Groomer di El-Puppy mempunyai Pengalaman
                & Standar Prosedur (SOP) terbaik dalam melayani Grooming anabul kesayangan Kamu.</p>
        </div>
    </div>
    <div class="card text-white  mb-3 iklan">
        <i
            class="fa-solid fa-thumbs-up fa-5x d-flex justify-content-center text-light mb-2 mt-2"></i>
        <div class="card-body">
            <h5 class="card-title text-center">Mudah</h5>
            <p class="card-text text-center">Selain layanan Grooming di outlet El-Puppy,
                Groomer Kami juga siap Kamu booking kapanpun, demi melayani Kamu dan anabul
                kesayangan di rumah Kamu.</p>
        </div>
    </div>
</div>
</div>
<!--End Keunggulan-->

<!--Footer-->
<footer class=" bg-primary">
<div class="container">
    <p class="m-0 text-center text-white" foot="foot" ">Copyright &copy; El Puppy 2022</p>
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
