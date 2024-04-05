@extends('layouts.app')

@section('title', 'Home')

@section('content')
  <!-- Begin Page Content -->
  
  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">College</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="exportBtn"><i
            class="fas fa-download fa-sm text-white-50" ></i> Generate Report</a>
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
                <h6 class="m-0 font-weight-bold text-primary">  <button onclick="openForm()" class="addform">+ Add College</button></h6>
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
                            <th scope="col" width="20%">Name</th>
                            <th scope="col" width="10%">Number</th>
                            <th scope="col" width="20%">Email</th>
                            <th scope="col" width="20%">City</th>
                            <th scope="col" width="20%">Which Course</th>
                            <th scope="col" width="20%">Exam</th>
                            <th scope="col" width="20%">Last Qualification</th>
                       
                            <th scope="col" width="20%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
$i=1;
                          @endphp
              
                        
                            @foreach ($data as $item)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$item->college_name}}</td>
                                <td>{{$item->place}}</td>
                                <td>{{$item->state}}</td>
                                <td>{{$item->city}}</td>
                                <td>{{$item->study_mode}}</td>
                                <td>{{$item->exam}}</td>
                                <td>{{$item->institute_type}}</td>
                                <td>{{$item->courses_id}}</td>
                                <td>{{$item->created_at}}</td>
                                <td><label class="switch">
                                  <input type="checkbox"  id="mySwitch">
                                  <span class="slider round"></span>
                                </label></td>
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
{{-- for excel data export --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>

<script>
    $(document).ready(() => {
        

  });
    
</script>


