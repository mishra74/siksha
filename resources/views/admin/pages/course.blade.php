@extends('layouts.app')

@section('title', 'Home')

@section('content')
  <!-- Begin Page Content -->
  
  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Course</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->

    <!-- Earnings (Monthly) Card Example -->


    <!-- Earnings (Monthly) Card Example -->
   

    <!-- Pending Requests Card Example -->
   
</div>

<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">  <button onclick="openForm()" class="addform">+ Add Course</button></h6>
                <div class="dropdown no-arrow">
                    <div class="px-2">
                        <div class="mb-2 d-flex justify-content-between align-items-center">
        
                            <div class="position-relative">
                                <span class="position-absolute search"><i class="fa fa-search"></i></span>
                                <input class="form-control w-100" placeholder="Search by order#, name...">
                            </div>
                            
                            <div class="px-2">
                                
                                <span>Filters <i class="fa fa-angle-down"></i></span>
                                <i class="fa fa-ellipsis-h ms-3"></i>
                            </div>
                            
                        </div>
            
                        
                    </div>
                    

                    
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>

            </div>
            <!-- Card Body -->
            <div class="card-body">
                
                <div class="table-responsive">
                    <table class="table table-responsive table-borderless">
                        <thead>
                            <tr class="bg-light">
                                <th scope="col" width="5%">#</th>
                             
                                <th scope="col" width="20%">Course Name</th>
                                <th scope="col" width="20%">Admission Process</th>
                                <th scope="col" width="20%">Duration</th>
                                <th scope="col" width="20%">Exam Type</th>
                                <th scope="col" width="20%">Course Fee</th>
                                <th scope="col" width="20%">List of Courses</th>
                                <th scope="col" width="20%">Average Salary</th>
                                <th scope="col" width="20%">Minimum Salary</th>
                                <th scope="col" width="20%">Maximum Salary</th>
                                <th scope="col" width="20%">Syllabus</th>
                                <th scope="col" width="20%">Jobs</th>
                                <th scope="col" width="20%">Job Detail</th>
                                <th scope="col" width="20%">Date/Time</th>
                                <th scope="col" width="20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <th scope="row"><input class="form-check-input" type="checkbox"></th>
                               
                                <td>{{$item->course_name}}</td>
                                <td>{{$item->Admission_Process}}</td>
                                <td>{{$item->Duration}}</td>
                                <td>{{$item->Exam_Type}}</td>
                                <td>{{$item->Course_Fee}}</td>
                                <td>{{$item->list_of_courses}}</td>
                                <td>{{$item->avg_salary}}</td>
                                <td>{{$item->min_salary}}</td>
                                <td>{{$item->max_salary}}</td>
                                <td>{{$item->syllabus}}</td>
                                <td>{{$item->jobs}}</td>
                                <td>{{$item->job_detail}}</td>
                                <td>{{$item->created_at}}</td>
                                <td><a href="{{route('college.delete',$item->id)}}"><button>Delete</button></a>
                                   
                                  </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                  {{ $data->links() }}
                <div class="chart-area">
                    
                    <canvas id="myAreaChart">

                    
                    </canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
        
    </div>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-6 mb-4">

        <!-- Project Card Example -->
    

        <!-- Color System -->
        <div class="row">
           
    </div>

    <div class="col-lg-6 mb-4">

        <!-- Illustrations -->
       

        <!-- Approach -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
            </div>
            <div class="card-body">
                <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                    CSS bloat and poor page performance. Custom CSS classes are used to create
                    custom components and custom utility classes.</p>
                <p class="mb-0">Before working with this theme, you should become familiar with the
                    Bootstrap framework, especially the utility classes.</p>
            </div>
        </div>

    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
<div class="container my-auto">
<div class="copyright text-center my-auto">
    <span>Copyright &copy; Your Website 2021</span>
</div>
</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>


