@extends('user/app-grey')

@section('main-content')

<!-- Menu
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-parallax bg-overlay-gradient">
    <div class="bg-section">
        <img src="{{asset('user/assets/images/page-title/7.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="title title-4 text-center">
                    <div class="title--content">
                        <div class="title--subtitle">Discover</div>
                        <div class="title--heading">
                            <h1>Our Menu</h1>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb">
                        <li><a class="active">Menu</a>
                        </li>
                        
                    </ol>
                    <div class="divider--shape-1down"></div>
                </div>
                <!-- .title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #page-title end -->

<!-- Heading #1
============================================= -->
<section id="heading1" class="heading heading-1 bg-white">
    <div class="container">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="text--center">
                    <p class="heading--subtitle">Taste the best</p>
                    <h2 class="heading--title mb-0">Fresh Ingredient, Tasty Meals</h2>
                    <div class="divider--shape-4"></div>
                    <p class="heading--desc">Everyone has taste, even if they don't realize it. Even if you're not a great chef, there's nothing to stop you understanding the difference between what tastes good and what doesn't.</p>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #heading1 end -->

<!-- Divider #1
============================================= -->
<section id="divider1" class="section-divider bg-overlay bg-parallax bg-overlay-dark4">
    <div class="bg-section">
        <img src="{{asset('user/assets/images/background/6.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="divider--shape-1up"></div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading heading-3 text--center">
                    <p class="heading--subtitle">Starts at 11:00 am</p>
                    <h2 class="heading--title mb-0 text-white">Breakfast Menu</h2>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
        
    </div>
    <!-- .container end -->
</section>
<!-- #divider1 end -->

<!-- Menu #2
============================================= -->
<section id="menu2" class="menu menu-2 bg-white pb-60">
    <div class="container">
        <div class="row">
            <!-- Dish #1 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/1.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-mixed-grid/13.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$24.95</div>
                                <h3 class="popup--title">Grilled Fillet</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Pan of Fried Eggs</h3>
                        <span class="dish--price">$12.95</span>
                        <p class="dish--desc">eggs, bacon and cherry-tomatoes with bread.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- Dish #2 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/2.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopupTwo"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopupTwo">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-mixed-grid/14.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$38.95</div>
                                <h3 class="popup--title">Chicken Breast</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Healthy Breakfast</h3>
                        <span class="dish--price">$19.95</span>
                        <p class="dish--desc">Oat granola with fresh blueberries, almond, yogurt.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- Dish #3 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/3.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup3"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup3">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-mixed-grid/15.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$13.95</div>
                                <h3 class="popup--title">Alder Grilled Seafood</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">American Brunch</h3>
                        <span class="dish--price">$14.95</span>
                        <p class="dish--desc">Applewood smoked bacon, tomatoes & green.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- Dish #4 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/4.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup4"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup4">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-mixed-grid/16.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$33.95</div>
                                <h3 class="popup--title">Sea Trout</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Salmon Sandwich</h3>
                        <span class="dish--price">$15.95</span>
                        <p class="dish--desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- Dish #5 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/5.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup5"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup5">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-mixed-grid/17.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$29.95</div>
                                <h3 class="popup--title">Roasted Steak Roulade</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Smoked Meat Sandwich</h3>
                        <span class="dish--price">$12.95</span>
                        <p class="dish--desc">Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- Dish #6 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/6.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup6"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup6">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-mixed-grid/18.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$34.95</div>
                                <h3 class="popup--title">Grilled Seafood Paella</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Breakfast Set</h3>
                        <span class="dish--price">$20.95</span>
                        <p class="dish--desc">Croissants with strawberries, mascarpone, honey.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #menu2 end -->

<!-- Divider #1
============================================= -->
<section id="divider2" class="section-divider bg-overlay bg-parallax bg-overlay-dark4">
    <div class="bg-section">
        <img src="{{asset('user/assets/images/background/11.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="divider--shape-1up"></div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading heading-3 text--center">
                    <p class="heading--subtitle">Starts at 2:00 pm</p>
                    <h2 class="heading--title mb-0 text-white">Lunch Menu</h2>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
        
    </div>
    <!-- .container end -->
</section>
<!-- #divider1 end -->

