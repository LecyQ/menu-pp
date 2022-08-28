

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <title>Black Rock QR Menü</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Css -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('css/base.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('css/flexslider.css')}}" rel="stylesheet" type="text/css"  media="all" />
    <link href="{{asset('css/fonts.css')}}" rel="stylesheet" type="text/css"  media="all" />
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
                    <h1 class="title"> Tasty menu</h1>
                    <p class="beige">Variety of delicious plate</p>
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

                       @foreach($category as $key=>$value)
                           <li class="">{{$value->name}}</li>
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
                    <li class="active block-list">
                        <div class="col-sm-5  col-sm-offset-1 text-center">
                            <div class="block-cat">
                                <h2 class="mb-30">omelettes </h2>
                            </div>



                            @foreach($item as $key=>$value)

                              @if($value->category=='omelette')

                                <div class="block-content pb-25 mb-25">

                                    <h2 class="mb-5 ">{{$value->title}}</h2>
                                    <p>{{$value->ingredients}}</p>
                                    <span class="block-price">${{$value->price}}</span>
                                    <span class="dots"></span>
                                </div>
                                @endif
                            @endforeach

                        </div>
                        <div class="col-sm-5 text-center ">
                            <div class="block-cat">
                                <h2 class="mb-30">waffle  </h2>
                            </div>
                            <div class="block-content  pb-25 mb-25">
                                <h2 class="mb-5 ">Waffle Brunch </h2>
                                <p>A Small Order of French Toast, Bacon and Strawberries.</p>
                                <span class="block-price ">$14</span>
                                <span class="dots"></span>
                            </div>
                            <div class="block-content  pb-25 mb-25">
                                <h2 class="mb-5 ">Waffles Benedict </h2>
                                <p>Our Benedict Waffle Topped with Maple-Butter Syrup.</p>
                                <span class="block-price ">$14</span>
                                <span class="dots"></span>
                            </div>
                            <div class="block-content">
                                <h2 class="mb-5 ">Belgian Waffle  </h2>
                                <p>Available with Strawberries, Pecans and Chantilly Cream.</p>
                                <span class="block-price">$14</span>
                            </div>
                        </div>
                    </li>
                    <!--Menu list-->
                    <li class=" block-list">
                        <div class="col-sm-5  col-sm-offset-1 text-center">
                            <div class="block-cat">
                                <h2 class="mb-30">appetizers </h2>
                            </div>
                            <div class="block-content pb-25 mb-25">
                                <h2 class="mb-5 ">Crabcakes </h2>
                                <p>Served with Mustard and Tartar Sauce.</p>
                                <span class="block-price">$14</span>
                                <span class="dots"></span>
                            </div>
                            <div class="block-content  pb-25 mb-25">
                                <h2 class="mb-5 ">Buffalo Wings </h2>
                                <p>Fried Wings Covered in Hot Sauce and Served with Blue Cheese Dressing.</p>
                                <span class="block-price ">$14</span>
                                <span class="dots"></span>
                            </div>
                            <div class="block-content  pb-25 mb-25">
                                <h2 class="mb-5 ">Quesadilla </h2>
                                <p>Grilled Flour Tortilla Filled with Melted Cheese, Green Onions.</p>
                                <span class="block-price ">$14</span>
                                <span class="dots"></span>
                            </div>
                            <div class="block-content  pb-25 mb-25">
                                <h2 class="mb-5 ">Lettuce Wraps </h2>
                                <p>Create Your Own Thai Lettuce Rolls! Satay Chicken Strips, Carrots.</p>
                                <span class="block-price ">$14</span>
                                <span class="dots"></span>
                            </div>
                            <div class="block-content mb-25">
                                <h2 class="mb-5 ">Tex Mex Eggrolls </h2>
                                <p>Spicy Chicken, Corn, Black Beans, Peppers, Onions and Melted.</p>
                                <span class="block-price ">$14</span>
                            </div>
                            <div class="block-cat">
                                <h2 class="mb-30">kids </h2>
                            </div>
                            <div class="block-content pb-25 mb-25">
                                <h2 class="mb-5 ">Kids' Pasta </h2>
                                <p>Served with Bowtie Pasta. Choose from Butter and Parmesan.</p>
                                <span class="block-price">$14</span>
                                <span class="dots"></span>
                            </div>
                            <div class="block-content">
                                <h2 class="mb-5 ">Kids' Desserts </h2>
                                <p>Choose from Kids' Scoop of Ice Cream, Kids' Mini Hot Fudge.</p>
                                <span class="block-price ">$14</span>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center ">
                            <div class="block-cat">
                                <h2 class="mb-30">main  </h2>
                            </div>
                            <div class="block-content  pb-25 mb-25">
                                <h2 class="mb-5 ">Pizza and Salad </h2>
                                <p>A Smaller Version of Our Pizzas with a Small Green Salad.</p>
                                <span class="block-price ">$14</span>
                                <span class="dots"></span>
                            </div>
                            <div class="block-content  pb-25 mb-25">
                                <h2 class="mb-5 ">Lunch Pasta </h2>
                                <p>Choose from Our Selection of Lunch Sized Pastas: Fettuccini Alfredo.</p>
                                <span class="block-price ">$14</span>
                                <span class="dots"></span>
                            </div>
                            <div class="block-content mb-25">
                                <h2 class="mb-5 ">Lunch Salmon  </h2>
                                <p>Your Choice of: Herb Crusted Filet of Salmon, Miso Salmon.</p>
                                <span class="block-price">$14</span>
                            </div>
                            <div class="block-cat">
                                <h2 class="mb-30">pizza  </h2>
                            </div>
                            <div class="block-content  pb-25 mb-25">
                                <h2 class="mb-5 ">Cheese Pizza</h2>
                                <p>Topped with Fresh Mozzarella, White Cheddar and Fontina Cheeses.</p>
                                <span class="block-price ">$14</span>
                                <span class="dots"></span>
                            </div>
                            <div class="block-content  pb-25 mb-25">
                                <h2 class="mb-5 ">Pepperoni Pizza </h2>
                                <p>Fresh Mozzarella and Fontina Cheeses and is Topped.</p>
                                <span class="block-price ">$14</span>
                                <span class="dots"></span>
                            </div>
                            <div class="block-content  pb-25 mb-25">
                                <h2 class="mb-5 ">B.B.Q. Chicken Pizza </h2>
                                <p>Smoked Gouda, Red Onion and Cilantro.</p>
                                <span class="block-price ">$14</span>
                                <span class="dots"></span>
                            </div>
                            <div class="block-content">
                                <h2 class="mb-5 ">Margherita Pizza  </h2>
                                <p>Fresh Mozzarella, Basil and Tomato Sauce.</p>
                                <span class="block-price">$14</span>
                            </div>
                        </div>
                    </li>
                    <!--Menu list-->
                    <li class=" block-list">
                        <div class="col-sm-5  col-sm-offset-1 text-center">
                            <div class="block-cat">
                                <h2 class="mb-30">cheesecake </h2>
                            </div>
                            <div class="block-content pb-25 mb-25">
                                <h2 class="mb-5 ">Original </h2>
                                <p>Our Famous Creamy Cheesecake with a Graham Cracker Crust.</p>
                                <span class="block-price">$14</span>
                                <span class="dots"></span>
                            </div>
                            <div class="block-content  pb-25 mb-25">
                                <h2 class="mb-5 ">Strawberry Cheesecake </h2>
                                <p>The Original Topped with Glazed Fresh Strawberries.</p>
                                <span class="block-price ">$14</span>
                                <span class="dots"></span>
                            </div>
                            <div class="block-content  pb-25 mb-25">
                                <h2 class="mb-5 ">Lemon Meringue Cheesecake </h2>
                                <p>Lemon Cream Cheesecake Topped with Layers of Lemon Mousse.</p>
                                <span class="block-price ">$14</span>
                                <span class="dots"></span>
                            </div>
                            <div class="block-content  pb-25 mb-25">
                                <h2 class="mb-5 ">Mango Key Lime Cheesecake </h2>
                                <p>Topped with Mango Mousse on a Vanilla Coconut Macaroon Crust.</p>
                                <span class="block-price ">$14</span>
                                <span class="dots"></span>
                            </div>
                            <div class="block-content pb-25  mb-25">
                                <h2 class="mb-5 ">Tiramisu Cheesecake </h2>
                                <p>Our Wonderful Cheesecake and Tiramisu Combined into one Dessert.</p>
                                <span class="block-price ">$14</span>
                                <span class="dots"></span>
                            </div>
                            <div class="block-content">
                                <h2 class="mb-5 ">Low Carb Cheesecake </h2>
                                <p>Smooth and Creamy with a walnut Crust Sweetened with Stevia.</p>
                                <span class="block-price ">$14</span>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center ">
                            <div class="block-cat">
                                <h2 class="mb-30">ice cream  </h2>
                            </div>
                            <div class="block-content  pb-25 mb-25">
                                <h2 class="mb-5 ">Hot Fudge Sundae </h2>
                                <p>Topped with Whipped Cream and Almonds.</p>
                                <span class="block-price ">$14</span>
                                <span class="dots"></span>
                            </div>
                            <div class="block-content  pb-25 mb-25">
                                <h2 class="mb-5 ">Chocolate Brownie Sundae </h2>
                                <p>Our own Fabulous Godiva Chocolate Brownie, Vanilla Ice Cream, Hot Fudge.</p>
                                <span class="block-price ">$14</span>
                                <span class="dots"></span>
                            </div>
                            <div class="block-content mb-25">
                                <h2 class="mb-5 ">Bowl of Ice Cream  </h2>
                                <p>Two and a half scoops of your choice of Vanilla or Coffee Ice.</p>
                                <span class="block-price">$14</span>
                            </div>
                            <div class="block-cat">
                                <h2 class="mb-30">specialty</h2>
                            </div>
                            <div class="block-content pb-25 mb-25">
                                <h2 class="mb-5 ">Carrot Cake </h2>
                                <p>Deliciously Moist Layers of Carrot Cake and Our Famous Cream.</p>
                                <span class="block-price ">$14</span>
                                <span class="dots"></span>
                            </div>
                            <div class="block-content">
                                <h2 class="mb-5 ">Black-Out Cake  </h2>
                                <p>Our Deepest, Richest Chocolate Cake with Chocolate Chips.</p>
                                <span class="block-price">$14</span>
                            </div>
                        </div>
                    </li>
                    <!--Menu list-->
                    <li class="block-list">
                        <div class="col-sm-5  col-sm-offset-1 text-center">
                            <div class="block-cat">
                                <h2 class="mb-30">iced drinks </h2>
                            </div>
                            <div class="block-content pb-25 mb-25">
                                <h2 class="mb-5 ">Strawberry Fruit Smoothie </h2>
                                <p>Strawberries, Orange and Pineapple Juices, Coconut and Banana.</p>
                                <span class="block-price">$14</span>
                                <span class="dots"></span>
                            </div>
                            <div class="block-content  pb-25 mb-25">
                                <h2 class="mb-5 ">Tropical Smoothie </h2>
                                <p>Mango, Passion Fruit, Pineapple and Coconut All Blended with Ice.</p>
                                <span class="block-price ">$14</span>
                                <span class="dots"></span>
                            </div>
                            <div class="block-content  pb-25 mb-25">
                                <h2 class="mb-5 ">Frozen Iced Mango </h2>
                                <p>Mango, Tropical Juices and a Hint of Coconut Blended with Ice and.</p>
                                <span class="block-price ">$14</span>
                                <span class="dots"></span>
                            </div>
                            <div class="block-content">
                                <h2 class="mb-5 ">Peach Smoothie </h2>
                                <p>Crushed Peaches and Juice All Blended with Ice and Swirled with.</p>
                                <span class="block-price ">$14</span>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center ">
                            <div class="block-cat">
                                <h2 class="mb-30">hot drinks  </h2>
                            </div>
                            <div class="block-content  pb-25 mb-25">
                                <h2 class="mb-5 ">Café Latte </h2>
                                <p>Double Espresso, Extra Steamed Milk.</p>
                                <span class="block-price ">$14</span>
                                <span class="dots"></span>
                            </div>
                            <div class="block-content  pb-25 mb-25">
                                <h2 class="mb-5 ">Café Mocha </h2>
                                <p>Espresso, Chocolate, Steamed Milk, Whipped Cream.</p>
                                <span class="block-price ">$14</span>
                                <span class="dots"></span>
                            </div>
                            <div class="block-content  pb-25 mb-25">
                                <h2 class="mb-5 ">Hot Chocolate </h2>
                                <p>A huge, steamy serving of real hot chocolate with whipped cream.</p>
                                <span class="block-price ">$14</span>
                                <span class="dots"></span>
                            </div>
                            <div class="block-content">
                                <h2 class="mb-5 ">Double Espresso  </h2>
                                <p>Enjoy a double shot of espresso.</p>
                                <span class="block-price">$14</span>
                            </div>
                        </div>
                    </li>
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
                        <img src="img/11.jpg" alt="">
                    </div>
                </li>
                <li>
                    <div class="background-img zoom">
                        <img src="img/12.jpg" alt="">
                    </div>
                </li>
                <li>
                    <div class="background-img zoom">
                        <img src="img/13.jpg" alt="">
                    </div>
                </li>
                <li>
                    <div class="background-img zoom">
                        <img src="img/14.jpg" alt="">
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
<script src="{{asset('js/jquery-1.12.4.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.flexslider-min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/smooth-scroll.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/placeholders.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/script.js')}}" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbGQXiGt-6UAmOFFdSzYI-byeE7ewBuVM&callback=initializeMap"></script>
<!-- Google analytics -->
<!-- End google analytics -->
</body>
</html>

