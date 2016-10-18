<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sam's Spa - 133 Front Street North, Thorold Ontario</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/colorbox/colorbox.css')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i|Tangerine:400,700" rel="stylesheet">

</head>
<body>

<header>
    <nav class="navbar navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="brand" href="#">Sam's Spa</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active first"><a class="nav-anchor" data-id="#top_banner">Welcome</a></li>
                    <li><a class="nav-anchor" data-id="#about">About</a></li>
                    <li><a class="nav-anchor" data-id="#services">Services</a></li>
                    <li><a class="nav-anchor" data-id="#gallery">Gallery</a></li>
                    <li><a class="nav-anchor" data-id="#contact">Contact</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</header>

<section class="banner" id="top_banner">
    <div class="widget banner slickslider">
        <div class="image">
            <div class="stock-1 cover"></div>
        </div>
    </div>

    <div class="overlay-text">
        <h1>Welcome To Sam's Spa</h1>
    </div>

</section>

<section class="about padded" id="about">
    <div class="container">

        <div class="row">
            <div class="col-md-8">

                <h2 class="main-heading">About</h2>

                <p>As a proud user of Aveda products, I pride myself on providing exclusive treatments for women and men in a relaxed salon environment. I offer
                    nail services, customized facials, hair removal and eyelash extensions. I am committed to excellence and exceeding my clients
                    expectations. </p>

                <p class="located">Located in Thorold, in Alesco Salon. Call today to book your personalized service.</p>

                <div class="bg-container">
                    <div class="aveda"></div>
                </div>

            </div>

            <div class="col-md-4">
                <div class="bg-container">
                    <div class="outside-salon"></div>
                </div>
            </div>
        </div>

    </div>

</section>

<section class="services padded" id="services">
    <div class="container">

        <div class="service-groups">

            <h2 class="main-heading">Services</h2>

            <div class="service-group left">
                <div class="service">
                    <div class="service-label">Skin Care (AVEDA Customized Facials)</div>

                    <ul>
                        <li>30 minutes – $30</li>
                        <li>60 minutes – $60</li>
                        <li>90 minutes – $90</li>
                    </ul>

                </div>

                <div class="service">
                    <div class="service-label">Hair Removal</div>

                    <ul>
                        <li>Eyebrows – $12</li>
                        <li>Lip – $10</li>
                        <li>Chin – $10+</li>
                        <li>Underarms – $15</li>
                        <li>Arms – $30</li>
                        <li>Half Legs – $30</li>
                        <li>Full Legs – $50</li>
                        <li>Back – $40+</li>
                        <li>Chest – $40+</li>
                    </ul>

                </div>
            </div>

            <div class="service-group right">

                <div class="service">
                    <div class="service-label">Eyelash Extensions</div>

                    <ul>
                        <li>Full Set –$100</li>
                        <li>Fill (3-4 weeks) – $40</li>
                        <li>Fill (5+ weeks) – $60</li>
                    </ul>

                </div>

                <div class="service">
                    <div class="service-label">Nail Services</div>

                    <ul>
                        <li>Mini Manicure (25 min) – $10</li>
                        <li>Manicure (45 min) – $20</li>
                        <li>Spa Manicure (65 min) – $30</li>
                        <li>Mini Pedicure (25 min) – $25</li>
                        <li>Pedicure (55 min) – $35</li>
                        <li>Spa Pedicure (75 min) – $45</li>
                        <li>Manicure &amp; Pedicure - $45</li>
                        <li>Spa Manicure &amp; Spa Pedicure - $65</li>
                        <li>Gel Manicure (60 to 90 min) - $35</li>
                        <li>Gel Pedicure (60 to 90 min) - $50</li>
                    </ul>
                </div>
            </div>

            <div class="clear"></div>

            <p>*All prices are subject to HST.</p>
        </div>
    </div>
</section>

<section class="gallery padded" id="gallery">
    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <div class="gallery-container">
                    <div class="widget gallery slickslider">

                        <div class="image">
                            <div class="slide-content">
                                <div class="salon-4 cover">
                                    <a href="{{URL::asset('/images/carousel/gallery4.jpg')}}" class="cb-gallery-image" rel="about"></a>
                                </div>
                            </div>
                        </div>

                        <div class="image">
                            <div class="slide-content">
                                <div class="salon-9 cover">
                                    <a href="{{URL::asset('/images/carousel/gallery9.jpg')}}" class="cb-gallery-image" rel="about"></a>
                                </div>
                            </div>
                        </div>

                        <div class="image">
                            <div class="slide-content">
                                <div class="salon-8 cover">
                                    <a href="{{URL::asset('/images/carousel/gallery8.jpg')}}" class="cb-gallery-image" rel="about"></a>
                                </div>
                            </div>
                        </div>

                        <div class="image">
                            <div class="slide-content">
                                <div class="salon-1 cover">
                                    <a href="{{URL::asset('/images/carousel/nailpolish.JPG')}}" class="cb-gallery-image" rel="about"></a>
                                </div>
                            </div>
                        </div>

                        <div class="image">
                            <div class="slide-content">
                                <div class="salon-2 cover">
                                    <a href="{{URL::asset('/images/carousel/nails.JPG')}}" class="cb-gallery-image" rel="about"></a>
                                </div>
                            </div>
                        </div>

                        <div class="image">
                            <div class="slide-content">
                                <div class="salon-5 cover">
                                    <a href="{{URL::asset('/images/carousel/gallery5.JPG')}}" class="cb-gallery-image" rel="about"></a>
                                </div>
                            </div>
                        </div>

                        <div class="image">
                            <div class="slide-content">
                                <div class="salon-3 cover">
                                    <a href="{{URL::asset('/images/carousel/tweezers.JPG')}}" class="cb-gallery-image" rel="about"></a>
                                </div>
                            </div>
                        </div>

                        <div class="image">
                            <div class="slide-content">
                                <div class="salon-6 cover">
                                    <a href="{{URL::asset('/images/carousel/gallery6.JPG')}}" class="cb-gallery-image" rel="about"></a>
                                </div>
                            </div>
                        </div>

                        <div class="image">
                            <div class="slide-content">
                                <div class="salon-7 cover">
                                    <a href="{{URL::asset('/images/carousel/gallery7.jpg')}}" class="cb-gallery-image" rel="about"></a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="gallery-help">Click Image To Enlarge</div>
                </div>
            </div>
        </div>

    </div>