<!-- Menu #2
============================================= -->
<section id="menu3" class="menu menu-2 bg-white pb-60">
    <div class="container">
        <div class="row">
            <!-- Dish #1 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/13.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup7"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup7">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-mixed-grid/7.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$24.95</div>
                                <h3 class="popup--title">Cappuccino Coffee</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Grilled Fillet</h3>
                        <span class="dish--price">$12.95</span>
                        <p class="dish--desc">eggs, bacon and cherry-tomatoes with bread.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- Dish #2 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/14.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup8"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup8">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-mixed-grid/8.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$38.95</div>
                                <h3 class="popup--title">Dark Coffee</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Alder Grilled Seafood Paella</h3>
                        <span class="dish--price">$19.95</span>
                        <p class="dish--desc">Oat granola with fresh blueberries, almond, yogurt.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- Dish #3 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/15.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup9"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup9">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-mixed-grid/9.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$13.95</div>
                                <h3 class="popup--title">Caffè Macchiato</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Chicken Breast</h3>
                        <span class="dish--price">$14.95</span>
                        <p class="dish--desc">Applewood smoked bacon, tomatoes & green.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- Dish #4 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/16.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup10"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup10">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-mixed-grid/10.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$12.95</div>
                                <h3 class="popup--title">Espresso Coffee</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Sea Trout</h3>
                        <span class="dish--price">$15.95</span>
                        <p class="dish--desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- Dish #5 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/17.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup11"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup11">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-mixed-grid/11.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$12.95</div>
                                <h3 class="popup--title">Coffee & Strawberry Jam</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Smoked Paprika Hummus</h3>
                        <span class="dish--price">$12.95</span>
                        <p class="dish--desc">Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- Dish #6 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/18.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup12"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup12">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-mixed-grid/12.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$34.95</div>
                                <h3 class="popup--title">Coffee Latte</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Roasted Steak Roulade</h3>
                        <span class="dish--price">$20.95</span>
                        <p class="dish--desc">Croissants with strawberries, mascarpone, honey.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #menu2 end -->

<!-- Divider #1
============================================= -->
<section id="divider3" class="section-divider bg-overlay bg-parallax bg-overlay-dark4">
    <div class="bg-section">
        <img src="{{asset('user/assets/images/background/12.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="divider--shape-1up"></div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading heading-3 text--center">
                    <p class="heading--subtitle">Starts at 7:00 pm</p>
                    <h2 class="heading--title mb-0 text-white">Dinner Menu</h2>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
        
    </div>
    <!-- .container end -->
</section>
<!-- #divider1 end -->

<!-- Menu #2
============================================= -->
<section id="menu4" class="menu menu-2 bg-white pb-60">
    <div class="container">
        <div class="row">
            <!-- Dish #1 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/7.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup13"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup13">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-mixed-grid/1.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$24.95</div>
                                <h3 class="popup--title">Grilled American Fillet</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Grilled Fillet</h3>
                        <span class="dish--price">$12.95</span>
                        <p class="dish--desc">eggs, bacon and cherry-tomatoes with bread.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- Dish #2 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/8.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup14"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup14">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-mixed-grid/2.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$12.95</div>
                                <h3 class="popup--title">Roast Sea Trout</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Alder Grilled Seafood Paella</h3>
                        <span class="dish--price">$19.95</span>
                        <p class="dish--desc">Oat granola with fresh blueberries, almond, yogurt.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- Dish #3 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/9.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup15"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup15">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-mixed-grid/3.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$12.95</div>
                                <h3 class="popup--title">Grilled Seafood Paella</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Chicken Breast</h3>
                        <span class="dish--price">$14.95</span>
                        <p class="dish--desc">Applewood smoked bacon, tomatoes & green.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- Dish #4 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/10.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup16"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup16">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-mixed-grid/4.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$12.95</div>
                                <h3 class="popup--title">Chicken Breast</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Sea Trout</h3>
                        <span class="dish--price">$15.95</span>
                        <p class="dish--desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- Dish #5 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/11.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup17"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup17">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-mixed-grid/5.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$29.95</div>
                                <h3 class="popup--title">Roasted Steak Roulade</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Smoked Paprika Hummus</h3>
                        <span class="dish--price">$12.95</span>
                        <p class="dish--desc">Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- Dish #6 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/12.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup19"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup18">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-mixed-grid/6.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$34.95</div>
                                <h3 class="popup--title">Grilled Seafood Paella</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Roasted Steak Roulade</h3>
                        <span class="dish--price">$20.95</span>
                        <p class="dish--desc">Croissants with strawberries, mascarpone, honey.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #menu2 end -->

<!-- Divider #1
============================================= -->
<section id="divider4" class="section-divider bg-overlay bg-parallax bg-overlay-dark4">
    <div class="bg-section">
        <img src="{{asset('user/assets/images/background/13.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="divider--shape-1up"></div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading heading-3 text--center">
                    <p class="heading--subtitle">Don’t miss</p>

                    <h2 class="heading--title mb-0 text-white">Dessert Menu</h2>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
        
    </div>
    <!-- .container end -->
</section>
<!-- #divider1 end -->

