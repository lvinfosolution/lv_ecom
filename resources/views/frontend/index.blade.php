@extends('frontend.layouts.main')

@section('main-container')
    <main>

        <section class="banner-carousal p-2">
            <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators align-items-center">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{URL::asset('public/frontend/img/1586552118143074818.jpg')}}" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('public/frontend/img/1586552106839104974.jpg')}}" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('public/frontend/img/1586552118143074818.jpg')}}" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('public/frontend/img/1586552106839104974.jpg')}}" class="d-block w-100" alt="..." />
                    </div>
                </div>
                <button class="carousel-control-prev d-none d-lg-block" type="button"
                    data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next d-none d-lg-block" type="button"
                    data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section class="ad-area-1 p-2">
            <div class="container">
                <div class="row g-0">
                    <div class="col-md-4 text-center">
                        <div class="card p-1 m-2">
                            <a href="">
                                <img src="{{URL::asset('public/frontend/img/084789479074d2b2.jpg')}}" alt="" class="img-fluid rounded">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="card p-1 m-2">
                            <a href="">
                                <img src="{{URL::asset('public/frontend/img/1ce0c4c1fb501b45.jpg')}}" alt="" class="img-fluid rounded">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="card p-1 m-2">
                            <a href="">
                                <img src="{{URL::asset('public/frontend/img/2f30db9425df5cec.jpg')}}" alt="" class="img-fluid rounded">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="d-o-d p-2">
            <div class="container">
                <div class="row g-0 bg-white p-3 heading align-items-center">
                    <div class="col-auto">
                        <p class="mb-0 fs-4 fw-bold">Deals of the Day</p>
                    </div>
                    <div class="col-auto"></div>
                    <div class="col-auto ms-auto">
                        <a class="btn btn-primary btn-sm">VIEW ALL</a>
                    </div>
                </div>
                <div class="row g-0 bg-white p-3">
                    <div class="owl-carousel dod-carousel owl-theme">
                        <a href="">
                            <div class="item">
                                <div class="card text-center border-0">
                                    <div class="img-box mx-auto">
                                        <img src="{{URL::asset('public/frontend/img/d-o-d/f160027cp-hindware-original-imaefqjuw9qfvnhq.jpeg')}}"
                                            alt="..." />
                                    </div>
                                    <div class="card-body">
                                        <small class="title mb-0 text-dark">Bathroom Essentials</small> <br>
                                        <small class="sub-title mb-0 text-success">From <i
                                                class="fas fa-rupee-sign"></i>
                                            149</small> <br>
                                        <small class="extra mb-0 text-muted">Best Selling</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="item">
                                <div class="card text-center border-0">
                                    <div class="img-box mx-auto">
                                        <img src="{{URL::asset('public/frontend/img/d-o-d/0-7-eyeconic-kajal-twin-pack-lakme-original-imafcthtdzhzpdjg.jpeg')}}"
                                            alt="..." />
                                    </div>
                                    <div class="card-body">
                                        <small class="title mb-0 text-dark">Mackup Bestsellers</small> <br>
                                        <small class="sub-title mb-0 text-success">From <i
                                                class="fas fa-rupee-sign"></i>
                                            149</small> <br>
                                        <small class="extra mb-0 text-muted">Lakme, Maybelline, Sugar..</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="item">
                                <div class="card text-center border-0">
                                    <div class="img-box mx-auto">
                                        <img src="{{URL::asset('public/frontend/img/d-o-d/flipkart-smartbuy-amrpb1m01-original-imafh4bufddxdf7v.jpeg')}}"
                                            alt="..." />
                                    </div>
                                    <div class="card-body">
                                        <small class="title mb-0 text-dark">Cables and chargers</small> <br>
                                        <small class="sub-title mb-0 text-success">Extra 10% Off</small> <br>
                                        <small class="extra mb-0 text-muted">by FKSB</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="item">
                                <div class="card text-center border-0">
                                    <div class="img-box mx-auto">
                                        <img src="{{URL::asset('public/frontend/img/d-o-d/free-s-blue-902-offirra-international-unstitched-original-imafuf9qk4c9pfd4.jpeg')}}"
                                            alt="..." />
                                    </div>
                                    <div class="card-body">
                                        <p class="title mb-0 text-dark">Bathroom Essentials</p>
                                        <p class="sub-title mb-0 text-success">From <i class="fas fa-rupee-sign"></i>
                                            149
                                        </p>
                                        <small class="extra mb-0 text-muted">Best Selling</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="item">
                                <div class="card text-center border-0">
                                    <div class="img-box mx-auto">
                                        <img src="{{URL::asset('public/frontend/img/d-o-d/plywood-c75c-hlm-furn-master-black-original-imafygghgnzgzynt.jpeg')}}"
                                            alt="..." />
                                    </div>
                                    <div class="card-body">
                                        <p class="title mb-0 text-dark">Bathroom Essentials</p>
                                        <p class="sub-title mb-0 text-success">From <i class="fas fa-rupee-sign"></i>
                                            149
                                        </p>
                                        <small class="extra mb-0 text-muted">Best Selling</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="item">
                                <div class="card text-center border-0">
                                    <div class="img-box mx-auto">
                                        <img src="{{URL::asset('public/frontend/img/d-o-d/red-11066-flat-chhavi-india-original-imafwzc6tgdpdfng.jpeg')}}"
                                            alt="..." />
                                    </div>
                                    <div class="card-body">
                                        <small class="title mb-0 text-dark">Bedsheets</small> <br>
                                        <small class="sub-title mb-0 text-success">Up to 75% Off</small> <br>
                                        <small class="extra mb-0 text-muted text-nowrap">DDecor, Raymond and
                                            More</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="item">
                                <div class="card text-center border-0">
                                    <div class="img-box mx-auto">
                                        <img src="{{URL::asset('public/frontend/img/d-o-d/skbb-bb-xl-oe-sk-beanbags-xl-original-imaenhm6zgsadrmg.jpeg')}}"
                                            alt="..." />
                                    </div>
                                    <div class="card-body">
                                        <small class="title mb-0 text-dark">Bean Bag Covers & more</small> <br>
                                        <small class="sub-title mb-0 text-success">Extra 10% Off</small> <br>
                                        <small class="extra mb-0 text-muted">Space Saving furniture</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="item">
                                <div class="card text-center border-0">
                                    <div class="img-box mx-auto">
                                        <img src="{{URL::asset('public/frontend/img/d-o-d/f160027cp-hindware-original-imaefqjuw9qfvnhq.jpeg')}}"
                                            alt="..." />
                                    </div>
                                    <div class="card-body">
                                        <p class="title mb-0 text-dark">Bathroom Essentials</p>
                                        <p class="sub-title mb-0 text-success">From <i class="fas fa-rupee-sign"></i>
                                            149
                                        </p>
                                        <small class="extra mb-0 text-muted">Best Selling</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="item">
                                <div class="card text-center border-0">
                                    <div class="img-box mx-auto">
                                        <img src="{{URL::asset('public/frontend/img/d-o-d/free-s-blue-902-offirra-international-unstitched-original-imafuf9qk4c9pfd4.jpeg')}}"
                                            alt="..." />
                                    </div>
                                    <div class="card-body">
                                        <p class="title mb-0 text-dark">Bathroom Essentials</p>
                                        <p class="sub-title mb-0 text-success">From <i class="fas fa-rupee-sign"></i>
                                            149
                                        </p>
                                        <small class="extra mb-0 text-muted">Best Selling</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="ad-area-2 p-2">
            <div class="container">
                <div class="row g-0">
                    <div class="col">
                        <div class="card rounded-0">
                            <img src="{{URL::asset('public/frontend/img/4789bc3aefd54494.jpg" alt="" class="img-fluid')}}">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="suggested-item p-2">
            <div class="container">
                <div class="row g-0 bg-white p-3 heading align-items-center">
                    <div class="col-auto">
                        <span class="mb-0 fs-4 fw-bold">Suggested Items</span> <br>
                        <span class="text-muted">Inspired by Your Interest </span>
                    </div>
                    <div class="col-auto ms-auto">
                        <a class="btn btn-primary btn-sm">VIEW ALL</a>
                    </div>
                </div>
                <div class="row g-0 bg-white p-3">
                    <div class="owl-carousel sgti-carousel owl-theme">

                        <div class="item">
                            <div class="card text-center border-0 p-2">
                                <a href="">
                                    <div class="img-box mx-auto">
                                        <img src="{{URL::asset('public/frontend/img/suggested/9-power-mobhqab1-redmi-original-imafyz93hghvjkmu.jpeg')}}"
                                            alt="..." />
                                    </div>
                                    <div class="card-body px-0">
                                        <p class="title mb-1 text-dark text-nowrap overflow-hidden">realme C12 (Power
                                            Silver, 32 GB)</p>
                                        <small class="sub-title mb-1 text-dark">
                                            <span class="badge bg-success average-rating">4.5<i
                                                    class="fas fa-star"></i></span>&nbsp;
                                            <span class="text-muted fw-bold total-rating">(2,80,848)</span>
                                        </small> <br>
                                        <small class="extra">
                                            <span class="text-dark fw-bold me-1 me-1 selling-price">₹7,999</span>
                                            <span
                                                class="text-decoration-line-through original-price text-muted">₹10,999</span>
                                            <span class="text-success discount">27% off</span>
                                        </small>
                                    </div>
                                </a>
                                <div class="whslt-icon text-muted">
                                    <span><i class="fas fa-heart"></i></span>
                                </div>
                            </div>
                        </div>


                        <div class="item">
                            <div class="card text-center border-0 p-2">
                                <a href="">
                                    <div class="img-box mx-auto">
                                        <img src="{{URL::asset('public/frontend/img/suggested/9-power-mobhqab5-redmi-original-imafyz7aqsrggzgh.jpeg')}}"
                                            alt="..." />
                                    </div>
                                    <div class="card-body px-0">
                                        <p class="title mb-1 text-dark text-nowrap overflow-hidden">REDMI 9i (Sea Blue,
                                            64
                                            GB)</p>
                                        <small class="sub-title mb-0 text-dark">
                                            <span class="badge bg-success">4.5<i class="fas fa-star"></i></span>&nbsp;
                                            <span class="text-muted fw-bold">(2,80,848)</span>
                                        </small> <br>
                                        <small class="extra mb-0 ">
                                            <span class="text-dark fw-bold me-1">₹7,999</span> <span
                                                class="text-decoration-line-through text-muted">₹10,999</span> <span
                                                class="text-success discount">27% off</span>
                                        </small>
                                    </div>
                                </a>
                                <div class="whslt-icon text-muted">
                                    <span><i class="fas fa-heart"></i></span>
                                </div>
                            </div>
                        </div>


                        <div class="item">
                            <div class="card text-center border-0 p-2">
                                <a href="">
                                    <div class="img-box mx-auto">
                                        <img src="{{URL::asset('public/frontend/img/suggested/m3-mzb087ain-poco-original-imafzxf8zqkcgwfv.jpeg')}}"
                                            alt="..." />
                                    </div>
                                    <div class="card-body">
                                        <p class="title mb-1 text-dark text-nowrap overflow-hidden">POCO C3 (Arctic
                                            Blue, 64
                                            GB)</p>
                                        <small class="sub-title mb-0 text-dark">
                                            <span class="badge bg-success">4.5<i class="fas fa-star"></i></span>&nbsp;
                                            <span class="text-muted fw-bold">(2,80,848)</span>
                                        </small> <br>
                                        <small class="extra mb-0 ">
                                            <span class="text-dark fw-bold me-1">₹7,999</span> <span
                                                class="text-decoration-line-through text-muted">₹10,999</span> <span
                                                class="text-success discount">27% off</span>
                                        </small>
                                    </div>
                                </a>
                                <div class="whslt-icon text-muted">
                                    <span><i class="fas fa-heart"></i></span>
                                </div>
                            </div>
                        </div>


                        <div class="item">
                            <div class="card text-center border-0 p-2">
                                <a href="">
                                    <div class="img-box mx-auto">
                                        <img src="{{URL::asset('public/frontend/img/suggested/m3-mzb087cin-poco-original-imafzxf92cbfbnyq.jpeg')}}"
                                            alt="..." />
                                    </div>
                                    <div class="card-body">
                                        <p class="title mb-1 text-dark text-nowrap overflow-hidden">POCO M3 (Cool Blue,
                                            64
                                            GB)</p>
                                        <small class="sub-title mb-0 text-dark">
                                            <span class="badge bg-success">4.5<i class="fas fa-star"></i></span>&nbsp;
                                            <span class="text-muted fw-bold">(2,80,848)</span>
                                        </small> <br>
                                        <small class="extra mb-0 ">
                                            <span class="text-dark fw-bold me-1">₹7,999</span> <span
                                                class="text-decoration-line-through text-muted">₹10,999</span> <span
                                                class="text-success discount">27% off</span>
                                        </small>
                                    </div>
                                </a>
                                <div class="whslt-icon text-muted">
                                    <span><i class="fas fa-heart"></i></span>
                                </div>
                            </div>
                        </div>


                        <div class="item">
                            <div class="card text-center border-0 p-2">
                                <a href="">
                                    <div class="img-box mx-auto">
                                        <img src="{{URL::asset('public/frontend/img/suggested/mi-redmi-9-prime-m2004j191-original-imafushhfhy3tbp9.jpeg')}}"
                                            alt="..." />
                                    </div>
                                    <div class="card-body">
                                        <p class="title mb-1 text-dark text-nowrap overflow-hidden">realme C11 (Rich
                                            Grey,
                                            32 GB)</p>
                                        <small class="sub-title mb-0 text-dark">
                                            <span class="badge bg-success">4.5<i class="fas fa-star"></i></span>&nbsp;
                                            <span class="text-muted fw-bold">(2,80,848)</span>
                                        </small> <br>
                                        <small class="extra mb-0 ">
                                            <span class="text-dark fw-bold me-1">₹7,999</span> <span
                                                class="text-decoration-line-through text-muted">₹10,999</span> <span
                                                class="text-success discount">27% off</span>
                                        </small>
                                    </div>
                                </a>
                                <div class="whslt-icon text-muted">
                                    <span><i class="fas fa-heart"></i></span>
                                </div>
                            </div>
                        </div>


                        <div class="item">
                            <div class="card text-center border-0 p-2">
                                <a href="">
                                    <div class="img-box mx-auto">
                                        <img src="{{URL::asset('public/frontend/img/suggested/poco-c3-mzb07riin-original-imafw8qbg63kvngr.jpeg')}}"
                                            alt="..." />
                                    </div>
                                    <div class="card-body">
                                        <p class="title mb-1 text-dark text-nowrap overflow-hidden">POCO M3 (Yellow, 64
                                            GB)
                                        </p>
                                        <small class="sub-title mb-0 text-dark">
                                            <span class="badge bg-success">4.5<i class="fas fa-star"></i></span>&nbsp;
                                            <span class="text-muted fw-bold">(2,80,848)</span>
                                        </small> <br>
                                        <small class="extra mb-0 ">
                                            <span class="text-dark fw-bold me-1">₹7,999</span> <span                                                                  
                                                class="text-decoration-line-through text-muted">₹10,999</span> <span
                                                class="text-success discount">27% off</span>
                                        </small>
                                    </div>
                                </a>
                                <div class="whslt-icon text-muted">
                                    <span><i class="fas fa-heart"></i></span>
                                </div>
                            </div>
                        </div>


                        <div class="item">
                            <div class="card text-center border-0 p-2">
                                <a href="">
                                    <div class="img-box mx-auto">
                                        <img src="{{URL::asset('public/frontend/img/suggested/realme-c11-rmx2185-original-imaftjf8nadztg9c.jpeg')}}"
                                            alt="..." />
                                    </div>
                                    <div class="card-body">
                                        <p class="title mb-1 text-dark text-nowrap overflow-hidden">REDMI 9 Power
                                            (Mighty
                                            Black, 64 GB)</p>
                                        <small class="sub-title mb-0 text-dark">
                                            <span class="badge bg-success">4.5<i class="fas fa-star"></i></span>&nbsp;
                                            <span class="text-muted fw-bold">(2,80,848)</span>
                                        </small> <br>
                                        <small class="extra mb-0 ">
                                            <span class="text-dark fw-bold me-1">₹7,999</span> <span
                                                class="text-decoration-line-through text-muted">₹10,999</span> <span
                                                class="text-success discount">27% off</span>
                                        </small>
                                    </div>
                                </a>
                                                                                                       <div class="whslt-icon text-muted">
                                    <span><i class="fas fa-heart"></i></span>
                                </div>
                            </div>
                        </div>


                        <div class="item">
                            <div class="card text-center border-0 p-2">
                                <a href="">
                                    <div class="img-box mx-auto">
                                        <img src="{{URL::asset('public/frontend/img/suggested/realme-c12-rmx2189-original-imafupuyahzxtwfq.jpeg')}}"
                                            alt="..." />
                                    </div>
                                    <div class="card-body">
                                        <p class="title mb-1 text-dark text-nowrap overflow-hidden">REDMI 9 Prime (Mint
                                            Green, 64 GB)</p>
                                        <small class="sub-title mb-0 text-dark">
                                            <span class="badge bg-success">4.5<i class="fas fa-star"></i></span>&nbsp;
                                            <span class="text-muted fw-bold">(2,80,848)</span>
                                        </small> <br>
                                        <small class="extra mb-0 ">
                                            <span class="text-dark fw-bold me-1">₹7,999</span> <span
                                                class="text-decoration-line-through text-muted">₹10,999</span> <span
                                                class="text-success discount">27% off</span>
                                        </small>
                                    </div>
                                </a>
                                <div class="whslt-icon text-muted">
                                    <span><i class="fas fa-heart"></i></span>
                                </div>
                            </div>
                        </div>


                        <div class="item">
                            <div class="card text-center border-0 p-2">
                                <a href="">
                                    <div class="img-box mx-auto">
                                        <img src="{{URL::asset('public/frontend/img/suggested/realme-c15-rmx2180-original-imafupu9wutkbf2k.jpeg')}}"
                                            alt="..." />
                                    </div>
                                    <div class="card-body">
                                        <p class="title mb-1 text-dark text-nowrap overflow-hidden">REDMI 9 Power
                                            (Electric
                                            Green, 64 GB)</p>
                                        <small class="sub-title mb-0 text-dark">
                                            <span class="badge bg-success average-rating">4.5<i
                                                    class="fas fa-star"></i></span>&nbsp;
                                            <span class="text-muted fw-bold total-rating">(2,80,848)</span>
                                        </small> <br>
                                        <small class="extra mb-0 ">
                                            <span class="text-dark fw-bold me-1 selling-price">₹7,999</span> <span
                                                class="text-decoration-line-through text-muted original-price">₹10,999</span>
                                            <span class="text-success discount">27% off</span>
                                        </small>
                                    </div>
                                </a>
                                <div class="whslt-icon text-muted">
                                    <span><i class="fas fa-heart"></i></span>
                                </div>
                            </div>
                        </div>


                        <div class="item">
                            <div class="card text-center border-0 p-2">
                                <a href="">
                                    <div class="img-box mx-auto">
                                        <img src="{{URL::asset('public/frontend/img/suggested/redmi-9i-mzb0815in-original-imafvehwghyuphbc.jpeg')}}"
                                            alt="..." />
                                    </div>
                                    <div class="card-body">
                                        <p class="title mb-1 text-dark text-nowrap overflow-hidden">realme C15 Qualcomm
                                            Edition (Power Blue, 64 GB)</p>
                                        <small class="sub-title mb-0 text-dark">
                                            <span class="badge bg-success average-rating">4.5<i
                                                    class="fas fa-star"></i></span>&nbsp;
                                            <span class="text-muted fw-bold total-rating">(2,80,848)</span>
                                        </small> <br>
                                        <small class="extra mb-0 ">
                                            <span class="text-dark fw-bold me-1 selling-price">₹7,999</span> <span
                                                class="text-decoration-line-through text-muted original-price">₹10,999</span>
                                            <span class="text-success discount">27% off</span>
                                        </small>
                                    </div>
                                </a>
                                <div class="whslt-icon text-muted">
                                    <span><i class="fas fa-heart"></i></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>



    </main>

    @endsection