<!-- Add college form Models -->
<!-- Add college form Models -->
<div class="popup-form-container" id="popupForm">
    <div class="popup-form">
        <span class="close-btn" onclick="closeForm()">&times;</span>
        <h2>Course Information Form</h2>
        <form action="{{ route('course.store') }}" method="post">
            @csrf
         
        
            
           
               
                    <div class="form-group">
                        <label for="courses_id">Courses Name:</label>
                        <div class="input-group">
                            <input type="text" class="form-control course-input" name="course_name" required>
                         
                        </div>
                    </div>
               
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="admission_process">Admission Process:</label>
                        <input type="text" id="admission_process" name="Admission_Process" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="duration">Duration:</label>
                        <input type="text" id="duration" name="Duration" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exam_type">Exam Type:</label>
                        <input type="text" id="exam_type" name="Exam_Type" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="course_fee">Course Fee:</label>
                        <input type="text" id="course_fee" name="Course_Fee" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-8">
                        <div class="form-group" id="list_of_courseContainer">
                          <label for="list_of_course">List Of Course::</label>
                          <input type="text" id="list_of_course" name="list_of_course[]" required>
                        </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                
                        <button class="btn btn-md btn-primary" id="list_of_courseBTN" type="button">Add Row</button>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="avg_salary">Average Salary:</label>
                        <input type="text" id="avg_salary" name="avg_salary" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="min_salary">Minimum Salary:</label>
                        <input type="text" id="min_salary" name="min_salary" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="max_salary">Maximum Salary:</label>
                        <input type="text" id="max_salary" name="max_salary" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                <div class="form-group" id="coursesContainer">
                  <label for="courses_id">Syllabus:</label>
                  <input type="text" id="courses_id" name="syllabus[]" required>
                </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="courses_id">Add More</label>
                <button class="btn btn-md btn-primary" id="addCourseBtn" type="button">Add New Syllabus</button>
                    </div>
                </div>
            </div>
             
           
               
                    <div class="form-group" id="jobContainer">
                        <label for="jobs">Jobs:</label>
                        <input type="text" id="jobs" name="jobs[]" required>
                    </div>
                    <button class="btn btn-md btn-primary" id="jobBtn" type="button">Add New job</button>
           
            
            <hr/>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</div>


@endsection
<script src=
"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity=
"sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous">
    </script>
<!-- jQuery CDN -->
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity=
"sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
      </script>
<script>
    function openForm() {
        document.getElementById("popupForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("popupForm").style.display = "none";
    }
   
</script>
<script>
    $(document).ready(() => {
        let count = 1;

        // Adding course input field on click to Add New Course button
        $('#addCourseBtn').click(function () {
            let dynamicCourseHTML = `
            <div class="form-group course-group">
                <label for="syllabus">Syllabus:</label>
                <div class="input-group">
                    <input type="text" class="form-control course-input" name="syllabus[]" required>
                    <span class="input-group-btn">
                        <button class="btn btn-danger remove-course" type="button">Remove</button>
                    </span>
                </div>
            </div>`;
            $('#coursesContainer').append(dynamicCourseHTML);
            count++;
        });

        // Removing course input field on click to Remove button
        $('#coursesContainer').on('click', '.remove-course', function () {
            $(this).closest('.course-group').remove();
        });

      

// Adding course input field on click to Add New Course button
$('#jobBtn').click(function () {
    let dynamicCourseHTML = `
    <div class="form-group job-group">
        <label for="Jobs">Job:</label>
        <div class="input-group">
            <input type="text" class="form-control course-input" name="Jobs[]" required>
            <span class="input-group-btn">
                <button class="btn btn-danger remove-course" type="button">Remove</button>
            </span>
        </div>
    </div>`;
    $('#jobContainer').append(dynamicCourseHTML);
    count++;
});
// list of course
$('#list_of_courseBTN').click(function () {
    let dynamicCourseHTML = `
    <div class="form-group job-group">
        <label for="Jobs">List Of Course:</label>
        <div class="input-group">
            <input type="text" class="form-control course-input" name="list_of_course[]" required>
            <span class="input-group-btn">
                <button class="btn btn-danger remove-listofcourse" type="button">Remove</button>
            </span>
        </div>
    </div>`;
    $('#list_of_courseContainer').append(dynamicCourseHTML);
    count++;
});
// Removing course input field on click to Remove button
$('#coursesContainer').on('click', '.remove-course', function () {
    $(this).closest('.course-group').remove();
});
$('#jobContainer').on('click', '.remove-course', function () {
    $(this).closest('.job-group').remove();
});
//list of course
$('#list_of_courseContainer').on('click', '.remove-listofcourse', function () {
    $(this).closest('.job-group').remove();
});
    });
    


    
    
</script>


