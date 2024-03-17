<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Inertia | Login</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN core-css ================== -->
    <link href="{{ asset('/') }}css/vendor.min.css" rel="stylesheet" />
    <link href="{{ asset('/') }}css/apple/app.min.css" rel="stylesheet" />
    <link href="{{ asset('/') }}plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
    <!-- ================== END core-css ================== -->
</head>

<body class='pace-top'>
    <!-- BEGIN #loader -->
    <div id="loader" class="app-loader">
        <span class="spinner"></span>
    </div>
    <!-- END #loader -->


    <!-- BEGIN #app -->
    <div id="app" class="app">
        <!-- BEGIN login -->
        <div class="login login-v2 fw-bold">
            <!-- BEGIN login-cover -->
            <div class="login-cover">
                <div class="login-cover-img" style="background-image: url({{ asset('/') }}img/login-bg/login-bg-17.jpg)" data-id="login-cover-image"></div>
                <div class="login-cover-bg"></div>
            </div>
            <!-- END login-cover -->

            <!-- BEGIN login-container -->
            <div class="login-container">
                <!-- BEGIN login-header -->
                <div class="login-header">
                    <div class="brand">
                        <div class="d-flex align-items-center">
                            <span class="logo"><i class="ion-ios-cloud"></i></span> <b>Inertia</b> Admin
                        </div>
                        <small>Login menggunakan akun anda.</small>
                    </div>
                    <div class="icon">
                        <i class="fa fa-lock"></i>
                    </div>
                </div>
                <!-- END login-header -->

                <!-- BEGIN login-content -->
                <div class="login-content">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-20px">
                            <input type="text" class="form-control fs-13px h-45px border-0" name="username" placeholder="Username" id="emailAddress" />
                            <label for="emailAddress" class="d-flex align-items-center text-gray-600 fs-13px">Username</label>
                        </div>
                        <div class="form-floating mb-20px">
                            <input type="password" class="form-control fs-13px h-45px border-0" name="password" placeholder="Password" />
                            <label for="password" class="d-flex align-items-center text-gray-600 fs-13px">Password</label>
                        </div>
                        <div class="form-check mb-20px">
                            <input class="form-check-input border-0" type="checkbox" value="1" id="rememberMe" />
                            <label class="form-check-label fs-13px text-gray-500" for="rememberMe">
                                Remember Me
                            </label>
                        </div>
                        <div class="mb-20px">
                            <button type="submit" class="btn btn-success d-block w-100 h-45px btn-lg">Sign me in</button>
                        </div>
                        <div class="text-gray-500">
                            Not a member yet? Click <a href="javascript:;" class="text-white">here</a> to register.
                        </div>
                    </form>
                </div>
                <!-- END login-content -->
            </div>
            <!-- END login-container -->
        </div>
        <!-- END login -->

        <!-- BEGIN login-bg -->
        <div class="login-bg-list clearfix">
            <div class="login-bg-list-item active"><a href="javascript:;" class="login-bg-list-link" data-toggle="login-change-bg" data-img="{{ asset('/') }}img/login-bg/login-bg-17.jpg" style="background-image: url({{ asset('/') }}img/login-bg/login-bg-17.jpg)"></a></div>
            <div class="login-bg-list-item"><a href="javascript:;" class="login-bg-list-link" data-toggle="login-change-bg" data-img="{{ asset('/') }}img/login-bg/login-bg-16.jpg" style="background-image: url({{ asset('/') }}img/login-bg/login-bg-16.jpg)"></a></div>
            <div class="login-bg-list-item"><a href="javascript:;" class="login-bg-list-link" data-toggle="login-change-bg" data-img="{{ asset('/') }}img/login-bg/login-bg-15.jpg" style="background-image: url({{ asset('/') }}img/login-bg/login-bg-15.jpg)"></a></div>
            <div class="login-bg-list-item"><a href="javascript:;" class="login-bg-list-link" data-toggle="login-change-bg" data-img="{{ asset('/') }}img/login-bg/login-bg-14.jpg" style="background-image: url({{ asset('/') }}img/login-bg/login-bg-14.jpg)"></a></div>
            <div class="login-bg-list-item"><a href="javascript:;" class="login-bg-list-link" data-toggle="login-change-bg" data-img="{{ asset('/') }}img/login-bg/login-bg-13.jpg" style="background-image: url({{ asset('/') }}img/login-bg/login-bg-13.jpg)"></a></div>
            <div class="login-bg-list-item"><a href="javascript:;" class="login-bg-list-link" data-toggle="login-change-bg" data-img="{{ asset('/') }}img/login-bg/login-bg-12.jpg" style="background-image: url({{ asset('/') }}img/login-bg/login-bg-12.jpg)"></a></div>
        </div>
        <!-- END login-bg -->

        <!-- BEGIN theme-panel -->
        <div class="theme-panel">
            <a href="javascript:;" data-toggle="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
            <div class="theme-panel-content" data-scrollbar="true" data-height="100%">
                <h5>App Settings</h5>
                <!-- BEGIN theme-list -->
                <div class="theme-list">
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-red" data-theme="red" data-theme-file="{{ asset('/') }}css/apple/theme/red.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-pink" data-theme="pink" data-theme-file="{{ asset('/') }}css/apple/theme/pink.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-orange" data-theme="orange" data-theme-file="{{ asset('/') }}css/apple/theme/orange.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-yellow" data-theme="yellow" data-theme-file="{{ asset('/') }}css/apple/theme/yellow.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-lime" data-theme="lime" data-theme-file="{{ asset('/') }}css/apple/theme/lime.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-green" data-theme="green" data-theme-file="{{ asset('/') }}css/apple/theme/green.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-teal" data-theme="teal" data-theme-file="{{ asset('/') }}css/apple/theme/teal.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Teal">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-cyan" data-theme="cyan" data-theme-file="{{ asset('/') }}css/apple/theme/cyan.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cyan">&nbsp;</a></div>
                    <div class="theme-list-item active"><a href="javascript:;" class="theme-list-link bg-blue" data-theme="default" data-theme-file="" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-purple" data-theme="purple" data-theme-file="{{ asset('/') }}css/apple/theme/purple.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-indigo" data-theme="indigo" data-theme-file="{{ asset('/') }}css/apple/theme/indigo.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-black" data-theme="black" data-theme-file="{{ asset('/') }}css/apple/theme/black.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Black">&nbsp;</a></div>
                </div>
                <!-- END theme-list -->

                <div class="theme-panel-divider"></div>

                <!-- BEGIN theme-switch -->
                <div class="row mt-10px align-items-center">
                    <div class="col-8 control-label text-inverse fw-bold">Header Fixed</div>
                    <div class="col-4 d-flex">
                        <div class="form-check form-switch ms-auto mb-0">
                            <input type="checkbox" class="form-check-input" name="app-header-fixed" id="appHeaderFixed" value="1" checked />
                            <label class="form-check-label" for="appHeaderFixed">&nbsp;</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-10px align-items-center">
                    <div class="col-8 control-label text-inverse fw-bold">Header Inverse</div>
                    <div class="col-4 d-flex">
                        <div class="form-check form-switch ms-auto mb-0">
                            <input type="checkbox" class="form-check-input" name="app-header-inverse" id="appHeaderInverse" value="1" />
                            <label class="form-check-label" for="appHeaderInverse">&nbsp;</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-10px align-items-center">
                    <div class="col-8 control-label text-inverse fw-bold">Sidebar Fixed</div>
                    <div class="col-4 d-flex">
                        <div class="form-check form-switch ms-auto mb-0">
                            <input type="checkbox" class="form-check-input" name="app-sidebar-fixed" id="appSidebarFixed" value="1" checked />
                            <label class="form-check-label" for="appSidebarFixed">&nbsp;</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-10px align-items-center">
                    <div class="col-8 control-label text-inverse fw-bold">Sidebar Grid</div>
                    <div class="col-4 d-flex">
                        <div class="form-check form-switch ms-auto mb-0">
                            <input type="checkbox" class="form-check-input" name="app-sidebar-grid" id="appSidebarGrid" value="1" />
                            <label class="form-check-label" for="appSidebarGrid">&nbsp;</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-10px align-items-center">
                    <div class="col-md-8 control-label text-inverse fw-bold">Gradient Enabled</div>
                    <div class="col-md-4 d-flex">
                        <div class="form-check form-switch ms-auto mb-0">
                            <input type="checkbox" class="form-check-input" name="app-gradient-enabled" id="appGradientEnabled" value="1" />
                            <label class="form-check-label" for="appGradientEnabled">&nbsp;</label>
                        </div>
                    </div>
                </div>
                <!-- END theme-switch -->

                <div class="theme-panel-divider"></div>

                <h5>Admin Design (5)</h5>
                <!-- BEGIN theme-version -->
                <div class="theme-version">
                    <div class="theme-version-item">
                        <a href="../template_html/index_v2.html" class="theme-version-link">
                            <span style="background-image: url({{ asset('/') }}img/theme/default.jpg);" class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../template_transparent/index_v2.html" class="theme-version-link">
                            <span style="background-image: url({{ asset('/') }}img/theme/transparent.jpg);" class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../template_apple/index_v2.html" class="theme-version-link active">
                            <span style="background-image: url({{ asset('/') }}img/theme/apple.jpg);" class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../template_material/index_v2.html" class="theme-version-link">
                            <span style="background-image: url({{ asset('/') }}img/theme/material.jpg);" class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../template_facebook/index_v2.html" class="theme-version-link">
                            <span style="background-image: url({{ asset('/') }}img/theme/facebook.jpg);" class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../template_google/index_v2.html" class="theme-version-link">
                            <span style="background-image: url({{ asset('/') }}img/theme/google.jpg);" class="theme-version-cover"></span>
                        </a>
                    </div>
                </div>
                <!-- END theme-version -->

                <div class="theme-panel-divider"></div>

                <h5>Language Version (7)</h5>
                <!-- BEGIN theme-version -->
                <div class="theme-version">
                    <div class="theme-version-item">
                        <a href="../template_html/index.html" class="theme-version-link active">
                            <span style="background-image: url({{ asset('/') }}img/version/html.jpg);" class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../template_ajax/index.html" class="theme-version-link">
                            <span style="background-image: url({{ asset('/') }}img/version/ajax.jpg);" class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../template_angularjs/index.html" class="theme-version-link">
                            <span style="background-image: url({{ asset('/') }}img/version/angular1x.jpg);" class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../template_angularjs10/index.html" class="theme-version-link">
                            <span style="background-image: url({{ asset('/') }}img/version/angular10x.jpg);" class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="javascript:alert('Laravel Version only available in downloaded version.');" class="theme-version-link">
                            <span style="background-image: url({{ asset('/') }}img/version/laravel.jpg);" class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../template_vuejs/index.html" class="theme-version-link">
                            <span style="background-image: url({{ asset('/') }}img/version/vuejs.jpg);" class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../template_reactjs/index.html" class="theme-version-link">
                            <span style="background-image: url({{ asset('/') }}img/version/reactjs.jpg);" class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="javascript:alert('.NET Core 3.1 MVC Version only available in downloaded version.');" class="theme-version-link">
                            <span style="background-image: url({{ asset('/') }}img/version/dotnet.jpg);" class="theme-version-cover"></span>
                        </a>
                    </div>
                </div>
                <!-- END theme-version -->

                <div class="theme-panel-divider"></div>

                <h5>Frontend Design (5)</h5>
                <!-- BEGIN theme-version -->
                <div class="theme-version">
                    <div class="theme-version-item">
                        <a href="../../../frontend/template/template_one_page_parallax/index.html" class="theme-version-link">
                            <span style="background-image: url({{ asset('/') }}img/theme/one-page-parallax.jpg);" class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../../../frontend/template/template_e_commerce/index.html" class="theme-version-link">
                            <span style="background-image: url({{ asset('/') }}img/theme/e-commerce.jpg);" class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../../../frontend/template/template_blog/index.html" class="theme-version-link">
                            <span style="background-image: url({{ asset('/') }}img/theme/blog.jpg);" class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../../../frontend/template/template_forum/index.html" class="theme-version-link">
                            <span style="background-image: url({{ asset('/') }}img/theme/forum.jpg);" class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../../../frontend/template/template_corporate/index.html" class="theme-version-link">
                            <span style="background-image: url({{ asset('/') }}img/theme/corporate.jpg);" class="theme-version-cover"></span>
                        </a>
                    </div>
                </div>
                <!-- END theme-version -->

                <div class="theme-panel-divider"></div>

                <a href="https://seantheme.com/color-admin/documentation/" class="btn btn-inverse d-block w-100 rounded-pill mb-10px" target="_blank"><b>Documentation</b></a>
                <a href="javascript:;" class="btn btn-default d-block w-100 rounded-pill" data-toggle="reset-local-storage"><b>Reset Local Storage</b></a>
            </div>
        </div>
        <!-- END theme-panel -->
        <!-- BEGIN scroll-top-btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
        <!-- END scroll-top-btn -->
    </div>
    <!-- END #app -->

    <!-- ================== BEGIN core-js ================== -->
    <script src="{{ asset('/') }}js/vendor.min.js"></script>
    <script src="{{ asset('/') }}js/app.min.js"></script>
    <script src="{{ asset('/') }}js/theme/apple.min.js"></script>
    <!-- ================== END core-js ================== -->

    <!-- ================== BEGIN page-js ================== -->
    <script src="{{ asset('/') }}js/demo/login-v2.demo.js"></script>
    <!-- ================== END page-js ================== -->
</body>

</html>