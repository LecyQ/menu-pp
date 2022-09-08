

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <title>Black Rock QR Menü</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Css -->
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../css/base.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../css/main.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Kristi" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
</head>
<body>
<!-- Preloader -->
<div class="loader">
    <!-- Preloader inner -->
    <div class="loader-inner">
        <svg width="120" height="220" viewbox="0 0 100 100" class="loading-spinner" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <circle class="spinner" cx="50" cy="50" r="21" fill="#ffffff" stroke-width="2"/>
        </svg>
    </div>
    <!-- End preloader inner -->
</div>
<!-- End preloader-->
<!--Wrapper-->
<div class="wrapper">
    <!--Hero section-->
    <section class="hero overlay">
        <!--Main slider-->

        <!--End main slider-->
        <!--Header-->
        <header class="header default">
            <div class=" left-part">
                <a class="logo scroll" href="#hero">
                    <h2>tasty</h2>
                </a>
            </div>
            <div class="right-part">
                <nav class="main-nav">
                    <div class="toggle-mobile-but">
                        <a href="#" class="mobile-but" >
                            <div class="lines"></div>
                        </a>
                    </div>
                    <ul>
                        <li><a class="scroll" href="#gallery">Gallery</a></li>
                        <li><a class="scroll" href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!--End header-->
        <!--Inner hero-->
        <div class="inner-hero">
            <!--Container-->
            <div class="container hero-content">
            </div>
            <!--End container-->
        </div>
        <!--End inner hero-->
    </section>
    <!--End hero section-->
    <!--Menu section-->
    <section id="menu" class="menu pt-120 pb-120 ">
        <!--Container-->
        <div class="container">
            <!--Row-->
            <div class="row">
                <div class="col-sm-12  mb-100 text-center">
                    <h1 class="title">{{$general->first()->maintitle}}</h1>
                    <p class="beige">{{$general->first()->description}}</p>
                </div>
            </div>
            <!--End row-->
        </div>
        <!--End container-->
        <!--Container-->
        <div class="container">
            <!--Row-->
            <div class="row">
                <div class="col-sm-12 ">
                    <!--Tabs-->
                    <ul class="block-tabs text-center">
                        @foreach($uniqueCategory as $key=>$value)
                        <li class="{{ $loop->first ?  'active' : '' }}">{{$value->maincategory}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--End row-->
        </div>
        <!--End container-->
        <!--Container-->
        <div class="container">
            <!--Row-->
            <div class="row">
                <ul class="block-tab mt-40">
                    <!--Menu list-->
                    @foreach($uniqueCategory as $key=>$uniqueMaincategory)
                    <li class="block-list {{ $loop->first ?  'active' : '' }}">
                        <!--foreach-->
                            @foreach($category as $key=>$subCategory)
                                @if($subCategory->maincategory == $uniqueMaincategory->maincategory)
                        <div class="col-sm-5  col-sm-offset-1 text-center">
                            <div class="block-cat">
                                <h2 class="mb-30">{{$subCategory->subcategory}} </h2>
                            </div>
                            @foreach($item as $key=>$value)
                                @if($subCategory->subcategory == $value->category)
                            <div class="block-content pb-25 mb-25">
                                <h2 class="mb-5 ">{{$value->title}} </h2>
                                <p>{{$value->ingredients}}</p>
                                <span class="block-price">${{$value->price}}</span>
                                <span class="dots"></span>
                            </div>
                                @endif
                            @endforeach
                        </div>
                                @endif
                            @endforeach
                            @endforeach
                            <!--endforeach-->


                </ul>
                <!--End tabs-->
            </div>
            <!--End row-->
        </div>
        <!--End container-->
    </section>
    <!--End menu section-->
    <!--Gallery section-->
    <section id="gallery" class="gallery overlay">
        <!-- As a general rule, include a heading (h1-h6) as a child of each section and article element for screen readers purposes-->
        <h2 class="indent">Gallery</h2>
        <!--Gallery slider-->
        <div class="gallery-slider slider flexslider">
            <ul class="slides">
                <li>
                    <div class="background-img zoom">
                        <img src="img/black-rock-sports-pub-by-eskici-merkez-bodrum-5665-5739.jpg" alt="">
                    </div>
                </li>
                <li>
                    <div class="background-img zoom">
                        <img src="img/black-rock-sports-pub-by-eskici-merkez-bodrum-5665-5739.jpg" alt="">
                    </div>
                </li>
                <li>
                    <div class="background-img zoom">
                        <img src="img/black-rock-sports-pub-by-eskici-merkez-bodrum-5665-5739.jpg" alt="">
                    </div>
                </li>
                <li>
                    <div class="background-img zoom">
                        <img src="img/black-rock-sports-pub-by-eskici-merkez-bodrum-5665-5739.jpg" alt="">
                    </div>
                </li>
            </ul>
        </div>
        <!--End gallery slider-->
    </section>
    <!--End gallery section-->
    <!--Contact section-->
    <section id="contact" class="contact pt-250 pb-250">
        <!-- As a general rule, include a heading (h1-h6) as a child of each section and article element for screen readers purposes-->
        <h2 class="indent">Contact</h2>
        <div class="block-map ">
            <div id="map" class="map"></div>
        </div>
        <!--Container-->
        <div class="container block-contact">
            <!--Row-->
            <div class="row">
                <div class="col-md-5 col-md-offset-7 col-sm-5 col-sm-offset-7">
                    <ul class="block-social mb-30">
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                        <li><a href="#"><i class="icon-whatsapp"></i></a></li>
                    </ul>
                    <div class="block-info mb-30">
                        <p><strong>Çalışma Saatleri 09:00 - 03:00</strong><br>
                            Mahallenizde bulunan Black Rock günün her saati canlı !
                            Come To Black Rock Feel At Home.
                            <br><br>
                            48400 Bodrum / Kumbahçe <br>
                            Cumhuriyet Caddesi No : 155<br><br>
                            Telefon: (532) 366 59 49 <br>
                            Email : <span><a href="mailto:info@blackrockbodrum.com">info@blackrockbodrum.com</a></span>
                        </p>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-7 col-sm-5 col-sm-offset-7">
                    <footer class="footer-short mt-40">
                        <p>	&copy; 2022 Black Rock Bodrum - Limon Ajans Tarafından Hazırlanmıştır.</p>
                    </footer>
                </div>
            </div>
            <!--End row-->
        </div>
        <!--End container-->
    </section>
    <!--End contact section-->
</div>
<!-- End wrapper-->
<!--Javascript-->
<script src="../js/jquery-1.12.4.min.js" type="text/javascript"></script>
<script src="../js/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="../js/smooth-scroll.js" type="text/javascript"></script>
<script src="../js/jquery.validate.min.js" type="text/javascript"></script>
<script src="../js/placeholders.min.js" type="text/javascript"></script>
<script src="../js/script.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbGQXiGt-6UAmOFFdSzYI-byeE7ewBuVM&callback=initializeMap"></script>
<!-- Google analytics -->
<!-- End google analytics -->
</body>
</html>

