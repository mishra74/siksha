@extends('layouts.user')

@section('title', 'Home')

@section('content')
    <div class="course-details-breadcrumb-1 bg_image pt-5 mt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-course-left-align-wrapper pt-5 mt-5 pb-5">
                        <div class="meta-area">
                            <a href="./">Home</a>
                            <i class="fa-solid fa-chevron-right"></i>
                            <a class="active" href="#">Course Details</a>
                        </div>
                        <h1 class="title">
                            {{$data->course_name}} ({{$data->fullNameCourse}})
                        </h1>
                        <div class="rating-area">
                            <div class="stars-area">
                                <span>4.5</span>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="students">
                                <i class="fa-thin fa-users"></i>
                                <span>3054 Students</span>
                            </div>
                            <div class="calender-area-stars">
                                <i class="fa-light fa-calendar-lines-pen"></i>
                                <span>Last updated 12/2024</span>
                            </div>
                        </div>
                        <div class="author-area">
                            <p> <span>Course: </span> : Full Form, Degree, Subjects, Top Colleges</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- course details breadcrumb end -->


    <!-- course details area start -->
    <div class="rts-course-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8 order-cl-1 order-lg-1 order-md-2 order-sm-2 order-2">
                    <div class="course-details-btn-wrapper pb--50">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">Overview</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link " id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                    aria-selected="false">Syllabus</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                    type="button" role="tab" aria-controls="contact" aria-selected="false">Jobs</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contacts-tab" data-bs-toggle="tab"
                                    data-bs-target="#contacts" type="button" role="tab" aria-controls="contacts"
                                    aria-selected="false">Salary</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button onclick="location.href='colleges.php';" class="nav-link" id="colleges-tab" data-bs-toggle="tab"
                                    data-bs-target="#colleges" type="button" role="tab" aria-controls="colleges"
                                    aria-selected="false">Popular Colleges</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content mt--50" id="myTabContent">
                        <div class="tab-pane fade  show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="course-content-wrapper">
                                <h5 class="title">{{$data->course_name}} Course Overview</h5>
                                <p class="disc">
                                    B Tech or Bachelor of Technology is a four-year undergraduate Course that covers all
                                    the domains of Engineering and Technology. The B.Tech course list is available for
                                    Candidates in various specializations such as Computer Engineering, Civil
                                    Engineering, Mechanical Engineering, Chemical Engineering, etc. As per BTech
                                    eligibility criteria, candidates can pursue a B Tech course after passing Class 12th
                                    with Physics, Chemistry, Mathematics/Biology. BTech admission is done majorly via
                                    engineering entrance exams like JEE Main, JEE Advanced, BITSAT, WBJEE, COMEDK UGET,
                                    etc. However, many colleges offer direct entry based on Class 12 marks. Through the
                                    BTech syllabus candidates develop the technical skills that can be invested in the
                                    core technology and development industry.
                                </p>
                                <p class="disc">
                                    B Tech course is available in both online, and offline modes in various institutes
                                    in India. Apart from the core engineering field. The B Tech course allows candidates
                                    to work in the Information Security, Data Analysis, and Management, Engineering,
                                    Banking sectors. Candidates can also apply for BTech Jobs in various Public Sector
                                    Undertakings like CIL, ONGC, NTPC, etc. India produces more than 10 lakh BTech
                                    graduates every year and engineering education in India comprises around 2500
                                    engineering colleges and 1300 polytechnic colleges. Some of the top BTech colleges
                                    in India are IIT Delhi, IIT Madras, IIT Kharagpur, BITS Pilani, NIT Trichy, etc. The
                                    B Tech fees in India are around INR 2,00,000 to 5,00,000 Per Annum on average. The
                                    BTech Salary is INR 3,50,000 to INR 5,00,000 PA.
                                </p>

                                <div class="module-wrapper">
                                    <h6 class="title">Interesting and Fun Facts About BTech</h6>




                                    <div class="inner-content">
                                        <div class="single-wrapper">
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>The development of television and radio technology can be attributed
                                                    to engineers.</p>
                                            </div>
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>Civil engineers created water slides and pumps.</p>
                                            </div>
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>Computer engineers have collaborated with animators to produce
                                                    special effects in popular movies like "Forrest Gump" and "Jurassic
                                                    Park."</p>
                                            </div>
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>The sport of snowboarding owes its existence to the intersection of
                                                    geometry, biomechanics, and chemistry.</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="module-wrapper mt-5">
                                    <h6 class="title">B Tech Course Highlights</h6>
                                    <p class="disc">A B Tech degree is seen as a stepping stone into the area of
                                        engineering. Candidates willing to pursue a BTech course are always advised to
                                        check the highlights before proceeding with the other details. A highlight
                                        provides an overview of the course. If you are planning to pursue the course,
                                        then go through the important B Tech Course highlights given below:</p>
                                    <div class="inner-content table table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Particulars</th>
                                                    <th>BTech Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>BTech full form&nbsp;</td>
                                                    <td>Bachelor of Technology</td>
                                                </tr>
                                                <tr>
                                                    <td>Commonly Known As</td>
                                                    <td>B Tech Course</td>
                                                </tr>
                                                <tr>
                                                    <td>Level</td>
                                                    <td>Undergraduate</td>
                                                </tr>
                                                <tr>
                                                    <td>B.Tech Course Duration</td>
                                                    <td>4 years</td>
                                                </tr>
                                                <tr>
                                                    <td>Semester/Yearly</td>
                                                    <td>Semester</td>
                                                </tr>
                                                <tr>
                                                    <td>B Tech entry procedure</td>
                                                    <td>Entrance test followed by counselling by the authorities.</td>
                                                </tr>
                                                <tr>
                                                    <td>B Tech Entrance Exam</td>
                                                    <td>JEE Main, JEE Advanced, GATE</td>
                                                </tr>
                                                <tr>
                                                    <td>B Tech Eligibility Criteria</td>
                                                    <td>Should have completed class 10+2 in PCM or PCB from a recognized
                                                        institute/board</td>
                                                </tr>
                                                <tr>
                                                    <td>B Tech Syllabus</td>
                                                    <td>The syllabus depends on B Tech specializations</td>
                                                </tr>
                                                <tr>
                                                    <td>B.Tech Course Fees</td>
                                                    <td>INR 5,00,000 to Rs. 12,00,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Top B Tech Colleges</td>
                                                    <td>BITSAT, VITEEE, IITs, NITs, IIITs</td>
                                                </tr>
                                                <tr>
                                                    <td>Types of Careers</td>
                                                    <td>Civil Engineer, Mechanical Engineer, Computer Engineer,
                                                        Electrical Engineer, Marine Engineer</td>
                                                </tr>
                                                <tr>
                                                    <td>B.Tech Salary</td>
                                                    <td>BTech salary range from INR 5,00,000 to INR 7,00,000 (Average)
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Top Recruiters</td>
                                                    <td>Google, Apple, Hindustan Unilever Ltd, ISRO, Microsoft, Amazon,
                                                        Flipkart, Intel, TATA Consultancy</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <div class="module-wrapper mt-5">
                                    <h6 class="title">Why Choose B.Tech Degree?</h6>
                                    <p class="disc">Engineering is one of the dream professions of many Indian students
                                        and families. In this regard, several students apply for B Tech courses in
                                        various engineering colleges and work hard to achieve them. One of the major
                                        reasons why BTech is one of the top bachelor's degrees is that it offers
                                        excellent career opportunities and tremendous. </p>
                                    <p class="disc">If you have completed Class 12th and are wondering why you are
                                        studying a BTech, then go through the key benefits of studying this course given
                                        below. </p>
                                    <div class="inner-content">
                                        <div class="single-wrapper">
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>B Tech course gives a wide number of options for engineering
                                                    specializations, which will provide students with a broader scope by
                                                    providing a wider range of options as well as a greater variety of
                                                    professions.</p>
                                            </div>
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>Candidates pursuing a B Tech degree are more theoretical and
                                                    practical since the whole course teaches and forms students with the
                                                    practical knowledge and theories essential for their particular
                                                    sectors.</p>
                                            </div>
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>The demand for BTech engineers has always been the boom, as they form
                                                    the core of the companies while maintaining the upcoming trends in
                                                    their engineering policies. Engineers' worth has increased
                                                    dramatically as a result of the rising population in India and
                                                    technological advancement. As a result, there are various job
                                                    opportunities for BTech graduates in various sectors.</p>
                                            </div>
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>The average B Tech salary of an experienced engineer can be as high
                                                    as INR 40,00,000 Per Annum to INR 50,00,000 Per Annum which can rise
                                                    to more depending upon the recruiter and candidate's skills.</p>
                                            </div>
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>Securing a higher degree will not only enhance your study skills but
                                                    also highlight your position in the professional field. If the
                                                    candidates pursuing the B Tech course have leadership skills, they
                                                    can</p>
                                            </div>
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>proceed with their start-ups. With the emergence of new technologies
                                                    and styles, new engineering graduates are starting up their
                                                    businesses.
                                                    When speaking about BTech jobs, there is a lot of abundance in the
                                                    facilities as the BTech is very diverse. One can opt for jobs in
                                                    private and public sector undertakings too, depending on the
                                                    criteria met by the company.</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="module-wrapper mt-5">
                                    <h6 class="title">List of Popular B Tech Specializations in India</h6>
                                    <p class="disc">There are many specializations in BTech out of which the popular
                                        ones have been mentioned below. The top specializations include Electronics
                                        Engineering, Computer Science Engineering, Data Science and Engineering, Marine
                                        Engineering, Civil Engineering, Artificial Intelligence, Aeronautical
                                        Engineering, etc. Check the B Tech course list given below.</p>
                                    <h6 class="title">List of B Tech Courses</h6>
                                    <div class="inner-content table table-responsive pt-2">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">B Tech Course List</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="#" rel="noopener noreferrer" target="_blank">B Tech in
                                                            Genetic
                                                            Engineering</a></td>
                                                    <td><a href="#" rel="noopener noreferrer" target="_blank">B Tech in
                                                            Agriculture Engineering</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" rel="noopener noreferrer" target="_blank">BTech in
                                                            Production Engineering</a></td>
                                                    <td><a href="#" rel="noopener noreferrer" target="_blank">B Tech in
                                                            Petroleum Engineering</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" rel="noopener noreferrer" target="_blank">BTech in
                                                            Computer
                                                            Science</a></td>
                                                    <td><a href="#" rel="noopener noreferrer" target="_blank">B Tech in
                                                            Plastic
                                                            Engineering</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" rel="noopener noreferrer" target="_blank">BTech in
                                                            Data
                                                            Science and Engineering</a></td>
                                                    <td><a href="#" rel="noopener noreferrer" target="_blank">B.Tech in
                                                            Aeronautical Engineering</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" rel="noopener noreferrer" target="_blank">BTech in
                                                            Mechanical Engineering</a></td>
                                                    <td><a href="#" rel="noopener noreferrer" target="_blank">B Tech in
                                                            Artificial Intelligence</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" rel="noopener noreferrer"
                                                            target="_blank">Biotechnology
                                                            Engineering</a></td>
                                                    <td><a href="#" rel="noopener noreferrer" target="_blank">B Tech in
                                                            Automobile Engineering</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" rel="noopener noreferrer" target="_blank">B Tech in
                                                            Civil
                                                            Engineering</a></td>
                                                    <td><a href="#" rel="noopener noreferrer" target="_blank">B Tech in
                                                            Marine
                                                            Engineering</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" rel="noopener noreferrer" target="_blank">B Tech in
                                                            Food
                                                            Technology</a></td>
                                                    <td><a href="#" rel="noopener noreferrer" target="_blank">B Tech in
                                                            Electronics and Communication Engineering</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" rel="noopener noreferrer" target="_blank">B Tech in
                                                            Information Technology</a></td>
                                                    <td><a href="#" rel="noopener noreferrer" target="_blank">B Tech in
                                                            Chemical
                                                            Engineering</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" rel="noopener noreferrer" target="_blank">B Tech in
                                                            Telecommunication Engineering</a></td>
                                                    <td><a href="#" rel="noopener noreferrer" target="_blank">B Tech in
                                                            Electrical Engineering</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" rel="noopener noreferrer" target="_blank">B Tech in
                                                            Software
                                                            Engineering</a></td>
                                                    <td>-</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <div class="module-wrapper mt-5">
                                    <h6 class="title">BTech Eligibility Criteria</h6>
                                    <div class="inner-content">
                                        <div class="single-wrapper">
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>Candidates who wish to pursue BTech are advised to check the BTech
                                                    Eligibility Criteria before filling out the BTech Application Form
                                                    so that they do not miss out on anything and regret it at the last
                                                    minute. The Eligibility Criteria for BTech may vary from institute
                                                    to institute. We have sketched the Eligibility Criteria for BTech in
                                                    the pointers below.</p>
                                            </div>
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>Candidate should have completed 10+2 or equivalent examinations from
                                                    a recognized educational board like CBSE, ICSE, etc.</p>
                                            </div>
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>They must belong to the Science Stream with Physics, Chemistry, and
                                                    Mathematics (PCM) as compulsory subjects.</p>
                                            </div>
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>Candidates are mandated to score at least 60% marks in aggregate
                                                    where a relaxation of 5% to 10% is given to the candidates from the
                                                    reserved categories. </p>
                                            </div>
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>Those who are interested in the regular mode of entry to the BTech
                                                    are through the entrances after Class 12th. The other mode is called
                                                    as Lateral-Entry mode, wherein candidates can enroll in BTech in the
                                                    second year.</p>
                                            </div>
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>Those who possess a three-year diploma course in engineering can
                                                    enroll in BTech under the Lateral-Entry Scheme.</p>
                                            </div>
                                        </div>

                                    </div>
                                    <h6 class="title">BTech Required Skill-sets</h6>
                                    <div class="inner-content">
                                        <div class="single-wrapper">
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>To be a successful engineer, one must be innovative and have
                                                    exceptional communication skills. There are various skill sets
                                                    required for a BTech engineer to flourish in their field of matter.
                                                    The table below highlights some of the skills required for the B
                                                    Tech course.</p>
                                            </div>
                                            <div class="table table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="2">B Tech Course List</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="#" rel="noopener noreferrer" target="_blank">B
                                                                    Tech in
                                                                    Genetic
                                                                    Engineering</a></td>
                                                            <td><a href="#" rel="noopener noreferrer" target="_blank">B
                                                                    Tech in
                                                                    Agriculture Engineering</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#" rel="noopener noreferrer"
                                                                    target="_blank">BTech in
                                                                    Production Engineering</a></td>
                                                            <td><a href="#" rel="noopener noreferrer" target="_blank">B
                                                                    Tech in
                                                                    Petroleum Engineering</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#" rel="noopener noreferrer"
                                                                    target="_blank">BTech in
                                                                    Computer
                                                                    Science</a></td>
                                                            <td><a href="#" rel="noopener noreferrer" target="_blank">B
                                                                    Tech in
                                                                    Plastic
                                                                    Engineering</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#" rel="noopener noreferrer"
                                                                    target="_blank">BTech in
                                                                    Data
                                                                    Science and Engineering</a></td>
                                                            <td><a href="#" rel="noopener noreferrer"
                                                                    target="_blank">B.Tech in
                                                                    Aeronautical Engineering</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#" rel="noopener noreferrer"
                                                                    target="_blank">BTech in
                                                                    Mechanical Engineering</a></td>
                                                            <td><a href="#" rel="noopener noreferrer" target="_blank">B
                                                                    Tech in
                                                                    Artificial Intelligence</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#" rel="noopener noreferrer"
                                                                    target="_blank">Biotechnology
                                                                    Engineering</a></td>
                                                            <td><a href="#" rel="noopener noreferrer" target="_blank">B
                                                                    Tech in
                                                                    Automobile Engineering</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#" rel="noopener noreferrer" target="_blank">B
                                                                    Tech in
                                                                    Civil
                                                                    Engineering</a></td>
                                                            <td><a href="#" rel="noopener noreferrer" target="_blank">B
                                                                    Tech in
                                                                    Marine
                                                                    Engineering</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#" rel="noopener noreferrer" target="_blank">B
                                                                    Tech in
                                                                    Food
                                                                    Technology</a></td>
                                                            <td><a href="#" rel="noopener noreferrer" target="_blank">B
                                                                    Tech in
                                                                    Electronics and Communication Engineering</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#" rel="noopener noreferrer" target="_blank">B
                                                                    Tech in
                                                                    Information Technology</a></td>
                                                            <td><a href="#" rel="noopener noreferrer" target="_blank">B
                                                                    Tech in
                                                                    Chemical
                                                                    Engineering</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#" rel="noopener noreferrer" target="_blank">B
                                                                    Tech in
                                                                    Telecommunication Engineering</a></td>
                                                            <td><a href="#" rel="noopener noreferrer" target="_blank">B
                                                                    Tech in
                                                                    Electrical Engineering</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#" rel="noopener noreferrer" target="_blank">B
                                                                    Tech in
                                                                    Software
                                                                    Engineering</a></td>
                                                            <td>-</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="module-wrapper mt-5">
                                    <h6 class="title">BTech Placements</h6>
                                    <p class="disc">Placemats after the BTech are better compared to other courses.
                                        B.Tech Placements in institutes like IITs and NITs have a very high rate. Some
                                        of the top organizations taking part in the placement drive are Google,
                                        Microsoft, Adobe, Cisco, Capgemini, Amazon, Flipkart, Accenture, etc. Some of
                                        the PSUs also take part in the recruitment process such as BHEL, SAIL, GAIL,
                                        etc. We will discuss the BTech Placements for private as well as government
                                        institutions here.</p>

                                </div>


                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="course-content-wrapper">
                                <h5 class="title">B Tech Syllabus and Subjects Overview</h5>
                                <p class="disc pt-2">
                                    The BTech syllabus and subjects contain core subjects, elective subjects, and lab
                                    subjects. The BTech elective subjects may vary from one university to the other. B
                                    Tech syllabus is designed for candidates who aim to invest themselves in the
                                    corporate field and core tech and information industry. The B Tech subjects are
                                    simple and easy to understand. All the years are divided into two consecutive
                                    semesters. Hence, candidates have to study the B Tech syllabus for four years which
                                    is divided into eight semesters. Subjects such as Physics, Mathematics, Chemistry,
                                    Mechanics, English, Electrical Technology, Engineering Drawing and Graphics,
                                    Programming, Data Structures, etc, are common subjects in the BTech curriculum.
                                </p>


                                <div class="module-wrapper">
                                    <h6 class="title">Quick Facts about BTech Syllabus and Subjects - </h6>

                                    <div class="inner-content">
                                        <div class="single-wrapper">
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>B Tech course is a four-year course that deals with the field of
                                                    engineering as well as technology.</p>
                                            </div>
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>If you're interested in pursuing a degree in technology, then BTech
                                                    might be the right choice for you. BTech subjects cover
                                                    specializations such as Information technology, digital electronics,
                                                    Structural analysis, and many more. To pursue BTech, you need to
                                                    complete your class 12th and appear in entrance exams such as JEE
                                                    Mains or JEE Advanced.</p>
                                            </div>
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>BTech syllabus and subjects offer almost 100 different
                                                    specializations such as civil, mechanical, electrical, computer
                                                    science, nuclear, biomedical, biotechnology, and so on. Each
                                                    specialization focuses on different areas. You can choose the BTech
                                                    subjects that interest you the most. </p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="module-wrapper mt-5">
                                    <h6 class="title">BTech Syllabus and Subjects 2024 Highlights</h6>
                                    <p class="disc">Candidates can check the BTech subjects highlights from the table
                                        below.</p>
                                    <div class="inner-content table table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Particulars&nbsp;</th>
                                                    <th>Details&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Duration&nbsp;</td>
                                                    <td>4 years</td>
                                                </tr>
                                                <tr>
                                                    <td>Core subjects&nbsp;</td>
                                                    <td>
                                                        <ul>
                                                            <li><strong>Computer Science</strong> - Circuit Theory &amp;
                                                                networks, Data Structure and Algorithms, Computer
                                                                Organization, etc.</li>
                                                            <li><strong>Biotechnology&nbsp;</strong>- Process
                                                                Calculations and Thermodynamics, Microbiology and
                                                                Bioprocess Technology, Biochemistry and Enzyme
                                                                Technology</li>
                                                            <li><strong>Civil&nbsp;</strong>- Numerical techniques,
                                                                Probability, Statistics, Linear Programming,
                                                                Geotechnical Engineering</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Elective subjects&nbsp;</td>
                                                    <td>
                                                        <ul>
                                                            <li>Robotics</li>
                                                            <li>Artificial Intelligence</li>
                                                            <li>Machine Learning&nbsp;</li>
                                                            <li>Autonomous Vehicles</li>
                                                            <li>Material Handling</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Lab subjects&nbsp;</td>
                                                    <td>
                                                        <ul>
                                                            <li>Hydraulics Lab</li>
                                                            <li>Thermodynamics Lab</li>
                                                            <li>Engineering Mechanics Lab</li>
                                                            <li>Programming Lab</li>
                                                            <li>Basic Electronics Lab</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Books&nbsp;</td>
                                                    <td>
                                                        <ul>
                                                            <li>Introduction to Algorithms by Thomas H. Cormen</li>
                                                            <li>Superintelligence: Path, Dangers, Strategies by Nick
                                                                Bostrom</li>
                                                            <li>The Soul of A New Machine by Tracy Kidder</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Common Subjects</td>
                                                    <td>
                                                        <ul>
                                                            <li>Joy of Engineering</li>
                                                            <li>Communication and Professional Skills</li>
                                                            <li>Workshop Practice</li>
                                                            <li>Computing Fundamentals &amp; C</li>
                                                            <li>World Civilizations</li>
                                                            <li>Data Structures</li>
                                                            <li>Writing Skills</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Admission Process</td>
                                                    <td>
                                                        <ul>
                                                            <li>Merit-based</li>
                                                            <li>Entrance-based</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Top Colleges&nbsp;</td>
                                                    <td>
                                                        <ul>
                                                            <li>IIT Bombay</li>
                                                            <li>VIT Vellore</li>
                                                            <li>IIST Thiruvananthapuram</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <div class="module-wrapper mt-5">
                                    <h6 class="title">Semester Wise B Tech Syllabus (Yearly)</h6>
                                    <p class="disc">The BTech 1st Year subjects are the same for all the specializations
                                        and start varying from the second year of the course. Hence candidates can check
                                        the Semester wise B Tech syllabus from the following -</p>
                                    <h6 class="title">BTech 1st Year Syllabus </h6>
                                    <p>The BTech 1st Year subjects have been divided into semester 1 and semester 2 that
                                        has been listed in the headings below - </p>
                                    <h6 class="title">Bachelor of Technology Syllabus - Semester 1</h6>
                                    <p class="disc">Candidates can check the semester wise BTech subjects from the
                                        pointers below.</p>
                                    <div class="inner-content">
                                        <div class="single-wrapper">
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>Joy of Engineering</p>
                                            </div>
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>Communication and Professional Skills</p>
                                            </div>
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>Workshop Practice</p>
                                            </div>
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>Computing Fundamentals & C</p>
                                            </div>
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>Chemistry</p>
                                            </div>
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>Mathematics 1</p>
                                            </div>
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>Physical 1</p>
                                            </div>
                                        </div>

                                    </div>
                                    <h6 class="title pt-3">Bachelor of Technology Syllabus- Semester 2</h6>
                                    <p class="disc">Candidates can check the semester wise BTech subjects from the
                                        pointers below.</p>
                                    <div class="inner-content">
                                        <div class="single-wrapper">
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>World Civilizations</p>
                                            </div>
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>Data Structures</p>
                                            </div>
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>Writing Skills</p>
                                            </div>
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>Environmental Studies</p>
                                            </div>
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>Mathematics 2</p>
                                            </div>
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>Physical 2</p>
                                            </div>
                                            <div class="single-codule">
                                                <i class="fa-regular fa-check-circle"></i>
                                                <p>Basic Electrical and Electronic Practice</p>
                                            </div>
                                        </div>

                                    </div>

                                </div>





                            </div>
                        </div>
                        <div class="tab-pane fade " id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <!-- single instructor area staret -->
                            <div class="course-content-wrapper">
                                <h5 class="title">B Tech Jobs Highlights</h5>
                                <p class="disc pt-2">
                                    THere are some major highlights of Job Options After B Tech-
                                </p>

                                <div class="module-wrapper mt-5">
                                    <h6 class="title">BTech Syllabus and Subjects 2024 Highlights</h6>
                                    <p class="disc">Candidates can check the BTech subjects highlights from the table
                                        below.</p>
                                    <div class="inner-content table table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th><strong>BTech Jobs Particulars</strong></th>
                                                    <th><strong>Details</strong></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Course Name</td>
                                                    <td>B Tech</td>
                                                </tr>
                                                <tr>
                                                    <td>Level</td>
                                                    <td>Graduate</td>
                                                </tr>
                                                <tr>
                                                    <td>Specializations</td>
                                                    <td>
                                                        <ul>
                                                            <li>Civil</li>
                                                            <li>Mechanical</li>
                                                            <li>Electrical</li>
                                                            <li>Computer Science</li>
                                                            <li>IT</li>
                                                            <li>Electronics and Communications</li>
                                                            <li>Aeronautical Engineering etc..</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Top Industries that Hire B Tech Graduates</td>
                                                    <td>
                                                        <ul>
                                                            <li>Software &amp; IT Sector</li>
                                                            <li>Mining Industries</li>
                                                            <li>Banks</li>
                                                            <li>Civil Services</li>
                                                            <li>Construction and Building</li>
                                                            <li>Mechanics</li>
                                                            <li>Robotics</li>
                                                            <li>Medical</li>
                                                            <li>Civil Aviation</li>
                                                            <li>Defence Sector</li>
                                                            <li>Research &amp; Development</li>
                                                            <li>Education Sector</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Top Jobs after BTech</td>
                                                    <td>
                                                        <ul>
                                                            <li>Design Engineer</li>
                                                            <li>Data Analyst</li>
                                                            <li>Software Engineer</li>
                                                            <li>Database Management Administrator</li>
                                                            <li>Civil Servant</li>
                                                            <li>Mining Engineer</li>
                                                            <li>Civil Engineer</li>
                                                            <li>Electrical Engineer</li>
                                                            <li>Bank PO etc..</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Average Salary of a Bachelor of Technology Graduate</td>
                                                    <td>INR 2,50,000 to INR 5,00,000 Per Annum</td>
                                                </tr>
                                                <tr>
                                                    <td>Companies that Hire Bachelor of Technology Graduates</td>
                                                    <td>
                                                        <p><strong>Private Companies-</strong></p>
                                                        <ul>
                                                            <li>Deloitte</li>
                                                            <li>L&amp;T</li>
                                                            <li>Tata</li>
                                                            <li>Ernst and Young</li>
                                                        </ul>
                                                        <p><strong>Govt Companies-</strong></p>
                                                        <ul>
                                                            <li>BHEL</li>
                                                            <li>HAL</li>
                                                            <li>GAIL</li>
                                                            <li>ONGC</li>
                                                            <li>NTPC</li>
                                                            <li>OPTCL</li>
                                                            <li>NALCO</li>
                                                            <li>Indian Railways</li>
                                                            <li>Airport Authority of India etc..</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Recruitment Process and Exams</td>
                                                    <td>Through Personal Interviews and through Competitive Exams like
                                                        GATE, SSC JE, IES etc.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                            <!-- single instructor area end -->
                        </div>

                        <div class="tab-pane fade " id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                            <div class="course-content-wrapper">
                                <h5 class="title">B Tech Salary</h5>
                                <p class="disc pt-2">
                                    Bachelor of Technology, or B Tech, is a four-year undergraduate programme created to
                                    impart technical knowledge and applied practical expertise. Among all courses, the
                                    BTech course offers the best placement opportunities. In India's top IITs, the
                                    average B Tech salary ranges between INR 25,00,000 and INR 80,00,000. Both the
                                    Indian and global markets are in need of B Tech graduates. The highest wages for
                                    BTech graduates are offered via international employment.
                                </p>
                                <p class="disc">BTech employment possibilities are numerous and provide new graduates
                                    with a competitive beginning salary. The average BTech salary per month falls
                                    between INR 17,000 and INR 20,000. Software developer, data analyst, research
                                    associate, car engineer, etc. are among the B Tech employment that is open to new
                                    graduates. </p>

                                <div class="module-wrapper mt-5">
                                    <h6 class="title">What is the Average Salary of a B Tech?</h6>
                                    <p class="disc">In India, the average BTech salary varies from INR 2,50,000 to INR
                                        6,00,000 annually. By pursuing more education or gaining professional
                                        experience, graduates can raise their income even further. The breakdown of
                                        Salary in B Tech in India is presented in the table below.</p>
                                    <div class="inner-content table table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th><strong>Salary in B Tech&nbsp;</strong></th>
                                                    <th><strong>Salary in B Tech&nbsp;</strong></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Average B Tech Salary</td>
                                                    <td>INR 2,50,000 Per Annum</td>
                                                </tr>
                                                <tr>
                                                    <td>Highest B Tech Salary</td>
                                                    <td>INR 5,00,000 Per Annum</td>
                                                </tr>
                                                <tr>
                                                    <td>Lowest B Tech Salary</td>
                                                    <td>INR 1,50,000 Per Annum</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div
                    class="col-lg-4 order-cl-2 order-lg-2 order-md-1 order-sm-1 order-1  rts-sticky-column-item pt-5 mt-5">
                    <!-- right- sticky bar area -->
                    <div class="right-course-details">
                        <!-- single course-sidebar -->
                        <div class="course-side-bar">
                            <div class="thumbnail">
                                <img src="assets/images/course1.jpg" alt="">
                                <div class="vedio-icone">
                                    <a class="video-play-button play-video popup-video"
                                        href="https://www.youtube.com/watch?v=ezbJwaLmOeM">
                                        <span></span>
                                    </a>
                                    <div class="video-overlay">
                                        <a class="video-overlay-close">×</a>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="rts-btn btn-primary">Apply Now</a>
                            <a href="#" class="rts-btn btn-border">Check Eligibility</a>

                            <div class="what-includes">
                                <h5 class="title">B.Tech Course Highlights: </h5>
                                <div class="single-include">
                                    <div class="left">
                                        <i class="fa-light fa-chart-bar"></i>
                                        <span>Admission Process</span>
                                    </div>
                                    <div class="right">
                                        <span>{{$data->Admission_Process}}</span>
                                    </div>
                                </div>
                                <div class="single-include">
                                    <div class="left">
                                        <i class="fa-light fa-timer"></i>
                                        <span>Duration</span>
                                    </div>
                                    <div class="right">
                                        <span> {{$data->Duration}}</span>
                                    </div>
                                </div>
                                <div class="single-include">
                                    <div class="left">
                                        <i class="fa-regular fa-floppy-disk"></i>
                                        <span>Exam Type</span>
                                    </div>
                                    <div class="right">
                                        <span>{{$data->Exam_Type}}</span>
                                    </div>
                                </div>
                                <div class="single-include">
                                    <div class="left">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                        <span>Course Fee</span>
                                    </div>
                                    <div class="right">
                                        <span>{{$data->Course_Fee}}</span>
                                    </div>
                                </div>
                                <div class="single-include">
                                    <div class="left">
                                        <i class="fa-sharp fa-light fa-file-certificate"></i>
                                        <span>Jobs</span>
                                    </div>
                                    <div class="right">
                                        <span>{{$data->Jobs}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single course-sidebar end -->
                    </div>
                    <!-- right- sticky bar area end -->
                    <!-- right- sticky bar area -->
                    <div class="right-course-details mt--30">
                        <!-- single course-sidebar -->
                        <div class="course-side-bar">
                            <!-- course single sidebar end-->
                            <!-- course single sidebar -->
                            <div class="course-single-information">
                                <h5 class="title">BTech Integrated Courses</h5>
                                <div class="body">
                                    <!-- ingle check -->
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        B.Tech + M.Tech Course
                                    </div>
                                    <!-- ingle check end -->
                                    <!-- ingle check -->
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        B Tech + MBA Course
                                    </div>
                                    <!-- ingle check end -->
                                </div>
                            </div>
                            <!-- course single sidebar end-->
                            <!-- course single sidebar -->
                            <div class="course-single-information">
                                <h5 class="title">B Tech Jobs Highlights</h5>
                                <div class="body">
                                    <!-- ingle check -->
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Design Engineer
                                    </div>
                                    <!-- ingle check end -->
                                    <!-- ingle check -->
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Data Analyst
                                    </div>
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Software Engineer
                                    </div>
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Database Management Administrator
                                    </div>
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Civil Servant
                                    </div>
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Mining Engineer
                                    </div>
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Civil Engineer
                                    </div>
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Electrical Engineer
                                    </div>
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Bank PO etc..
                                    </div>
                                    <!-- ingle check end -->
                                </div>
                            </div>
                            <!-- course single sidebar end-->
                            <!-- course single sidebar -->
                            <div class="course-single-information">
                                <h5 class="title">Tags</h5>
                                <div class="body">
                                    <div class="tags-wrapper">
                                        <!-- single tags -->
                                        <span>Course</span>
                                        <span>Design</span>
                                        <span>Web development</span>
                                        <span>Business</span>
                                        <span>UI/UX</span>
                                        <span>Financial</span>
                                        <!-- single tags end -->
                                    </div>
                                </div>
                            </div>
                            <!-- course single sidebar end-->
                            <!-- course single sidebar -->
                            <div class="course-single-information">
                                <h5 class="title">Share</h5>
                                <div class="body">
                                    <!-- social-share-course-sidebar -->
                                    <div class="social-share-course-side-bar">
                                        <ul>
                                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- social-share-course-sidebar end -->
                                </div>
                            </div>
                            <!-- course single sidebar end-->

                            <!-- course single sidebar -->
                            <div class="course-single-information last">
                                <h5 class="title">Audience</h5>
                                <div class="body">
                                    <!-- ingle check -->
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Suitable for beginners and intermediates
                                    </div>
                                    <!-- ingle check end -->
                                </div>
                            </div>
                            <!-- course single sidebar end-->
                        </div>
                        <!-- single course-sidebar end -->
                    </div>
                    <!-- right- sticky bar area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- course details area end -->


    <!-- course area start -->
    <div class="course-area-two" style="padding-bottom:180px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-between-area align-items-end">
                        <div class="title-area-left-style">
                            <h2 class="title mb--5">Explore Featured Colleges</h2>
                            <p class="disc">
                                You'll find something to spark your curiosity and enhance
                            </p>
                        </div>
                        <a href="#" class="rts-btn with-arrow p-0">View All Course <i
                                class="fa-light fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <div class="swiper mySwiper-category-1 swiper-float-right-course swiper-data" data-swiper='{
                    "spaceBetween":30,
                    "slidesPerView":4,
                    "loop": true,
                    "autoplay":{
                        "delay":"2000"
                    },
                    "navigation":{
                        "nextEl":".swiper-button-next",
                        "prevEl":".swiper-button-prev"
                    },
                    "pagination":{
                        "el": ".swiper-pagination",
                        "clickable": "true"
                    },
                    "breakpoints":{
                    "320":{
                        "slidesPerView":1,
                        "spaceBetween":30},
                    "420":{
                        "slidesPerView":1,
                        "spaceBetween":30},
                    "500":{
                        "slidesPerView":2,
                        "spaceBetween":30},
                    "740":{
                        "slidesPerView":2,
                        "spaceBetween":30},
                    "940":{
                        "slidesPerView":3,
                        "spaceBetween":30},
                    "1240":{
                        "slidesPerView":4,
                        "spaceBetween":30}
                    }
                }'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- single course style two -->
                            <div class="single-course-style-three">
                                <a href="#" class="thumbnail">
                                    <img src="assets/images/fc1.jpg" alt="IMS Unison University">
                                </a>
                                <div class="body-area">
                                    <a href="#">
                                        <h5 class="title">IMS Unison University </h5>
                                    </a>
                                    <div class="leasson-students">
                                        <div class="lesson">
                                            <i class="fa-light fa-location-dot"></i>
                                            <span>Dehradun, Uttarakhand </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single course style two end -->
                        </div>
                        <div class="swiper-slide">
                            <!-- single course style two -->
                            <div class="single-course-style-three">
                                <a href="#" class="thumbnail">
                                    <img src="assets/images/fc2.jpg" alt="Utkal University ">
                                </a>
                                <div class="body-area">
                                    <a href="#">
                                        <h5 class="title">Utkal University </h5>
                                    </a>
                                    <div class="leasson-students">
                                        <div class="lesson">
                                            <i class="fa-light fa-location-dot"></i>
                                            <span>Bhubaneswar, Odisha </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single course style two end -->
                        </div>
                        <div class="swiper-slide">
                            <!-- single course style two -->
                            <div class="single-course-style-three">
                                <a href="#" class="thumbnail">
                                    <img src="assets/images/fc3.jpg" alt="IBS Hyderabad">
                                </a>
                                <div class="body-area">
                                    <a href="#">
                                        <h5 class="title">IBS Hyderabad </h5>
                                    </a>
                                    <div class="leasson-students">
                                        <div class="lesson">
                                            <i class="fa-light fa-location-dot"></i>
                                            <span>Hyderabad, Telangana </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single course style two end -->
                        </div>
                        <div class="swiper-slide">
                            <!-- single course style two -->
                            <div class="single-course-style-three">
                                <a href="#" class="thumbnail">
                                    <img src="assets/images/fc4.jpg" alt="Parul University">
                                </a>
                                <div class="body-area">
                                    <a href="#">
                                        <h5 class="title">Parul University</h5>
                                    </a>
                                    <div class="leasson-students">
                                        <div class="lesson">
                                            <i class="fa-light fa-location-dot"></i>
                                            <span>Vadodara, Gujarat </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single course style two end -->
                        </div>


                    </div>
                    <div class="swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
                    <div class="swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- course area end -->

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
    @endsection
