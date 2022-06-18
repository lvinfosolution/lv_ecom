@extends('frontend.layout.main')

@section('main-container')
    <main>

        <section>
            <div class="container mt-2">
                <div class="row g-0 jdh38 ">
                    <div class="col-auto bg-white m-2 ms-0 me-1 filter-col">
                        <div class="row g-0 p-2 top-row align-items-center justify-content-between">
                            <div class="col-auto">
                                <span class="fs-5">Filters</span>
                            </div>
                            <div class="col-auto">
                                <span class="float-end" style="font-size: 12px;"><a href=""
                                        class="text-decoration-none">CLEAR ALL</a></span>
                            </div>
                            <div class="row g-0 my-2">
                                <div class="col-auto p-1">
                                    <div class="toast show shadow-none align-items-center" role="alert"
                                        aria-live="assertive" aria-atomic="true">
                                        <div class="d-flex">
                                            <button type="button" class="btn-close m-auto me-1 p-0" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                            <div class="toast-body p-0">
                                                Hello
                                            </div>                                      
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto p-1">
                                    <div class="toast show shadow-none align-items-center" role="alert"
                                        aria-live="assertive" aria-atomic="true">
                                        <div class="d-flex">
                                            <button type="button" class="btn-close m-auto me-1 p-0" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                            <div class="toast-body p-0">
                                                Hello boy
                                            </div>                                      
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 p-2 price-row border-bottom py-3">
                            <small class="title"><span>PRICE</span> <span class="float-end"><a href=""
                                        class="text-decoration-none">CLEAR</a></span></small>
                            <!-- <div class="row g-0">
                                <div class="col-sm-12">
                                    <div id="slider-range"></div>
                                </div>
                            </div> -->
                            <p>
                            <div id="slider-range"></div>
                            </p>
                            <small>
                                <span id="slider-range-value1" class="fw-bold me-2"></span> to
                                <span id="slider-range-value2" class="fw-bold ms-2"></span>
                            </small>
                            <!-- <div class="row "> -->
                            <!-- <div class="col-auto caption"></div> -->
                            <!-- <strong>Min:</strong> -->
                            <!-- <small id="slider-range-value1" class="w-auto"></small> to <small id="slider-range-value2" class="w-auto"></small> -->
                            <!-- </div> -->
                            <!-- <div class="col-auto  caption"> -->
                            <!-- <strong>Max:</strong>  -->
    
                            <!-- </div> -->
                            <!-- </div> -->
                            <!-- <div class="row g-0"> -->
                            <!-- <div class="col-sm-12"> -->
                            <form>
                                <input type="hidden" name="min-value" value="">
                                <input type="hidden" name="max-value" value="">
                            </form>
                            <!-- </div> -->
                            <!-- </div> -->
                        </div>
                        <div class="row g-0">
                            <button class="accordion bg-white active">BRAND</button>
                            <div class="panel border-bottom" style="max-height: 220px; padding-bottom: 30px;">
                                <p class="w-100 border-0 border-bottom">
                                    <i class="fas fa-search text-muted"></i>
                                    <input id="brand" type="text" class="border-0 ms-1" placeholder="Search Brand">
                                </p>
                                <!-- <br> -->
                                <ul id="brand">
                                    <li>
                                        <div></div> dakshin grandeur
                                    </li>
                                    <li>
                                        <div></div> Krishna R fashion
                                    </li>
                                    <li>
                                        <div></div> Anand
                                    </li>
                                    <li>
                                        <div></div> 2211 Fashion
                                    </li>
                                    <li>
                                        <div></div> 4METIK STYLE
                                    </li>
                                </ul>
                                <a href="" class="text-decoration-none more-link mb-3">200 MORE</a>
                            </div>
    
                            <button class="accordion bg-white active">CUSTOMER RATINGS</button>
                            <div class="panel border-bottom" style="max-height: 220px; padding-bottom: 30px;">
                                <ul id="ratings">
                                    <li>
                                        <div></div> 4★ & above
                                    </li>
                                    <li>
                                        <div></div> 3★ & above
                                    </li>
                                    <li>
                                        <div></div> 2★ & above
                                    </li>
                                    <li>
                                        <div></div> 1★ & above
                                    </li>
                                </ul>
                            </div>
    
                            <button class="accordion bg-white">DISCOUNT</button>
                            <div class="panel border-bottom">
                                <ul id="discount">
                                    <li>
                                        <div></div> 10% and below
                                    </li>
                                    <li>
                                        <div></div> 10% and more
                                    </li>
                                    <li>
                                        <div></div> 20% and more
                                    </li>
                                    <li>
                                        <div></div> 30% and more
                                    </li>
                                    <li>
                                        <div></div> 40% and more
                                    </li>
                                    <li>
                                        <div></div> 50% and more
                                    </li>
                                    <li>
                                        <div></div> 60% and more
                                    </li>
                                    <li>
                                        <div></div> 70% and more
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col bg-white m-2 ms-1 me-0">
                        <div class="row g-0 heading px-3 pt-3">
                            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item active"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active"><a href="">Clothing and Accessories</a></li>
                                    <li class="breadcrumb-item active"><a href="">Saree and Saree Essentials</a></li>
                                    <li class="breadcrumb-item active"><a href="">Sarees</a></li>
                                    <li class="breadcrumb-item active"><a href="">Women's Saree</a></li>
                                </ol>
                            </nav>
                            <p class="title mb-1">Showing 1 – 40 of 4,10,836 results for "sarees"</p>
                            <p class="sorting mb-1">
                                <span style="font-weight: 500;">Sort By</span>
                                <span><a href="" class="mx-2 active">Relevance</a></span>
                                <span><a href="" class="mx-2">Popularity</a></span>
                                <span><a href="" class="mx-2">Price--Low to High</a></span>
                                <span><a href="" class="mx-2">Price--High to Low</a></span>
                                <span><a href="" class="mx-2">Newest First</a></span>
                            </p>
                        </div>
                        <div class="row g-0">
                            <div class="col-6 col-lg-3 p-1">
                                <div class="card text-center border-0 p-1">
                                    <a href="">
                                        <div class="img-box mx-auto">
                                            <img src="assets/img/p-l/free-1262-5-kashvi-sarees-unstitched-original-imafsepbpnpbxgsz.jpeg"
                                                alt="..." />
                                        </div>
                                        <div class="card-body px-0">
                                            <span class="brand text-muted">Aksh Fashion</span>
                                            <p class="title mb-1 text-dark text-nowrap overflow-hidden">Woven Paithani Art
                                                Silk Saree</p>
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
                            <div class="col-6 col-lg-3 p-1">
                                <div class="card text-center border-0 p-1">
                                    <a href="">
                                        <div class="img-box mx-auto">
                                            <img src="assets/img/p-l/free-desirable-admirable-most-south-indian-bengali-creative-original-imafzpdejv2hzndd.jpeg"
                                                alt="..." />
                                        </div>
                                        <div class="card-body px-0">
                                            <span class="brand text-muted">Aksh Fashion</span>
                                            <p class="title mb-1 text-dark text-nowrap overflow-hidden">Woven Paithani Art
                                                Silk Saree</p>
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
                            <div class="col-6 col-lg-3 p-1">
                                <div class="card text-center border-0 p-1">
                                    <a href="">
                                        <div class="img-box mx-auto">
                                            <img src="assets/img/p-l/free-kara115-red-sariya-original-imafjhsbhzkhbqcz.jpeg"
                                                alt="..." />
                                        </div>
                                        <div class="card-body px-0">
                                            <span class="brand text-muted">Aksh Fashion</span>
                                            <p class="title mb-1 text-dark text-nowrap overflow-hidden">Woven Paithani Art
                                                Silk Saree</p>
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
                            <div class="col-6 col-lg-3 p-1">
                                <div class="card text-center border-0 p-1">
                                    <a href="">
                                        <div class="img-box mx-auto">
                                            <img src="assets/img/p-l/free-kashmiri-sumantra-fashion-original-imaf5jd6eyguzbte.jpeg"
                                                alt="..." />
                                        </div>
                                        <div class="card-body px-0">
                                            <span class="brand text-muted">Aksh Fashion</span>
                                            <p class="title mb-1 text-dark text-nowrap overflow-hidden">Woven Paithani Art
                                                Silk Saree</p>
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
                            <div class="col-6 col-lg-3 p-1">
                                <div class="card text-center border-0 p-1">
                                    <a href="">
                                        <div class="img-box mx-auto">
                                            <img src="assets/img/p-l/free-new-more-kanjivaram-fashion-anusuya-saree-original-imafgvemre4fcxy6.jpeg"
                                                alt="..." />
                                        </div>
                                        <div class="card-body px-0">
                                            <span class="brand text-muted">Aksh Fashion</span>
                                            <p class="title mb-1 text-dark text-nowrap overflow-hidden">Woven Paithani Art
                                                Silk Saree</p>
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
                            <div class="col-6 col-lg-3 p-1">
                                <div class="card text-center border-0 p-1">
                                    <a href="">
                                        <div class="img-box mx-auto">
                                            <img src="assets/img/p-l/free-wedding-sarees-vaidehi-fashion-unstitched-original-imafz3zfpjpnrqrn.jpeg"
                                                alt="..." />
                                        </div>
                                        <div class="card-body px-0">
                                            <span class="brand text-muted">Aksh Fashion</span>
                                            <p class="title mb-1 text-dark text-nowrap overflow-hidden">Woven Paithani Art
                                                Silk Saree</p>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection
    