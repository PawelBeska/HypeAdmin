<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title></title>

    <!-- Styles -->

    <link href="{{URL::asset('assets/home/css/uikit.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/home/css/simplebar.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/home/css/theme.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css" rel="stylesheet">


</head>
<body>

@yield('top-bar')
@yield('header')
<div class="uk-container uk-container-center uk-margin-large-top uk-margin-large-bottom">

    <div class="uk-grid">
        <div id="tm-left-section" class="uk-width-medium-3-10 uk-width-large-2-10 uk-hidden-small">
            <div class="uk-panel">
                @include('home.global.body.navigation-panel')
                @include('home.global.body.latestcomments')
                @include('home.global.body.quicklogin')




































































            </div>
        </div>
        <div id="tm-right-section" class="uk-width-large-8-10 uk-width-medium-7-10"  data-uk-scrollspy="{cls:'uk-animation-fade', target:'img'}">
            <div class="movies uk-grid-width-small-1-3 uk-grid-width-medium-1-4 uk-grid-width-large-1-5" data-uk-grid="{gutter: 20}">

            </div>
            <div class="uk-margin-large-top uk-margin-bottom">
                <ul class="uk-pagination">
                    <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
                    <li class="uk-active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><span>...</span></li>
                    <li><a href="#">20</a></li>
                    <li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>

    </div>


</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.js"></script>
<script src="{{URL::asset('assets/home/js/jquery.js')}}"></script>

<script src="{{URL::asset('assets/home/js/uikit.min.js')}}"></script>
<script src="{{URL::asset('assets/home/js/components/grid.min.js')}}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="{{URL::asset('assets/home/js/custom.js')}}"></script>




</body>
</html>