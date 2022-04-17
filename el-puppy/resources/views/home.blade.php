<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}"/>
        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous">
        <link
            rel="stylesheet"
            href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
            crossorigin="anonymous"/>
    </head>

    <body>
        <h1 style="font-size: 20px; font-family: poppins; text-align :center;" id="jam"></h1>
        <!-- navbar -->
        <nav>
            <div class="wrapper">
                <div class="logo"><img src="{!! asset('./img/Site/log.png') !!}" alt="" style="width: 180px; height: 70px; position:absolute; "/></div>
                <div class="menu">
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="#service">Service</a>
                        </li>
                        <li>
                            <a href="#product">Product</a>
                        </li>
                        <li>
                            <a href="#team">Staff</a>
                        </li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                        <a href="/login">
                            <button
                                class="btn "
                                type="submit"
                                style="color: #fff; background-color: #5544A8;outline-color: #5544A8;">Login</button>
                        </a>
                        <a href="/register">
                            <button
                                class="btn btn-outline"
                                type="submit"
                                style="color: #5544A8; background-color: #fff; outline-color: #5544A8;">Register</button>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- End navbar -->

        <!-- ========================= Home-section start ========================= -->
        <section id="home">
            <div class="container-fluid banner">
                <div class="container2">
                    <h5 class="display-6">Bahagiakan Hewan Kesayanganmu</h5>
                    <h5 class="display-6">dengan Elpuppy</h5>
                    <br>
                    <p>Menyedikan segala layanan untuk hewan Kesayanganmu mulai dari</p>
                    <p>makanan,aksesoris,klinik sampai dengan service yang lengkap</p>
                    <br>
                    <a href="/product">
                        <button type="submit" class="main-btn">Shop Now</button>
                    </a>
                </div>
            </div>
        </section>
        <!-- ========================= Home-section end ========================= -->

        <!-- ========================= Service-section start =========================
        -->
        <section id="service">
            <div class="container-fluid layanan pt-5 pb-5">
                <div class="container text-center">
                    <h3 class="display-3" id="layanan">Our Main Service</h3>
                    <br>
                    <br>
                    <div class="row pt-4">

                        <div class="col-md-4">
                            <span class="lingkaran">
                                <i class="fas fa-stethoscope fa-5x"></i>
                            </span>
                            <a href="/klinik">
                                <h3 class="mt-3">Clinic</h3>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <span class="lingkaran">
                                <i class="fas fa-store fa-5x"></i>
                            </span>
                            <a href="/product">
                                <h3 class="mt-3">Shop</h3>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <span class="lingkaran">
                                <i class="fas fa-paw fa-5x"></i>
                            </span>
                            <a href="/service">
                                <h3 class="mt-3">Services</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= Service-section end ========================= -->

        <hr>
        <section id="product">
        <div class="container-fluid layanan pt-5 pb-5">
            <div class="container text-center">
                <h3 class="display-3" id="produk">Recommend Product</h3>
                <br>
                <br>
                <div class="row pt-4">
                    <div class="col-md-4">
                        <img src="{!! asset('./img/Site/ped.png') !!}"/>

                    </div>

                    <div class="col-md-4">
                        <img src="{!! asset('./img/Site/whiskas.png') !!}"/>

                    </div>

                    <div class="col-md-4">
                        <img src="{!! asset('./img/Site/rc.png') !!}"/>

                    </div>
                </div>
            </div>
        </div>
        </section>
        <br>
        <br>
        <hr>
        <!-- ========================= team-section start ========================= -->
        <section id="team" class="team-section pt-150">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="section-title text-center mb-60">
                            <h3 class="display-3" id="produk">Meet The Staff</h3>
                            <p>Semua staff kami sudah sangat berpengalaman dan memiliki kualitas pelayanan
                                yang baik .</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 col-sm-10">
                        <div class="single-team">
                            <div class="image">
                                <img src="{!! asset('./img/Site/yudha.jpeg') !!}" alt="yudha" style="object-fit: cover;">
                            </div>
                            <div class="content">
                                <h4>Yudha Yasa AB</h4>
                                <p>Pet Doctor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-10">
                        <div class="single-team">
                            <div class="image">
                                <img src="{!! asset('./img/Site/Hikami.jpeg') !!}" alt="Hikami" style="object-fit: cover;">
                            </div>
                            <div class="content">
                                <h4>M. Hikami Dzulfikar</h4>
                                <p>Pet Consultant</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-10">
                        <div class="single-team">
                            <div class="image">
                                <img src="{!! asset('./img/Site/ade.jpeg') !!}" alt="Ade Irpan" style="object-fit: cover;">
                            </div>
                            <div class="content">
                                <h4>Ade Irpan Hidayat</h4>
                                <p>Shoopkeeper</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-10">
                        <div class="single-team">
                            <div class="image">
                                <img src="{!! asset('./img/Site/Rezky.jpeg') !!}" alt="Rezki" style="object-fit: cover;">
                            </div>
                            <div class="content">
                                <h4>Rezki Fauzan Arifin</h4>
                                <p>Cashier</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-10">
                        <div class="single-team">
                            <div class="image">
                                <img src="{!! asset('./img/Site/randy.jpg') !!}" alt="Randy" style="object-fit: cover;">
                            </div>
                            <div class="content">
                                <h4>Randy Priatma F</h4>
                                <p>Supervisor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= team-section end ========================= -->

        <!-- ========================= contact-section start =========================
        -->
        <section
            id="contact"
            class="contact-section pt-120 pb-120 mt-120"
            style="background-color: #FFDB24;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-xl-6">
                        <div class="section-title text-center" style="margin-top: 50px;">
                            <h3 class="display-3" id="produk">Get Touch</h3>
                            <p>Silahkan kontak kami melalui surel dibawah ini jikalau ada yang ingin kamu sampaikan kepada kami.</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form-wrapper" ">
                    <form
                        id="contact-form"
                        class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-form">
                                    <input type="text" class="form-input" id="name" name="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-form">
                                    <input
                                        type="email"
                                        class="form-input"
                                        id="email"
                                        name="email"
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-form">
                                    <input
                                        type="text"
                                        class="form-input"
                                        id="number"
                                        name="number"
                                        placeholder="Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-form">
                                    <input
                                        type="text"
                                        class="form-input"
                                        id="subject"
                                        name="subject"
                                        placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-form">
                                    <textarea
                                        name="message"
                                        class="form-input"
                                        id="message"
                                        rows="5"
                                        placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="submit-btn text-center mb-41">
                                    <button class="main-btn btn-hover" type="submit" onclick="runPopup()">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </section>
        <!-- ========================= contact-section end ========================= -->
        <script>
            function runPopup(){
                if

        <footer class=" bg-primary">
            <div class="container">
                <p class="m-0 text-center text-white foot">Copyright &copy; El Puppy 2022</p>
            </div>
        </footer>
                {
                window.alert("Pesan telah dikirim, Terima kasih atas saran anda");
                }
                else
                {
                window.alert("Pesan batal dikirim");
                }
            };

         </script>

        <script>
            function showTime(){
                var date = new Date();
                var h = date.getHours(); // 0 - 23
                var m = date.getMinutes(); // 0 - 59
                var s = date.getSeconds(); // 0 - 59
                var session = "AM";

                if(h == 0){
                    h = 12;
                }

                if(h > 12){
                    h = h - 12;
                    session = "PM";
                }

                h = (h < 10) ? "0" + h : h;
                m = (m < 10) ? "0" + m : m;
                s = (s < 10) ? "0" + s : s;

                var time = h + ":" + m + ":" + s + " " + session;
                document.getElementById("MyClockDisplay").innerText = time;
                document.getElementById("MyClockDisplay").textContent = time;

                setTimeout(showTime, 1000);

            }

            showTime();
        </script>
        <!-- Footer-->
        <footer >
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; El Puppy 2022</p>
            </div>
        </footer>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

    </body>
</html>
