<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{url('frontend/assets/img/favicon.png')}}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{url('frontend/assets/style.css')}}">
    <title>ecommerce-ci</title>
</head>

<body>

    <header>
        <section class="bg-primary d-none d-lg-block" id="topbar">
            <div class="container-lg px-0 py-2">
                <div class="row g-0 text-white align-items-center justify-content-center">
                    <div class="col-auto px-3">
                        <small>
                            <a href="" class="text-decoration-none text-white">
                                <span>Email: info@ecommerce.com</span>
                            </a>
                        </small>
                    </div>
                    <div class="col-auto px-3">
                        <small>
                            <a href="" class="text-decoration-none text-white">
                                <span>Support: 1234567892</span>
                            </a>
                        </small>
                    </div>
                    <div class="col-auto px-3">
                        <small>
                            <a href="" class="text-decoration-none text-white">
                                <span>Sell on ecommerce.com </span>
                            </a>
                        </small>
                    </div>
                    <div class="col-auto px-3">
                        <small>
                            <a href="" class="text-decoration-none text-white">
                                <span><i class="fas fa-mobile-alt"></i> Download App</span>
                            </a>
                        </small>
                    </div>
                </div>
            </div>
        </section>
        <section id="menu" class="bg-primary">
            <div class="container-lg px-0 py-3">
                <div class="row g-0 align-items-center">
                    <div class="col-md-3">
                        <a href="">
                            <img src="{{URL::asset('public/frontend/img/logo.png')}}" alt="logo" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-4">
                        <form action="">
                            <div class="row g-0">
                                <div class="col">
                                    <input type="text" class="form-control border-0 rounded-0 rounded-start">
                                </div>
                                <div class="col-auto">
                                    <button type="submit"
                                        class="float-end btn bg-white border-0 rounded-0 rounded-end"><i
                                            class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link text-white fs-4" href="#">
                                    <span><i class="far fa-user-circle "></i></span>
                                    <span class="fs-6 ">My Account</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white fs-4" href="#">
                                    <span><i class="fas fa-heart"></i></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white fs-4" href="#">
                                    <span><i class="fas fa-list"></i></span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-white pe-0 fs-4" href="#">
                                    <span><i class="fas fa-shopping-bag"></i></span>
                                    <span class="badge bg-dark fw-normal">5</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </header>

    <section id="category-menu">
        <div class="container-lg g-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-color2 py-0">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown pe-3 py-1">
                                <a class="nav-link dropdown-toggle text-dark text-center" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="img-box mx-auto">
                                        <img src="{{URL::asset('public/frontend/img/29327f40e9c4d26b.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <small>Grocery</small>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                        <table class="table table-borderless">
                                            <tr>
                                                <td><a href="" class="dropdown-item">fff</a></td>
                                                <td><a href="" class="dropdown-item">fff</a></td>
                                                <td><a href="" class="dropdown-item">fff</a></td>
                                            </tr>
                                        </table>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown  px-3 py-1">
                                <a class="nav-link dropdown-toggle text-dark text-center" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="img-box mx-auto">
                                        <img src="{{URL::asset('public/frontend/img/22fddf3c7da4c4f4.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <small>Mobiles</small>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="navbarDropdown">
                                    <li>
                                        <table class="table table-borderless">
                                            <tr>
                                                <td><a href="" class="dropdown-item">fff</a></td>
                                                <td><a href="" class="dropdown-item">fff</a></td>
                                                <td><a href="" class="dropdown-item">fff</a></td>
                                            </tr>
                                        </table>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown px-3 py-1">
                                <a class="nav-link dropdown-toggle text-dark text-center" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="img-box mx-auto">
                                        <img src="{{URL::asset('public/frontend/img/82b3ca5fb2301045.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <small>Fashion</small>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                        <table class="table table-borderless">
                                            <tr>
                                                <td><a href="" class="dropdown-item">fff</a></td>
                                                <td><a href="" class="dropdown-item">fff</a></td>
                                                <td><a href="" class="dropdown-item">fff</a></td>
                                            </tr>
                                        </table>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown px-3 py-1">
                                <a class="nav-link dropdown-toggle  text-dark text-center" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="img-box mx-auto">
                                        <img src="{{URL::asset('public/frontend/img/69c6589653afdb9a.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <small>Electronics</small>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                        <table class="table table-borderless">
                                            <tr>
                                                <td><a href="" class="dropdown-item">fff</a></td>
                                                <td><a href="" class="dropdown-item">fff</a></td>
                                                <td><a href="" class="dropdown-item">fff</a></td>
                                            </tr>
                                        </table>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown px-3 py-1">
                                <a class="nav-link dropdown-toggle text-dark text-center" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="img-box mx-auto">
                                        <img src="{{URL::asset('public/frontend/img/ee162bad964c46ae.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <small>Home</small>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                        <table class="table table-borderless">
                                            <tr>
                                                <td><a href="" class="dropdown-item">fff</a></td>
                                                <td><a href="" class="dropdown-item">fff</a></td>
                                                <td><a href="" class="dropdown-item">fff</a></td>
                                            </tr>
                                        </table>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown px-3 py-1">
                                <a class="nav-link dropdown-toggle  text-dark text-center" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="img-box mx-auto">
                                        <img src="{{URL::asset('public/frontend/img/0ff199d1bd27eb98.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <small>Appliances</small>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                        <table class="table table-borderless">
                                            <tr>
                                                <td><a href="" class="dropdown-item">fff</a></td>
                                                <td><a href="" class="dropdown-item">fff</a></td>
                                                <td><a href="" class="dropdown-item">fff</a></td>
                                            </tr>
                                        </table>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown ps-3 py-1">
                                <a class="nav-link dropdown-toggle text-dark text-center" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="img-box mx-auto">
                                        <img src="{{URL::asset('public/frontend/img/dff3f7adcf3a90c6.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <small>Beauty, Toys & More</small>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                        <table class="table table-borderless">
                                            <tr>
                                                <td><a href="" class="dropdown-item">fff</a></td>
                                                <td><a href="" class="dropdown-item">fff</a></td>
                                                <td><a href="" class="dropdown-item">fff</a></td>
                                            </tr>
                                        </table>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>
