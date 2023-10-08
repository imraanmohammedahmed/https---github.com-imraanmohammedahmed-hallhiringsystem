<x-app-layout>

    <div class="container-fluid page-body-wrapper">
        @include('admin.sidebar')

        <div class="main-content">
            <div class="container">
                <h1 class="title">Add Hall</h1>

                @if(session()->has('message'))
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>

                {{session()->get('message')}}
</div>

                @endif

                <form action="{{ url('uploadhalls') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="title">Hall Title</label>
                        <input style="color:white" type="text" name="title" id="title" class="form-control" placeholder="Enter title" required>
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input style="color:white" type="number" name="price" id="price" class="form-control" placeholder="Enter PricePerDay" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <input style="color:white" type="text" name="description" id="description" class="form-control" placeholder="Enter Description" required>
                    </div>

                    <div class="form-group">
                        <label for="file">File</label>
                        <input type="file" name="file" id="file" class="form-control-file">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

  @include('admin.navbar')
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')

    <style type="text/css">
        .title {
            color: white;
            padding-top: 25px;
            font-size: 25px;
        }
        .text-white {
        color: white;
        }

    </style>
</head>
<body>


    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

  </body>
</html>