<!-- Menu #2
============================================= -->
<section id="menu5" class="menu menu-2 bg-white pb-60">
    <div class="container">
        <div class="row">
            <!-- Dish #1 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/19.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup19"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup19">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-mixed-grid/19.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$24.95</div>
                                <h3 class="popup--title">Homemade croissants</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Beautiful homemade croissants</h3>
                        <span class="dish--price">$12.95</span>
                        <p class="dish--desc">eggs, bacon and cherry-tomatoes with bread.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- Dish #2 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/20.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup20"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup20">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-mixed-grid/20.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$12.95</div>
                                <h3 class="popup--title">Pain au chocolat</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Blueberry Sweet Rolls</h3>
                        <span class="dish--price">$19.95</span>
                        <p class="dish--desc">Oat granola with fresh blueberries, almond, yogurt.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- Dish #3 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/21.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup21"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup21">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-mixed-grid/21.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$21.95</div>
                                <h3 class="popup--title">Cannoli with cream cheese</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Traditional pancakes</h3>
                        <span class="dish--price">$14.95</span>
                        <p class="dish--desc">Applewood smoked bacon, tomatoes & green.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- Dish #4 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/22.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup22"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup22">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-mixed-grid/22.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$33.95</div>
                                <h3 class="popup--title">Chocolate Cherry Cake</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Chocolate Cherry Cake</h3>
                        <span class="dish--price">$15.95</span>
                        <p class="dish--desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- Dish #5 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/23.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup23"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup23">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-mixed-grid/23.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$29.95</div>
                                <h3 class="popup--title">Blueberry Sweet Rolls</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Pain au chocolat</h3>
                        <span class="dish--price">$12.95</span>
                        <p class="dish--desc">Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- Dish #6 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/24.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup24"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup24">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-mixed-grid/24.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$34.95</div>
                                <h3 class="popup--title">Traditional pancakes</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Cannoli with cream cheese</h3>
                        <span class="dish--price">$20.95</span>
                        <p class="dish--desc">Croissants with strawberries, mascarpone, honey.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #menu2 end -->

<!-- Divider #1
============================================= -->
<section id="divider5" class="section-divider bg-overlay bg-parallax bg-overlay-dark4">
    <div class="bg-section">
        <img src="{{asset('user/assets/images/background/14.jpg')}}" alt="Background" />
    </div>
    <div class="container">
        <div class="divider--shape-1up"></div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading heading-3 text--center">
                    <p class="heading--subtitle">Enjoy</p>
                    <h2 class="heading--title mb-0 text-white">Drinks Menu</h2>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
        
    </div>
    <!-- .container end -->
</section>
<!-- #divider1 end -->

<!-- Menu #2
============================================= -->
<section id="menu6" class="menu menu-2 bg-white pb-60">
    <div class="container">
        <div class="row">
            <!-- Dish #1 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/25.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup25"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup25">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-board/13.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$24.95</div>
                                <h3 class="popup--title">Grilled American Fillet</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Cappuccino Coffee</h3>
                        <span class="dish--price">$12.95</span>
                        <p class="dish--desc">eggs, bacon and cherry-tomatoes with bread.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- Dish #2 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/26.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup26"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup26">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-board/14.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$34.95</div>
                                <h3 class="popup--title">Grilled Seafood Paella</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Caffè Macchiato</h3>
                        <span class="dish--price">$19.95</span>
                        <p class="dish--desc">Oat granola with fresh blueberries, almond, yogurt.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- Dish #3 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/27.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup27"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup27">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-board/15.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$38.95</div>
                                <h3 class="popup--title">Roast Sea Trout</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Dark Coffee</h3>
                        <span class="dish--price">$14.95</span>
                        <p class="dish--desc">Applewood smoked bacon, tomatoes & green.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- Dish #4 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/28.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup28"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup28">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-board/16.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$38.95</div>
                                <h3 class="popup--title">Smoked Paprika</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Monkfish, onion, paella rice, garlic & smoked paprika, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese. </p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Espresso Coffee</h3>
                        <span class="dish--price">$15.95</span>
                        <p class="dish--desc">Salmon, butter, lemon juice, onion, garlic & salad.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- Dish #5 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/29.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup29"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup29">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-board/17.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$13.95</div>
                                <h3 class="popup--title">Smoked Hummus</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Coffee Latte</h3>
                        <span class="dish--price">$12.95</span>
                        <p class="dish--desc">Baguette, basil, arugula, olives, cherry-tomatoes.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-4 end -->
            <!-- Dish #6 -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="dish-panel">
                    <div class="dish--img">
                        <img src="{{asset('user/assets/images/menu/gallery/30.jpg')}}" alt="Dish Image">
                        <div class="dish--overlay">
                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup30"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup30">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="img-popup">
                            <img src="{{asset('user/assets/images/menu/menu-board/18.jpg')}}" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$29.95</div>
                                <h3 class="popup--title">Chicken Breast</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Monkfish, onion, paella rice, garlic & smoked paprika, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese. </p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
                        </div>
                    </div>
                    <div class="dish--content">
                        <h3 class="dish--title">Coffee & Strawberry Jam</h3>
                        <span class="dish--price">$20.95</span>
                        <p class="dish--desc">Croissants with strawberries, mascarpone, honey.</p>
                    </div>
                </div>
                <!-- .dish end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #menu2 end -->

@endsection