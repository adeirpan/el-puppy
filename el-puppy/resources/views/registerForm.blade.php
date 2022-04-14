<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"/>
    </head>
    <body>
        <section class="vh-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 text-black">
                        <div class="px-5 ms-xl-4">
                            <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085"></i>
                            <span class="h1 fw-bold mb-0">Elpuppy</span>
                        </div>

                        <div
                            class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-4 pt-5 pt-xl-0 mt-xl-n5">
                            <form style="width: 23rem">
                                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px">Register</h3>
                                <div class="form-outline mb-3">
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg"/>
                                    <label class="form-label" for="form3Example1cg">Your Name</label>
                                </div>

                                <div class="form-outline mb-3">
                                    <input type="email" id="form3Example3cg" class="form-control form-control-lg"/>
                                    <label class="form-label" for="form3Example3cg">Your Email</label>
                                </div>

                                <div class="form-outline mb-3">
                                    <input
                                        type="password"
                                        id="form3Example4cg"
                                        class="form-control form-control-lg"/>
                                    <label class="form-label" for="form3Example4cg">Password</label>
                                </div>

                                <div class="form-outline mb-2">
                                    <input
                                        type="password"
                                        id="form3Example4cdg"
                                        class="form-control form-control-lg"/>
                                    <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                                </div>

                                <div class="form-check d-flex justify-content-center mb-3">
                                    <input
                                        class="form-check-input me-2"
                                        type="checkbox"
                                        value=""
                                        id="form2Example3cg"/>
                                    <label class="form-check-label" for="form2Example3g">
                                        I agree all statements in
                                        <a href="#!" class="text-body">
                                            <u>Terms of service</u>
                                        </a>
                                    </label>
                                </div>

                                <div class="d-flex justify-content-center mb-2">
                                    <button type="button" class="main-btn">Register</button>
                                </div>

                                <p class="text-center text-muted">
                                    Have already an account?
                                    <a href="/login" class="link-info">
                                        <u>Login here</u>
                                    </a>
                                </p>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-6 px-0 d-none d-sm-block">
                        <img
                            src="{!! asset('img/Site/cat.jpeg') !!}"
                            alt="Login image"
                            class="w-100 vh-100"
                            style="object-fit: cover; object-position: right"/>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
