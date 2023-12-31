@extends('frontend.layouts.master')
@section('title')
    Dashboard - Admin Control Panel
@endsection
@section('content')
    <main>

        <div class="hero_in detail_page background-image" data-background="url(img/hero_general.jpg)">
            <div class="wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">

                <div class="container">
                    <div class="main_info">
                        <div class="row">
                            <div class="col-xl-4 col-lg-5 col-md-6">
                                <div class="head"><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></div>
                                <h1>Pizzeria da Alfredo</h1>
                                ITALIAN - 27 Old Gloucester St, 4530 - <a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="blank">Get directions</a>
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-6 position-relative">
                                <div class="buttons clearfix">
									<span class="magnific-gallery">
										<a href="img/detail_1.jpg" class="btn_hero" title="Photo title" data-effect="mfp-zoom-in"><i class="icon_image"></i>View photos</a>
										<a href="img/detail_2.jpg" title="Photo title" data-effect="mfp-zoom-in"></a>
										<a href="img/detail_3.jpg" title="Photo title" data-effect="mfp-zoom-in"></a>
									</span>
                                    <a href="#0" class="btn_hero wishlist"><i class="icon_heart"></i>Wishlist</a>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /main_info -->
                </div>
            </div>
        </div>
        <!--/hero_in-->

        <nav class="secondary_nav sticky_horizontal">
            <div class="container">
                <ul id="secondary_nav">
                    <li><a href="#section-1">Starters</a></li>
                    <li><a href="#section-2">Main Courses</a></li>
                    <li><a href="#section-3">Desserts</a></li>
                    <li><a href="#section-4">Drinks</a></li>
                    <li><a href="#section-5"><i class="icon_chat_alt"></i>Reviews</a></li>
                </ul>
            </div>
            <span></span>
        </nav>
        <!-- /secondary_nav -->

        <div class="bg_gray">
            <div class="container margin_detail">
                <div class="row">
                    <div class="col-lg-8 list_menu">
                        <section id="section-1">
                            <h4>Starters</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <a class="menu_item modal_dialog" href="#modal-dialog">
                                        <figure><img src="{{asset('frontend/img/menu-thumb-placeholder.jpg')}}" data-src="{{asset('frontend/img/menu-thumb-10.jpg')}}" alt="thumb" class="lazy"></figure>
                                        <h3>1. Mexican Enchiladas</h3>
                                        <p>Fuisset mentitum deleniti sit ea.</p>
                                        <strong>$9.40</strong>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a class="menu_item modal_dialog" href="#modal-dialog">
                                        <figure><img src="{{asset('frontend/img/menu-thumb-placeholder.jpg')}}" data-src="{{asset('frontend/img/menu-thumb-10.jpg')}}" alt="thumb" class="lazy"></figure>
                                        <h3>2. Fajitas</h3>
                                        <p>Fuisset mentitum deleniti sit ea.</p>
                                        <strong>$9.40</strong>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a class="menu_item modal_dialog" href="#modal-dialog">
                                        <figure><img src="{{asset('frontend/img/menu-thumb-placeholder.jpg')}}" data-src="{{asset('frontend/img/menu-thumb-10.jpg')}}" alt="thumb" class="lazy"></figure>
                                        <h3>3. Royal Fajitas</h3>
                                        <p>Fuisset mentitum deleniti sit ea.</p>
                                        <strong>$9.40</strong>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a class="menu_item modal_dialog" href="#modal-dialog">
                                        <figure><img src="{{asset('frontend/img/menu-thumb-placeholder.jpg')}}" data-src="{{asset('frontend/img/menu-thumb-10.jpg')}}" alt="thumb" class="lazy"></figure>
                                        <h3>4. Chicken Enchilada Wrap</h3>
                                        <p>Fuisset mentitum deleniti sit ea.</p>
                                        <strong>$9.40</strong>
                                    </a>
                                </div>
                            </div>
                            <!-- /row -->
                        </section>
                        <!-- /section -->
                        <section id="section-2">
                            <h4>Main Courses</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <a class="menu_item modal_dialog" href="#modal-dialog">
                                        <figure><img src="{{asset('frontend/img/menu-thumb-placeholder.jpg')}}" data-src="{{asset('frontend/img/menu-thumb-10.jpg')}}" alt="thumb" class="lazy"></figure>
                                        <h3>5. Cheese Quesadilla</h3>
                                        <p>Fuisset mentitum deleniti sit ea.</p>
                                        <strong>$9.40</strong>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a class="menu_item modal_dialog" href="#modal-dialog">
                                        <figure><img src="{{asset('frontend/img/menu-thumb-placeholder.jpg')}}" data-src="{{asset('frontend/img/menu-thumb-10.jpg')}}" alt="thumb" class="lazy"></figure>
                                        <h3>6. Chorizo & Cheese</h3>
                                        <p>Fuisset mentitum deleniti sit ea.</p>
                                        <strong>$9.40</strong>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a class="menu_item modal_dialog" href="#modal-dialog">
                                        <figure><img src="{{asset('frontend/img/menu-thumb-placeholder.jpg')}}" data-src="{{asset('frontend/img/menu-thumb-10.jpg')}}" alt="thumb" class="lazy"></figure>
                                        <h3>7. Beef Taco</h3>
                                        <p>Fuisset mentitum deleniti sit ea.</p>
                                        <strong>$9.40</strong>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a class="menu_item modal_dialog" href="#modal-dialog">
                                        <figure><img src="{{asset('frontend/img/menu-thumb-placeholder.jpg')}}" data-src="{{asset('frontend/img/menu-thumb-8.jpg')}}" alt="thumb" class="lazy"></figure>
                                        <h3>8. Minced Beef Double Layer</h3>
                                        <p>Fuisset mentitum deleniti sit ea.</p>
                                        <strong>$9.40</strong>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a class="menu_item modal_dialog" href="#modal-dialog">
                                        <figure><img src="{{asset('frontend/img/menu-thumb-placeholder.jpg')}}" data-src="{{asset('frontend/img/menu-thumb-9.jpg')}}" alt="thumb" class="lazy"></figure>
                                        <h3>9. Piri Piri Chicken</h3>
                                        <p>Fuisset mentitum deleniti sit ea.</p>
                                        <strong>$9.40</strong>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a class="menu_item modal_dialog" href="#modal-dialog">
                                        <figure><img src="{{asset('frontend/img/menu-thumb-placeholder.jpg')}}" data-src="{{asset('frontend/img/menu-thumb-10.jpg')}}" alt="thumb" class="lazy"></figure>
                                        <h3>10. Burrito Al Pastor</h3>
                                        <p>Fuisset mentitum deleniti sit ea.</p>
                                        <strong>$9.40</strong>
                                    </a>
                                </div>
                            </div>
                            <!-- /row -->
                        </section>
                        <!-- /section -->
                        <section id="section-3">
                            <h4>Desserts</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <a class="menu_item modal_dialog" href="#modal-dialog">
                                        <figure><img src="{{asset('frontend/img/menu-thumb-placeholder.jpg')}}" data-src="{{asset('frontend/img/menu-thumb-10.jpg')}}" alt="thumb" class="lazy"></figure>
                                        <h3>5. Cheese Quesadilla</h3>
                                        <p>Fuisset mentitum deleniti sit ea.</p>
                                        <strong>$9.40</strong>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a class="menu_item modal_dialog" href="#modal-dialog">
                                        <figure><img src="{{asset('frontend/img/menu-thumb-placeholder.jpg')}}" data-src="{{asset('frontend/img/menu-thumb-10.jpg')}}" alt="thumb" class="lazy"></figure>
                                        <h3>6. Chorizo & Cheese</h3>
                                        <p>Fuisset mentitum deleniti sit ea.</p>
                                        <strong>$9.40</strong>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a class="menu_item modal_dialog" href="#modal-dialog">
                                        <figure><img src="{{asset('frontend/img/menu-thumb-placeholder.jpg')}}" data-src="{{asset('frontend/img/menu-thumb-10.jpg')}}" alt="thumb" class="lazy"></figure>
                                        <h3>7. Beef Taco</h3>
                                        <p>Fuisset mentitum deleniti sit ea.</p>
                                        <strong>$9.40</strong>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a class="menu_item modal_dialog" href="#modal-dialog">
                                        <figure><img src="{{asset('frontend/img/menu-thumb-placeholder.jpg')}}" data-src="{{asset('frontend/img/menu-thumb-10.jpg')}}" alt="thumb" class="lazy"></figure>
                                        <h3>8. Minced Beef Double Layer</h3>
                                        <p>Fuisset mentitum deleniti sit ea.</p>
                                        <strong>$9.40</strong>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a class="menu_item modal_dialog" href="#modal-dialog">
                                        <figure><img src="{{asset('frontend/img/menu-thumb-placeholder.jpg')}}" data-src="{{asset('frontend/img/menu-thumb-10.jpg')}}" alt="thumb" class="lazy"></figure>
                                        <h3>9. Piri Piri Chicken</h3>
                                        <p>Fuisset mentitum deleniti sit ea.</p>
                                        <strong>$9.40</strong>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a class="menu_item modal_dialog" href="#modal-dialog">
                                        <figure><img src="{{asset('frontend/img/menu-thumb-placeholder.jpg')}}" data-src="{{asset('frontend/img/menu-thumb-10.jpg')}}" alt="thumb" class="lazy"></figure>
                                        <h3>10. Burrito Al Pastor</h3>
                                        <p>Fuisset mentitum deleniti sit ea.</p>
                                        <strong>$9.40</strong>
                                    </a>
                                </div>
                            </div>
                            <!-- /row -->
                        </section>
                        <!-- /section -->
                        <section id="section-4">
                            <h4>Drinks</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <a class="menu_item modal_dialog" href="#modal-dialog">
                                        <figure><img src="{{asset('frontend/img/menu-thumb-placeholder.jpg')}}" data-src="{{asset('frontend/img/menu-thumb-10.jpg')}}" alt="thumb" class="lazy"></figure>
                                        <h3>11. Coca Cola</h3>
                                        <p>Fuisset mentitum deleniti sit ea.</p>
                                        <strong>$2.40</strong>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a class="menu_item modal_dialog" href="#modal-dialog">
                                        <figure><img src="{{asset('frontend/img/menu-thumb-placeholder.jpg')}}" data-src="{{asset('frontend/img/menu-thumb-10.jpg')}}" alt="thumb" class="lazy"></figure>
                                        <h3>12. Corona Beer</h3>
                                        <p>Fuisset mentitum deleniti sit ea.</p>
                                        <strong>$9.40</strong>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a class="menu_item modal_dialog" href="#modal-dialog">
                                        <figure><img src="{{asset('frontend/img/menu-thumb-placeholder.jpg')}}" data-src="{{asset('frontend/img/menu-thumb-10.jpg')}}" alt="thumb" class="lazy"></figure>
                                        <h3>13. Red Wine</h3>
                                        <p>Fuisset mentitum deleniti sit ea.</p>
                                        <strong>$19.40</strong>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a class="menu_item modal_dialog" href="#modal-dialog">
                                        <figure><img src="{{asset('frontend/img/menu-thumb-placeholder.jpg')}}" data-src="{{asset('frontend/img/menu-thumb-10.jpg')}}" alt="thumb" class="lazy"></figure>
                                        <h3>14. White Wine</h3>
                                        <p>Fuisset mentitum deleniti sit ea.</p>
                                        <strong>$19.40</strong>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a class="menu_item modal_dialog" href="#modal-dialog">
                                        <figure><img src="{{asset('frontend/img/menu-thumb-placeholder.jpg')}}" data-src="{{asset('frontend/img/menu-thumb-10.jpg')}}" alt="thumb" class="lazy"></figure>
                                        <h3>15. Mineral Water</h3>
                                        <p>Fuisset mentitum deleniti sit ea.</p>
                                        <strong>$1.40</strong>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a class="menu_item modal_dialog" href="#modal-dialog">
                                        <figure><img src="{{asset('frontend/img/menu-thumb-placeholder.jpg')}}" data-src="{{asset('frontend/img/menu-thumb-10.jpg')}}" alt="thumb" class="lazy"></figure>
                                        <h3>16. Red Bull</h3>
                                        <p>Fuisset mentitum deleniti sit ea.</p>
                                        <strong>$3.40</strong>
                                    </a>
                                </div>
                            </div>
                            <!-- /row -->
                        </section>
                        <!-- /section -->
                    </div>
                    <!-- /col -->
                    <div class="col-lg-4" id="sidebar_fixed">
                        <div class="box_order mobile_fixed">
                            <div class="head">
                                <h3>Order Summary</h3>
                                <a href="#0" class="close_panel_mobile"><i class="icon_close"></i></a>
                            </div>
                            <!-- /head -->
                            <div class="main">
                                <ul class="clearfix">
                                    <li><a href="#0">1x Enchiladas</a><span>$11</span></li>
                                    <li><a href="#0">2x Burrito</a><span>$14</span></li>
                                    <li><a href="#0">1x Chicken</a><span>$18</span></li>
                                    <li><a href="#0">2x Corona Beer</a><span>$9</span></li>
                                    <li><a href="#0">2x Cheese Cake</a><span>$11</span></li>
                                </ul>
                                <ul class="clearfix">
                                    <li>Subtotal<span>$56</span></li>
                                    <li>Delivery fee<span>$10</span></li>
                                    <li class="total">Total<span>$66</span></li>
                                </ul>
                                <div class="row opt_order">
                                    <div class="col-6">
                                        <label class="container_radio">Delivery
                                            <input type="radio" value="option1" name="opt_order" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-6">
                                        <label class="container_radio">Take away
                                            <input type="radio" value="option1" name="opt_order">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="dropdown day">
                                    <a href="#" data-bs-toggle="dropdown">Day <span id="selected_day"></span></a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-menu-content">
                                            <h4>Which day delivered?</h4>
                                            <div class="radio_select chose_day">
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="day_1" name="day" value="Today">
                                                        <label for="day_1">Today<em>-40%</em></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="day_2" name="day" value="Tomorrow">
                                                        <label for="day_2">Tomorrow<em>-40%</em></label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /people_select -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /dropdown -->
                                <div class="dropdown time">
                                    <a href="#" data-bs-toggle="dropdown">Time <span id="selected_time"></span></a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-menu-content">
                                            <h4>Lunch</h4>
                                            <div class="radio_select add_bottom_15">
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="time_1" name="time" value="12.00am">
                                                        <label for="time_1">12.00<em>-40%</em></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="time_2" name="time" value="08.30pm">
                                                        <label for="time_2">12.30<em>-40%</em></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="time_3" name="time" value="09.00pm">
                                                        <label for="time_3">1.00<em>-40%</em></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="time_4" name="time" value="09.30pm">
                                                        <label for="time_4">1.30<em>-40%</em></label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /time_select -->
                                            <h4>Dinner</h4>
                                            <div class="radio_select">
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="time_5" name="time" value="08.00pm">
                                                        <label for="time_1">20.00<em>-40%</em></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="time_6" name="time" value="08.30pm">
                                                        <label for="time_2">20.30<em>-40%</em></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="time_7" name="time" value="09.00pm">
                                                        <label for="time_3">21.00<em>-40%</em></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="time_8" name="time" value="09.30pm">
                                                        <label for="time_4">21.30<em>-40%</em></label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /time_select -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /dropdown -->
                                <div class="btn_1_mobile">
                                    <a href="order.html" class="btn_1 gradient full-width mb_5">Order Now</a>
                                    <div class="text-center"><small>No money charged on this steps</small></div>
                                </div>
                            </div>
                        </div>
                        <!-- /box_order -->
                        <div class="btn_reserve_fixed"><a href="#0" class="btn_1 gradient full-width">View Basket</a></div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_gray -->

        <div class="container margin_30_20">
            <div class="row">
                <div class="col-lg-8 list_menu">
                    <section id="section-5">
                        <h4>Reviews</h4>
                        <div class="row add_bottom_30 d-flex align-items-center reviews">
                            <div class="col-md-3">
                                <div id="review_summary">
                                    <strong>8.5</strong>
                                    <em>Superb</em>
                                    <small>Based on 4 reviews</small>
                                </div>
                            </div>
                            <div class="col-md-9 reviews_sum_details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6>Food Quality</h6>
                                        <div class="row">
                                            <div class="col-xl-10 col-lg-9 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3 col-3"><strong>9.0</strong></div>
                                        </div>
                                        <!-- /row -->
                                        <h6>Service</h6>
                                        <div class="row">
                                            <div class="col-xl-10 col-lg-9 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3 col-3"><strong>9.5</strong></div>
                                        </div>
                                        <!-- /row -->
                                    </div>
                                    <div class="col-md-6">
                                        <h6>Punctuality</h6>
                                        <div class="row">
                                            <div class="col-xl-10 col-lg-9 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3 col-3"><strong>6.0</strong></div>
                                        </div>
                                        <!-- /row -->
                                        <h6>Price</h6>
                                        <div class="row">
                                            <div class="col-xl-10 col-lg-9 col-9">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3 col-3"><strong>6.0</strong></div>
                                        </div>
                                        <!-- /row -->
                                    </div>
                                </div>
                                <!-- /row -->
                            </div>
                        </div>
                        <!-- /row -->
                        <div id="reviews">
                            <div class="review_card">
                                <div class="row">
                                    <div class="col-md-2 user_info">
                                        <figure><img src="img/avatar4.jpg" alt=""></figure>
                                        <h5>Lukas</h5>
                                    </div>
                                    <div class="col-md-10 review_content">
                                        <div class="clearfix add_bottom_15">
                                            <span class="rating">8.5<small>/10</small> <strong>Rating average</strong></span>
                                            <em>Published 54 minutes ago</em>
                                        </div>
                                        <h4>"Great Location!!"</h4>
                                        <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
                                        <ul>
                                            <li><a href="#0"><i class="icon_like"></i><span>Useful</span></a></li>
                                            <li><a href="#0"><i class="icon_dislike"></i><span>Not useful</span></a></li>
                                            <li><a href="#0"><i class="arrow_back"></i> <span>Reply</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /row -->
                            </div>
                            <!-- /review_card -->
                            <div class="review_card">
                                <div class="row">
                                    <div class="col-md-2 user_info">
                                        <figure><img src="img/avatar1.jpg" alt=""></figure>
                                        <h5>Marika</h5>
                                    </div>
                                    <div class="col-md-10 review_content">
                                        <div class="clearfix add_bottom_15">
                                            <span class="rating">9.0<small>/10</small> <strong>Rating average</strong></span>
                                            <em>Published 11 Oct. 2019</em>
                                        </div>
                                        <h4>"Really great dinner!!"</h4>
                                        <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
                                        <ul>
                                            <li><a href="#0"><i class="icon_like"></i><span>Useful</span></a></li>
                                            <li><a href="#0"><i class="icon_dislike"></i><span>Not useful</span></a></li>
                                            <li><a href="#0"><i class="arrow_back"></i> <span>Reply</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /row -->
                                <div class="row reply">
                                    <div class="col-md-2 user_info">
                                        <figure><img src="img/avatar.jpg" alt=""></figure>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="review_content">
                                            <strong>Reply from Foogra</strong>
                                            <em>Published 3 minutes ago</em>
                                            <p><br>Hi Monika,<br><br>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.<br><br>Thanks</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /reply -->
                            </div>
                            <!-- /review_card -->
                        </div>
                        <!-- /reviews -->
                        <div class="text-end"><a href="leave-review.html" class="btn_1 gradient">Leave a Review</a></div>
                    </section>
                    <!-- /section -->
                </div>
            </div>
        </div>
        <!-- /container -->

    </main>

@endsection
