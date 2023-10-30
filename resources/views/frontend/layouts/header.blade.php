<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="FooYes - Quality delivery or takeaway food">
    <meta name="author" content="Ansonika">
    <title>FDS - Food Delivery System</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{{asset('frontend/css/home.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('frontend/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/detail-page.css')}}" rel="stylesheet">

</head>
<body>

<header class="header black_nav clearfix element_to_stick">
    <div class="container">
        <div id="logo">
            <a href="{{url('/')}}">
                <!-- <img src="img/logo_sticky.svg" width="162" height="35" alt=""> -->
                <h3 class="text-white">Food Delivery System</h3>
            </a>
        </div>
        <div class="layer"></div><!-- Opacity Mask Menu Mobile -->
        <ul id="top_menu">
            <li><a href="#sign-in-dialog" id="sign-in" class="login">Sign In</a></li>
            <li><a href="#0" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
        </ul>
        <!-- /top_menu -->
        <a href="{{url('/')}}" class="open_close">
            <i class="icon_menu"></i><span>Menu</span>
        </a>
        <nav class="main-menu">
            <div id="header_menu">
                <a href="#0" class="open_close">
                    <i class="icon_close"></i><span>Menu</span>
                </a>
                <a href="index.html"><img src="img/logo.svg" width="162" height="35" alt=""></a>
            </div>
            <ul>
                <li class="submenu">
                    <a href="{{url('/')}}" class="show-submenu">Home</a>
                </li>
                <li class="submenu">
                    <a href="{{url('/restaurant-listings')}}" class="show-submenu">Restaurant</a>
                </li>
                <li class="submenu">
                    <a href="#0" class="show-submenu">About</a>
                    <ul>
                        <li><a href="admin_section/index.html" target="_blank">Admin Section</a></li>
                        <li><a href="404.html">404 Error</a></li>
                        <li><a href="help.html">Help and Faq</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="leave-review.html">Leave a review</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="coming_soon/index.html">Coming Soon</a></li>
                        <li><a href="login.html">Sign In</a></li>
                        <li><a href="register.html">Sign Up</a></li>
                        <li><a href="icon-pack-1.html">Icon Pack 1</a></li>
                        <li><a href="icon-pack-2.html">Icon Pack 2</a></li>
                        <li><a href="shortcodes.html">Shortcodes</a></li>
                    </ul>
                </li>
                <li><a href="#0">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
<!-- /header -->

