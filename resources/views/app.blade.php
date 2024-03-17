<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Inertia | Startup</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN core-css ================== -->
    <link href="{{ asset('/') }}css/vendor.min.css" rel="stylesheet" />
    <link href="{{ asset('/') }}css/apple/app.min.css" rel="stylesheet" />
    <link href="{{ asset('/') }}plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
    <!-- ================== END core-css ================== -->
    @vite('resources/js/app.js')
    @inertiaHead
</head>

<body>
    <div id="loader" class="app-loader">
        <span class="spinner"></span>
    </div>

    <div class="app app-header-fixed app-sidebar-fixed">
        @include('partials.header')

        @include('partials.sidebar')

        <div id="content" class="app-content">
            @inertia
        </div>

        <a href="javascript:;" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    </div>

    <!-- ================== BEGIN core-js ================== -->
    <script src="{{ asset('/') }}js/vendor.min.js"></script>
    <script src="{{ asset('/') }}js/app.min.js"></script>
    <script src="{{ asset('/') }}js/theme/apple.min.js"></script>
    <!-- ================== END core-js ================== -->
</body>

</html>