</section>

<section class="contact padded" id="contact">
    <div class="container">

        <h2 class="main-heading">Contact</h2>

        <div class="contact-info">
            <span class="">Samantha Venditti</span>

            <div class="company">Sam's Spa</div>
            <div class="address">133 Front Street North, Thorold, Ontario</div>
            <div class="phone">289-696-1586</div>
        </div>

        <div class="any-questions">Have any questions or want more information? Use the form below to email me and I will get back to you.</div>

        <div class="alerts">
            <ul>

            </ul>
        </div>

        <form class="contact-form" method="post" action="/">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="email-input" class="hidden">Email address</label>
                <input type="email" class="form-control email" id="email-input" name="email" placeholder="Your Email">
            </div>
            <div class="form-group">
                <label for="phone-input" class="hidden">Phone </label>
                <input type="text" class="form-control phone" id="phone-input" name="phone" placeholder="Your Phone (Optional)">
            </div>
            <div class="form-group">
                <label for="message-input" class="hidden">Message</label>
                <textarea class="form-control message" id="message-input" name="message" placeholder="Your Message"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>


    </div>
</section>

<section class="subscribe padded" id="subscribe">

    <!-- Begin MailChimp Signup Form -->
    <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
    <div id="mc_embed_signup">
        <form action="//samsspa.us14.list-manage.com/subscribe/post?u=9231f06d622bcc894061ce887&amp;id=c2329a225f" method="post" id="mc-embedded-subscribe-form"
              name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
                <label for="mce-EMAIL">Subscribe to Sam's Spa mailing list!</label>
                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_9231f06d622bcc894061ce887_c2329a225f"
                                                                                          tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
            </div>
        </form>
    </div>

    <!--End mc_embed_signup-->
</section>

<footer class="padded">
    <div class="container">
        <div class="left">
            <div class="company">Sam's Spa</div>
            <div class="location">Alesco Salon</div>
            <div class="address">133 Front Street North, Thorold, Ontario</div>
            <div class="phone">289-696-1586</div>
        </div>

        <div class="right">
            <div class="social-icons">
                <div class="social-icon facebook"><a href="https://www.facebook.com/samsspa/?fref=ts" target="_blank"></a></div>
                <div class="social-icon instagram"><a href="https://www.instagram.com/samsspa/" target="_blank"></a></div>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<script src="js/slick/slick.min.js"></script>
<script src="js/colorbox/jquery.colorbox-min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.slickslider.banner').slick({
            variableWidth: false,
            arrows: false
        });

        $('.slickslider.gallery').slick({
            variableWidth: false,
            arrows: false,
            infinite: false,
            autoplay: true,
            autoplaySpeed: 3000,
            slidesToShow: 3,
            slidesToScroll: 1
        });

        var $cb_images = $('.cb-gallery-image');

        if ($cb_images.length) {
            $cb_images.each(function () {
                $(this).colorbox({rel: $(this).attr('rel')});
            });
        }

        //SMOOTHSCROLLER

        $('.nav-anchor').each(function (index, div) {
            $(div).click(function () {

                $('body').animate({
                    scrollTop: $($(div).data('id')).offset().top + -110,
                    easing: "swing"
                }, 1000);

            });
        });


        //SCROLL ACTIVE
        //stackoverflow

        // Cache selectors
        var topMenu = $("#navbar"),
                topMenuHeight = topMenu.outerHeight() + 15,
        // All list items
                menuItems = topMenu.find("a"),
        // Anchors corresponding to menu items
                scrollItems = menuItems.map(function () {
                    var item = $($(this).data("id"));
                    if (item.length) {
                        return item;
                    }
                });

        // Bind to scroll
        $(window).scroll(function () {
            // Get container scroll position
            var fromTop = $(this).scrollTop() + topMenuHeight;

            // Get id of current scroll item
            var cur = scrollItems.map(function () {
                if ($(this).offset().top < fromTop)
                    return this;
            });
            // Get the id of the current element
            cur = cur[cur.length - 1];
            var id = cur && cur.length ? cur[0].id : "";
            // Set/remove active class
            menuItems
                    .parent().removeClass("active")
                    .end().filter("[data-id=#" + id + "]").parent().addClass("active");
        });

    });
</script>
</body>
</html>