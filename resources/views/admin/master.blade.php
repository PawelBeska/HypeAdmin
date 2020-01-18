<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>HypeAdmin | Admin Panel</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="{{URL::asset('assets/admin/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/admin/plugins/font-awesome/css/all.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/admin/plugins/toastr/toastr.min.css')}}" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="{{URL::asset('assets/admin/css/lime.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/admin/css/themes/admin2.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/admin/css/custom.css')}}" rel="stylesheet">


    <!-- HTML5 shim and Respond.js')}}" for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js')}}"" doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="{{URL::asset('assets/admin/plugins/jquery/jquery-3.1.0.min.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.fn.dataTable.ext.classes.sFilterInput = 'form-control';
        $.fn.dataTable.ext.classes.sLengthSelect = 'custom-select form-control';
    </script>

</head>
<body>
<div class='loader'>
    <div class='spinner-grow text-primary' role='status'>
        <span class='sr-only'>Ładowanie...</span>
    </div>
</div>

<div id="progressbar"></div>

@yield('sidebar')

@yield('header')

@yield('search-results')
<div class="search-results">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="search-results-header">
                    <h4>Search Results</h4>
                    <a href="#" id="closeSearch"><i class="material-icons">close</i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <ul class="search-result-list user-search">
                    <li>
                        <img src="{{URL::asset('assets/admin/images/avatars/avatar2.png')}}" alt="">
                        <p>Tom Manchester<br>(Works at <span class="search-input-value"></span>)</p>
                    </li>
                    <li>
                        <img src="{{URL::asset('assets/admin/images/avatars/avatar5.png')}}" alt="">
                        <p>Luke Williams<br>(Lives in <span class="search-input-value"></span>)</p>
                    </li>
                    <li>
                        <img src="{{URL::asset('assets/admin/images/avatars/avatar4.png')}}" alt="">
                        <p>People near:<br><span class="search-input-value"></span></p>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="search-result-list social-search">
                    <li>
                        <div class="social-search-icon facebook-icon-bg">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <div class="social-search-text">
                            <p><span class="search-input-value"></span> on Facebook</p>
                        </div>
                    </li>
                    <li>
                        <div class="social-search-icon twitter-icon-bg">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div class="social-search-text">
                            <p><span class="search-input-value"></span> on Twitter</p>
                        </div>
                    </li>
                    <li>
                        <div class="social-search-icon google-icon-bg">
                            <i class="fab fa-google-plus-g"></i>
                        </div>
                        <div class="social-search-text">
                            <p><span class="search-input-value"></span> on Google+</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="search-result-list article-search">
                    <li>
                        <p>Lorem ipsum dolor sit amet, consectetur <span class="search-input-value"></span> adipiscing elit, sunt in culpa quifdaasd quis.</p>
                        <span class="search-article-date">06 Dec, 2018</span>
                    </li>
                    <li>
                        <p>Duis non semper sapien. Morbi imperdiet velit in <span class="search-input-value"></span> bibendum lobortis. Integer arcu urna, elementum in pellentesque nec, finibus at nisi.</p>
                        <span class="search-article-date">19 Nov, 2017</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="hidden" id="loader" style="display: none;">
    <div class="lime-body" style="    margin-bottom: 32px;">
        <div class="container" style="text-align: center;">
            <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
</div>
<div class="lime-container">
@yield('container')
    <div class="lime-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="footer-text">2020 © <a href="http://hypedev.pl">HypeDev</a></span>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Javascripts -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.js"></script>
<script src="{{URL::asset('assets/admin/plugins/bootstrap/popper.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/plugins/chartjs/chart.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/plugins/apexcharts/dist/apexcharts.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/plugins/toastr/toastr.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/js/lime.min.js')}}"></script>
<script src="{{URL::asset('assets/admin/js/pages/dashboard_admin2.js')}}"></script>
<script>
    init();
</script>
</body>
</html>