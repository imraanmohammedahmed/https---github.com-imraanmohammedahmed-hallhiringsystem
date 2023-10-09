<x-app-layout>
    <div style="padding-bottom=30px;" class="container-fluid page-body-wrapper">
        <div class="container" align="center">
            @include('admin.sidebar')
            <div class="main-content">
                <div class="container">
                    <table>
                        <tr>
                            <td style="padding:20px;">Title</td>
                            <td style="padding:20px;">Description</td>
                            <td style="padding:20px;">Price</td>
                            <td style="padding:20px;">Image</td>
                            <td style="padding:20px;">Update</td>
                            <td style="padding:20px;">Delete</td>
                        </tr>
                        <tr align="center" style="background-color: black;">
                            @foreach($data as $halls)
                            <td>{{$halls->title}}</td>
                            <td>{{$halls->description}}</td>
                            <td>{{$halls->price}}$</td>
                            <td><img width="100px" height="100px" src="/hallimage/{{$halls->image}}"></td>
                            <td>a</td>
                            <td>{{$halls->price}}$</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@include('admin.navbar')

@include('admin.css')

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