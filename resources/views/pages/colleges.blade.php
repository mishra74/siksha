@extends('layouts.user')

@section('title', 'Home')

@section('content')

    <!-- header style end -->
     <!-- bread crumb area -->
     <div class="rts-bread-crumbarea-1 rts-section-gap bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-main-wrapper">
                        <h1 class="title">Top MBA Colleges in India 2024</h1>
                        <!-- breadcrumb pagination area -->
                        <div class="pagination-wrapper">
                            <a href="./">Home</a>
                            <i class="fa-regular fa-chevron-right"></i>
                            <a class="active" href="#">Top MBA Colleges in India 2024</a>
                        </div>
                        <!-- breadcrumb pagination area end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread crumb area end -->


    <!-- course area start -->
    <div class="rts-course-default-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3">
                    <!-- course-filter-area start -->
                    <div class="rts-course-filter-area">
                        <!-- single filter wized -->
                        <div class="single-filter-left-wrapper">
                            <h6 class="title">Search</h6>
                            <div class="search-filter filter-body">
                                <div class="input-wrapper">
                                    <input type="text" placeholder="Search Course...">
                                    <i class="fa-light fa-magnifying-glass"></i>
                                </div>
                            </div>
                        </div>
                        <!-- single filter wized end -->
                        <!-- single filter wized -->
                        <div class="single-filter-left-wrapper">
                            <h6 class="title"> DEGREE </h6>
                            <div class="checkbox-filter filter-body overflow-auto">
                                <div class="checkbox-wrapper">
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="type-1">
                                            <label for="type-1">M.B.A. (Master of Business Administration)</label><br>
                                        </div>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="type-2">
                                            <label for="type-2">M.Com. (Master of Commerce)</label><br>
                                        </div>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="type-3">
                                            <label for="type-3">B.Arch. (Bachelor of Architecture)</label><br>
                                        </div>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="type-4">
                                            <label for="type-4">M.Arch. (Master of Architecture)</label><br>
                                        </div>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="type-5">
                                            <label for="type-5">B.Tech. (Bachelor of Technology)</label><br>
                                        </div>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="type-6">
                                            <label for="type-6">Ph.D. (Doctor of Philosophy)</label><br>
                                        </div>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="type-7">
                                            <label for="type-7">M.D.S. (Master of Dental Surgery)</label><br>
                                        </div>
                                    </div>
                                    <!-- single check box end -->
                                </div>
                            </div>
                        </div>
                        <!-- single filter wized end -->
                        <!-- single filter wized -->
                        <div class="single-filter-left-wrapper">
                            <h6 class="title">STATE</h6>
                           <div class="search-filter filter-body">
                                <div class="input-wrapper">
                                    <input type="text" placeholder="Search Course...">
                                    <i class="fa-light fa-magnifying-glass"></i>
                                </div>
                            </div>
                            <div class="checkbox-filter filter-body overflow-auto">
                                <div class="checkbox-wrapper">
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="category-1">
                                            <label for="category-1">Andhra Pradesh</label><br>
                                        </div>
                                        <span class="number">(130)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="category-2">
                                            <label for="category-2">Arunachal Pradesh</label><br>
                                        </div>
                                        <span class="number">(85)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="category-3">
                                            <label for="category-3">Assam</label><br>
                                        </div>
                                        <span class="number">(210)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="category-4">
                                            <label for="category-4">Bihar</label><br>
                                        </div>
                                        <span class="number">(45)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="category-5">
                                            <label for="category-5">Chandigarh</label><br>
                                        </div>
                                        <span class="number">(35)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="category-6">
                                            <label for="category-6">Chhattisgarh</label><br>
                                        </div>
                                        <span class="number">(66)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="category-7">
                                            <label for="category-7">Dadra and Nagar Haveli</label><br>
                                        </div>
                                        <span class="number">(95)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="category-8">
                                            <label for="category-8">Delhi</label><br>
                                        </div>
                                        <span class="number">(150)</span>
                                    </div>
                                    <!-- single check box end -->
                                </div>
                            </div>
                        </div>
                        <!-- single filter wized end -->
                        <!-- single filter wized -->
                        <div class="single-filter-left-wrapper">
                            <h6 class="title">CITY</h6>
                            <div class="checkbox-filter filter-body overflow-auto">
                                <div class="checkbox-wrapper">
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="lavel-1">
                                            <label for="lavel-1">24 Parganas</label><br>
                                        </div>
                                        <span class="number">(1)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="lavel-2">
                                            <label for="lavel-2">Amaravati</label><br>
                                        </div>
                                        <span class="number">(2)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="lavel-3">
                                            <label for="lavel-3">Allahabad</label><br>
                                        </div>
                                        <span class="number">(210)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="lavel-4">
                                            <label for="lavel-4">Agartala</label><br>
                                        </div>
                                        <span class="number">(2)</span>
                                    </div>
                                    <!-- single check box end -->
                                </div>
                            </div>
                        </div>
                        <!-- single filter wized end -->
                        <!-- single filter wized -->
                        <div class="single-filter-left-wrapper">
                            <h6 class="title">STUDY MODE</h6>
                            <div class="checkbox-filter filter-body overflow-auto">
                                <div class="checkbox-wrapper">
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="author-1">
                                            <label for="author-1">Distance Learning</label><br>
                                        </div>
                                        <span class="number">(60)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="author-2">
                                            <label for="author-2">Part Time</label><br>
                                        </div>
                                        <span class="number">(85)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="author-3">
                                            <label for="author-3">Regular</label><br>
                                        </div>
                                        <span class="number">(410)</span>
                                    </div>
                                    <!-- single check box end -->
                                   
                                </div>
                            </div>
                        </div>
                        <!-- single filter wized end -->
                        <!-- single filter wized -->
                        <div class="single-filter-left-wrapper">
                            <h6 class="title">EXAM</h6>
                            <div class="checkbox-filter filter-body overflow-auto">
                                <div class="checkbox-wrapper">
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="Tage-1">
                                            <label for="Tage-1">CMAT</label><br>
                                        </div>
                                        <span class="number">(10)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="Tage-2">
                                            <label for="Tage-2">CAT</label><br>
                                        </div>
                                        <span class="number">(85)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="Tage-3">
                                            <label for="Tage-3">MAT</label><br>
                                        </div>
                                        <span class="number">(21)</span>
                                    </div>
                                    <!-- single check box end -->
                                </div>
                            </div>
                        </div>
                        <!-- single filter wized end -->
                        <!-- single filter wized -->
                        <div class="single-filter-left-wrapper">
                            <h6 class="title">INSTITUTE TYPE</h6>
                            <div class="checkbox-filter filter-body last">
                                <div class="checkbox-wrapper">
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="price-1">
                                            <label for="price-1">Govt</label><br>
                                        </div>
                                        <span class="number">(6)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="price-2">
                                            <label for="price-2">Private</label><br>
                                        </div>
                                        <span class="number">(80)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="price-3">
                                            <label for="price-3">Public</label><br>
                                        </div>
                                        <span class="number">(30)</span>
                                    </div>
                                    <!-- single check box end -->
                                </div>
                            </div>
                        </div>
                        <!-- single filter wized end -->
                        <a href="#" class="rts-btn btn-border"><i class="fa-regular fa-x"></i> Clear All Filters</a>
                    </div>
                    <!-- course-filter-area end -->
                </div>
                <div class="col-lg-9">
                    <!-- filter top-area  -->
                    <div class="tab-content" id="myTabContent">
                        
                        <div class="tab-pane fade  show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row g-5 mt--0">
                                <div class="col-lg-12">
                                    <!-- rts single course -->
                                    
                                        

                                    </div>
                                    <!-- rts single course end -->
                                    <!-- rts single course -->
                                    @if($data!=="")
                                    @foreach($data as $college)
                                    <div class="rts-single-course course-list">
                                        <a href="#" class="thumbnail">
                                            <img src="{{url($college->collegeImage)}}" alt="course">
                                        </a>
                                        <div class="information-inner">
                                            <a href="#">
                                                <h5 class="title">{{$college->college_name}}</h5>
                                            </a>
                                            <p class="disc">{{$college->CollegeDetail}}</p>
                                            <div class="tags-area-wrapper">
                                                <a class="btn btn-primary" href="#">Download Brochure</a>
                                                <a class="btn btn-danger" href="#">Fee Structure </a>
                                            </div>
                                            <div class="rating-and-price">
                                                <div class="rating-area">
                                                    <span>4.5</span>
                                                    <div class="stars">
                                                        <ul>
                                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                            <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="price-area">
                                                <a class="rts-btn btn-primary" href="signup.php">Apply Now</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    @endforeach

                                    @else
                                    <div class="rts-single-course course-list">
                                     <h1>Record Not Found</h1>

                                    </div>
                                    @endif
                                  
                                    
                                    <!-- rts single course -->
                                  
                                    <!-- rts single course end -->
                                </div>
                            </div>
                            <div class="row mt--30">
                                <div class="col-lg-12">
                                    <!-- rts-pagination-area -->
                                    <div class="rts-pagination-area-2">
                                        <ul>
                                            <li><i class="fa-solid fa-chevron-left"></i></li>
                                            <li class="active">1</li>
                                            <li>2</li>
                                            <li>3</li>
                                            <li>4</li>
                                            <li><i class="fa-solid fa-chevron-right"></i></li>
                                        </ul>
                                    </div>
                                    <!-- rts-pagination-area end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- course area end -->



    <!-- all scripts -->
    <!-- jquery min js -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- jquery ui js -->
    <script src="assets/js/jquery-ui.js"></script>
    <!-- metismenu js -->
    <script src="assets/js/metismenu.js"></script>
    <!-- magnific popup js-->
    <script src="assets/js/magnifying-popup.js"></script>
    <!-- swiper JS 10.2.0 -->
    <script src="assets/js/swiper.js"></script>
    <!-- counterup js -->
    <script src="assets/js/counterup.js"></script>
    <!-- waypoint js -->
    <script src="assets/js/waypoint.js"></script>
    <!-- wow js -->
    <script src="assets/js/waw.js"></script>
    <!-- isotop mesonary -->
    <script src="assets/js/isotop.js"></script>
    <!-- jquery imageloaded -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- resize sensor js -->
    <script src="assets/js/resizer-sensor.js"></script>
    <!-- sticky sidebar -->
    <script src="assets/js/sticky-sidebar.js"></script>
    <!-- gsap twinmax js -->
    <script src="assets/js/twinmax.js"></script>
    <!-- chroma js -->
    <script src="assets/js/chroma.min.js"></script>
    <!-- bootstrap 5.0.2 -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- dymanic Contact Form -->
    <script src="assets/js/contact.form.js"></script>
    <!-- calender js -->
    <script src="assets/js/calender.js"></script>
    <!-- main Js -->
    <script src="assets/js/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var myCarousel = document.getElementById('myCarousel');
            var carousel = new bootstrap.Carousel(myCarousel, {
                interval: 1000, // Set the interval (in milliseconds) for the autoplay
                wrap: false // Set wrap to false if you don't want the carousel to loop
            });
        });
    </script>
@endsection
