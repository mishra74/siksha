<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>SB Admin 2 - Dashboard</title>

<!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->

<link href="admin_css/css/sb-admin-2.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
<!-- Bootstrap core JavaScript-->
<script src="admin_css/vendor/jquery/jquery.min.js"></script>
<script src="admin_css/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="admin_css/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="admin_css/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="admin_css/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="admin_css/js/demo/chart-area-demo.js"></script>
<script src="admin_css/js/demo/chart-pie-demo.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
<style>
    .search{
  top:6px;
  left:10px;
}

.form-control{

    border:none;
    padding-left:32px;
}

.form-control:focus{
    
    border:none;
    box-shadow:none;
}


.popup-form-container {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 9999;
    }
    .popup-form {
        background-color: #fefefe;
        
        margin: 10% auto;
        padding: 20px;
        width: 80%;
        max-width: 600px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        height: 550px;
       overflow:scroll;
       
    }
    .close-btn {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }
    .close-btn:hover,
    .close-btn:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }
    .form-group input[type="text"],
    
    .submit-btn {
        background-color:#cacaca
        color: white;
        padding: 12px 20px;
       
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }
    .submit-btn:hover {
        background-color: #45a049;
    }
    .addform{
        border:none;
    }
    
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 20px;
}

.slider.round:before {
  border-radius: 50%;
}



    </style>

</head>
    <body id="wrapper">
         <!-- Page Wrapper -->
    <div id="wrapper">

<!-- Sidebar -->
@include('admin.sidebar')
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
<!-- Topbar -->
@include('admin.header')
        <!-- End of Topbar -->

        <main>
            @yield('content')
            </main>
            <!-- Page Content -->
           
        </div>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @if(Session::has('success'))
            <script>

                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: `{{ Session::get('success') }}`,
                    showConfirmButton: false,
                    timer: 1500
                });

            </script>
        @endif

        @if(Session::has('error'))
            <script>
                Swal.fire({
                    position: "top-end",
                    icon: "error",
                    title: `{{ Session::get('error') }}`,
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>
        @endif
    </body>
</html>

    
   
