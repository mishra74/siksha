@extends('layouts.user')

@section('title', 'Home')

@section('content')
    <div class="login-registration-wrapper">
        <div class="container">
            <div class="row g-0">
            <div class="col-lg-6">
                    <div class="login-page-form-area">
                        <h4 class="title">Apply For Frenchaichies 👋</h4>
                        <form action="#">
                            <div class="single-input-wrapper">
                                <label for="name">Your Name*</label>
                                <input id="name" type="text" placeholder="Enter Your Name" required>
                            </div>
                            <div class="half-input-wrapper">
                                <div class="single-input-wrapper">
                                    <label for="username">Number</label>
                                    <input id="number" type="text" placeholder="Enter User Name" name="number" required>
                                </div>
                                <div class="single-input-wrapper">
                                    <label for="email">Email*</label>
                                    <input id="email" type="email" placeholder="Enter Your Email" name="email" required>
                                </div>
                            </div>
                            <div class="half-input-wrapper">
                                <div class="single-input-wrapper">
                                    <label for="password">State</label>
                                    <input id="password" type="text" placeholder="state" name="state" required>
                                </div>
                                <div class="single-input-wrapper">
                                    <label for="area">Area</label>
                                    <input id="area" type="text" placeholder="Area" name="area" required>
                                </div>
                            </div>
                           
                            <button class="rts-btn btn-primary" type="submit">Apply</button>
                           
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-thumbnail-login-p mt--100">
                        <img src="assets/images/login-bg.png" width="600" height="495" alt="login-form">
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- rts blog area end -->

    <!-- fun facts area start -->
    <div class="fun-facts-area-1 shape-move bg_image ptb--50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="fun-facts-main-wrapper-1">
                        <!-- single  -->
                        <div class="single-fun-facts">
                            <div class="icon">
                                <img src="assets/images/t1.png" alt="icon">
                            </div>
                            <h5 class="title"><span class="counter">65,972</span></h5>
                            <span class="enr">Students Enrolled</span>
                        </div>
                        <!-- single end -->
                        <!-- single  -->
                        <div class="single-fun-facts">
                            <div class="icon">
                                <img src="assets/images/t2.png" alt="icon">
                            </div>
                            <h5 class="title"><span class="counter">5,321</span></h5>
                            <span class="enr">No. Of Course</span>
                        </div>
                        <!-- single end -->
                        <!-- single  -->
                        <div class="single-fun-facts">
                            <div class="icon">
                                <img src="assets/images/t3.png" alt="icon">
                            </div>
                            <h5 class="title"><span class="counter">44,239</span></h5>
                            <span class="enr">Students Admission</span>
                        </div>
                        <!-- single end -->
                        <!-- single  -->
                        <div class="single-fun-facts">
                            <div class="icon">
                                <img src="assets/images/t4.png" alt="icon">
                            </div>
                            <h5 class="title"><span class="counter">75,992</span></h5>
                            <span class="enr">No. Of Colleges</span>
                        </div>
                        <!-- single end -->
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-image">
            <div class="shape one" data-speed="0.04" data-revert="true"><img src="assets/images/15.png" alt=""></div>
            <div class="shape three" data-speed="0.04"><img src="assets/images/16.png" alt=""></div>
        </div>
    </div>
    <!-- fun facts area end -->
    <!-- about area end -->

    <!-- footer call to action area start -->
    
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
