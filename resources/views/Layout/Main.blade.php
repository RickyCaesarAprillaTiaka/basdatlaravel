<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
    
    @include('Layout.AssetCSS')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('Layout.Preloader')

        @include('Layout.Sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('Content')
        </div>
        <!-- /.content-wrapper -->
    </div>

    @include('Layout.Footer')
    <!-- ./wrapper -->

</body>
</html>

@include('Layout.AssetJS')