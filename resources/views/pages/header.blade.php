<header class="header-one header--sticky">
    <div class="header-top-one-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="header-top-one">
                        <div class="left-information">
                            <a href="mailto:info@sikshanation.com" class="email"><i
                                    class="fa-light fa-envelope"></i>info@sikshanation.com</a>
                            <a href="tel:+91 000 000 0000" class="email"><i class="fa-light fa fa-phone"></i>+91 000
                                000 0000</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-top-one">
                        <div class="right-information">
                            <marquee style="background:#553cdf; color:#fff; line-height:30px; font-size:16px;"
                                behavior="scroll" direction="left" onmouseover="this.stop();"
                                onmouseout="this.start();">
                                Apply your skills in the right place. Choose from over 500+ trending courses across India.
                            </marquee>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header-top-one float-end">
                        <div class="right-information">
                           <a href="#" class="text-light"><i class="fa-brands fa-facebook-square display-6"></i></a>
                            <a href="#" class="text-light"><i class="fa-brands fa-twitter display-6"></i></a>
                            <a href="#" class="text-light"><i class="fa-brands fa-youtube-square display-6"></i></a>
                            <a href="#" class="text-light"><i class="fa-brands fa-linkedin display-6"></i></a>
                            <a href="#" class="text-light"><i class="fa-brands fa-instagram-square display-6"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-one-wrapper">
                    <div class="left-side-header">
                        <a href="/" class="logo-area">
                            <img src="{{url('assets/images/logo2.png')}}" alt="Sikshanation">
                        </a>

                        <div class="main-nav-one">
                            <nav>
                                <ul>
                                    <li style="position: static;">
                                        <a class="nav-link" href="./">Home</a>
                                    </li>


                                    <li class="has-dropdown">
                                        <a class="nav-link" href="#">About Us</a>
                                        <ul class="submenu">
                                            <li><a href="about.php">About Us</a></li>
                                            <li><a href="vision-mission.php">Vision & Mission</a></li>
                                            <li><a href="why-choose.php">Why Choose Us</a></li>
                                            <li><a href="placement.php">Future Help in Placement</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown" style="position: static;">
                                        <a class="nav-link" href="#">Colleges</a>
                                        <ul class="megamenu-hub min-mega shape-move">
                                            <li>
                                                <ul class="">
                                                    <li class="parent"><a href="colleges.php">Colleges By Degrees </a>
                                                       
                                                        @foreach(App\Models\course::all() as $course)
                                                        <li><a class="mobile-menu-link" href="{{url('colleges')}}/{{$course->id}}"> {{$course->course_name}} </a></li>
                                                        @endforeach
                                                </ul>
                                            
                                                <ul class="">
                                                    <li class="parent"><a href="#">Top Colleges</a></li>
                                                    @foreach(App\Models\college::all() as $course)
                                                    <li><a class="mobile-menu-link" href="{{url('college_detail')}}/{{$course->id}}"> {{$course->college_name}} </a></li>
                                                    @endforeach
                                                </ul>
                                                <div class="thumbnav-area">
                                                    <!-- single thumbnav -->
                                                    <a href="create-course.html" class="single-thumbnav">
                                                        <div class="icon">
                                                            <img src="{{url('assets/images/04.png')}}" alt="nav">
                                                        </div>
                                                        <span>Exam</span>
                                                    </a>
                                                    <!-- single thumbnav end -->
                                                    <!-- single thumbnav -->
                                                    <a href="lesson-details.html" class="single-thumbnav mash">
                                                        <div class="icon">
                                                            <img src="{{url('assets/images/05.png')}}" alt="nav">
                                                        </div>
                                                        <span>Trending Courses</span>
                                                    </a>
                                                    <!-- single thumbnav end -->
                                                    <!-- single thumbnav -->
                                                    <a href="instructor.html" class="single-thumbnav">
                                                        <div class="icon">
                                                            <img src="{{url('assets/images/06.png')}}" alt="nav">
                                                        </div>
                                                        <span>Scholarships</span>
                                                    </a>
                                                    <!-- single thumbnav end -->
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown" style="position: static;">
                                        <a class="nav-link" href="#">Courses</a>
                                        <ul class="megamenu-hub min-mega shape-move">
                                            <li>
                                                <ul class="" style="display: inline-block;
                                                margin-right: 10px;">
                                                    
                                                    <li class="parent"><a href="colleges.php">Popular Courses </a></li>
                                                    @foreach(App\Models\course::all() as $course)
                                                    <li><a class="mobile-menu-link" href="{{url('course_detail')}}/{{$course->id}}"> {{$course->course_name}} </a></li>
                                                    @endforeach
                                                </ul>
                                                 
                                               
                                                <div class="thumbnav-area">
                                                    <!-- single thumbnav -->
                                                    <a href="#" class="single-thumbnav">
                                                        <div class="icon">
                                                            <img src="{{url('assets/images/04.png')}}" alt="nav">
                                                        </div>
                                                        <span>Exam</span>
                                                    </a>
                                                    <!-- single thumbnav end -->
                                                    <!-- single thumbnav -->
                                                    <a href="#" class="single-thumbnav mash">
                                                        <div class="icon">
                                                            <img src="{{url('assets/images/05.png')}}" alt="nav">
                                                        </div>
                                                        <span>Trending Courses</span>
                                                    </a>
                                                    <!-- single thumbnav end -->
                                                    <!-- single thumbnav -->
                                                    <a href="#" class="single-thumbnav">
                                                        <div class="icon">
                                                            <img src="{{url('assets/images/06.png')}}" alt="nav">
                                                        </div>
                                                        <span>Scholarships</span>
                                                    </a>
                                                    <!-- single thumbnav end -->
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="has-dropdown" style="position: static;">
                                        <a class="nav-link" href="#">Places</a>
                                        <ul class="megamenu-hub min-mega shape-move">
                                            <li>
                                                <ul class="">
                                                    <li class="parent"><a href="colleges.php">Colleges By Location </a>
                                                    </li>
                                                    <li><a class="mobile-menu-link" href="colleges.php"> Nashik Maharastra</a>
                                                    </li>
                                                    <li><a class="mobile-menu-link" href="colleges.php"> Madhubani Bihar </a>
                                                    </li>
                                                    <li><a class="mobile-menu-link" href="#"> Bhathinda Punjab</a></li>
                                                    <li><a class="mobile-menu-link" href="#"> Roorkee Utrakhand </a></li>
                                                    <li><a class="mobile-menu-link" href="#"> Indore Madhya Pradesh</a></li>
                                                    <li><a class="mobile-menu-link" href="#"> Amritsar Punjab </a></li>
                                                    <li><a class="mobile-menu-link" href="#"> Ahmadabad Gujrat</a></li>
                                                    <li><a class="mobile-menu-link" href="btech.php">Rajpura Punjab</a></li>
                                                </ul>
                                                <ul class="">
                                                    <li class="parent"><a href="#">&nbsp;</a></li>
                                                    <li><a class="mobile-menu-link" href="colleges.php">Raipur Chattisgarh</a></li>
                                                    <li><a class="mobile-menu-link" href="colleges.php">Ahamadabad Gujrat</a></li>
                                                    <li><a class="mobile-menu-link" href="#"> Ludhiana Punjab </a></li>
                                                    <li><a class="mobile-menu-link" href="#"> Greater Noida </a></li>
                                                    <li><a class="mobile-menu-link" href="#"> Banglor Karnataka</a></li>
                                                    <li><a class="mobile-menu-link" href="#"> Dehradun Uttrakhand </a></li>
                                                    <li><a class="mobile-menu-link" href="#"> Solan Himachal Pardesh</a></li>
                                                </ul>
                                                <ul class="">
                                                    <li class="parent"><a href="#">&nbsp;</a></li>
                                                    <li><a class="mobile-menu-link" href="colleges.php"> Banglor Karnataka</a></li>
                                                    <li><a class="mobile-menu-link" href="#"> Sangrur Punjab</a></li>
                                                    <li><a class="mobile-menu-link" href="#"> Amritsar Punjab </a></li>
                                                    <li><a class="mobile-menu-link" href="#"> Jahanabad Bihar</a></li>
                                                    <li><a class="mobile-menu-link" href="#"> Bhopal Madhya Pradesh</a></li>
                                                    <li><a class="mobile-menu-link" href="#"> Samastipur Bihar</a></li>
                                                    <li><a class="mobile-menu-link" href="#"> Patna Bihar </a></li>
                                                </ul>
                                                <div class="thumbnav-area">
                                                    <!-- single thumbnav -->
                                                    <a href="#" class="single-thumbnav">
                                                        <div class="icon">
                                                            <img src="assets/images/04.png" alt="nav">
                                                        </div>
                                                        <span>Exam</span>
                                                    </a>
                                                    <!-- single thumbnav end -->
                                                    <!-- single thumbnav -->
                                                    <a href="#" class="single-thumbnav mash">
                                                        <div class="icon">
                                                            <img src="assets/images/05.png" alt="nav">
                                                        </div>
                                                        <span>Trending Courses</span>
                                                    </a>
                                                    <!-- single thumbnav end -->
                                                    <!-- single thumbnav -->
                                                    <a href="#" class="single-thumbnav">
                                                        <div class="icon">
                                                            <img src="assets/images/06.png" alt="nav">
                                                        </div>
                                                        <span>Scholarships</span>
                                                    </a>
                                                    <!-- single thumbnav end -->
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="mentors.php">Mentors</a>
                                    </li>
                                    
                                    <li>
                                        <a class="nav-link" href="enquiry.php">Enquiry</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="contact.php">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                    <div class="header-right-area-one">
                        <div class="actions-area">
                            <div class="search-btn" id="search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                    fill="none">
                                    <path
                                        d="M19.9375 18.9652L14.7454 13.7732C15.993 12.2753 16.6152 10.3542 16.4824 8.40936C16.3497 6.46453 15.4722 4.64575 14.0326 3.33139C12.593 2.01702 10.7021 1.30826 8.75326 1.35254C6.8044 1.39683 4.94764 2.19075 3.56924 3.56916C2.19083 4.94756 1.39691 6.80432 1.35263 8.75317C1.30834 10.702 2.0171 12.5929 3.33147 14.0325C4.64584 15.4721 6.46461 16.3496 8.40944 16.4823C10.3543 16.6151 12.2754 15.993 13.7732 14.7453L18.9653 19.9374L19.9375 18.9652ZM2.75 8.93742C2.75 7.71365 3.11289 6.51736 3.79278 5.49983C4.47267 4.4823 5.43903 3.68923 6.56965 3.22091C7.70026 2.7526 8.94436 2.63006 10.1446 2.86881C11.3449 3.10756 12.4474 3.69686 13.3127 4.56219C14.1781 5.42753 14.7674 6.53004 15.0061 7.7303C15.2449 8.93055 15.1223 10.1747 14.654 11.3053C14.1857 12.4359 13.3926 13.4022 12.3751 14.0821C11.3576 14.762 10.1613 15.1249 8.9375 15.1249C7.29703 15.1231 5.72427 14.4706 4.56429 13.3106C3.4043 12.1506 2.75182 10.5779 2.75 8.93742Z"
                                        fill="#553CDF" />
                                </svg>
                            </div>
                        </div>
                        <div class="buttons-area">
                            <a href="login.php" class="rts-btn btn-border">Log In</a>
                            <a href="signup.php" class="rts-btn btn-primary">Sign Up</a>
                        </div>
                        <div class="menu-btn" id="menu-btn">
                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect y="14" width="20" height="2" fill="#1F1F25"></rect>
                                <rect y="7" width="20" height="2" fill="#1F1F25"></rect>
                                <rect width="20" height="2" fill="#1F1F25"></rect>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>