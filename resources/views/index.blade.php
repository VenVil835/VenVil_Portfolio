<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- <meta name="viewport" content="width=device=width, initial-scale=1.0"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>VenVil</title>
        <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}"></link>
        <link rel="icon" href="{{asset('frontend/assets/images/VenVil Font.png')}}"></link>
        <style>
            @keyframes words {
            0%, 20%{
                content: "{{$home->role1}}";
            }
            21%, 40%{
                content: "{{$home->role2}}";
            }
            41%, 60%{
                content: "{{$home->role3}}";
            }
            61%, 80%{
                content: "{{$home->role4}}";
            }
            81%, 100%{
                content: "{{$home->role5}}";
            }
        }
        </style>
    </head>
<body>
    <div id="root">
        <div id="header">
            <div id="logo" style=" background: url('frontend/assets/images/VenVil Font.png') no-repeat left;
                                    background-size: 40px;
                                    background-position:relative;
                                    padding:5px 2px 5px 2px;
                                    cursor: pointer;  ">
                <div id="venvil">
                    <span>Ven</span><p>Vil</p>
                </div>
            </div>
            <div id="nav1">
                <input type="checkbox" id="toggle-menu">
                <div id="hamburger"></div>
                <ul id="nav">
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#blog">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div> <!-- end of nav1 -->
        </div><!-- end of header -->

    <section class="home" id="home" style="background: url('{{Voyager::image($home->home_background)}}') no-repeat;  background-size: cover;
    background-attachment: fixed;">
        <div id="homeimg"><img src="{{Voyager::image($home->home_photo)}}"></img></div>
        <div class="home-content">
            <h1>{{$home->title}}</h1>
            <h3 class="text-animation">A <span></span></h3>
            <p>{{$home->description}}
            </p>
                <div class="social-icons">
                    @if ($home->social_icon_1 != '')
                    <a href="{{$home->social_link_1}}"><img src="{{Voyager::image($home->social_icon_1)}}"></img></a>
                    @endif
                    @if ($home->social_icon_2 != '')
                    <a href="{{$home->social_link_2}}"><img src="{{Voyager::image($home->social_icon_2)}}"></img></a>
                    @endif
                    @if ($home->social_icon_3 != '')
                    <a href="{{$home->social_link_3}}"><img src="{{Voyager::image($home->social_icon_3)}}"></img></a>
                    @endif
                    @if ($home->social_icon_4 != '')
                        <a href="{{$home->social_link_4}}"><img src="{{Voyager::image($home->social_icon_4)}}"></img></a>
                    @endif
                </div>
                <div id="contact-btn"><a href="{{$home->btn_link}}" class="btn">{{$home->btn_text}}</a></div>           
        </div><!-- end of home content-->
                
                <!-- <div id="dots"><img src="images/side1.png"></img></div> -->
    </section> <!-- end of home -->
    <section class="about" id="about">
        <div class="about-content">
            <h2 class="heading">{{$about->title}}</h3>
            <p>{!!nl2br(htmlspecialchars($about->description))!!}
            </p>
        </div><!-- end of about content -->
    </section><!-- end of about -->
    <section class="services" id="services">
        <h2 class="heading">{{$services->title}}</h2>
        <h5>{{$services->subtitle}}</h5>
       
        <div class="services-container">
        @foreach($service_items as $service_item)
            <div class="service-box">
                <div class="service-info">
                    <h4>{{$service_item->service_name}}</h4>
                    <p>{{$service_item->service_description}}</p>
                </div><!-- end of service info -->
            </div><!-- end of service box -->
        @endforeach
        </div><!-- end of service container -->

    </section><!-- end of services -->
    <section class="blog" id="blog" style="background: url('{{Voyager::image($portfolios->background_img)}}') no-repeat;  background-size: cover;
    background-attachment: fixed;">
        <div class="blog-box">
            <h2 class="heading">{{$portfolios->title}}</h2>
            <h5>{{$portfolios->subtitle}}</h5>
            <div class="blog-wrapper">
            @foreach($portfolio_items as $portfolio_item)
                <div class="blog-item">
                    <img src="{{Voyager::image($portfolio_item->portfolio_img)}}" class="blog-img"></img>
                    <h2>{{$portfolio_item->portfolio_name}}</h2>
                    <p>{{$portfolio_item->portfolio_description}}</p>
                </div>
            @endforeach
            </div>
        </div>
    </section><!-- end of blog -->
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me</span></h2>

        <form action="">
            <div class="input-group1">
                <div class="input-box">
                    <input type="text" placeholder="Full Name">
                    <!-- <input type="password" placeholder="Password"> -->
                    <input type="email" placeholder="Email">
                </div>
                <div class="input-box">
                    <input type="number" placeholder="Phone Number">
                    <input type="text" placeholder="Subject">
                </div>
            </div>
            <div class="input-group2">
                <textarea name="" id="" cols="30" rows="10" 
                placeholder="Your Feedback"></textarea>
                <input type="submit" value="Send Feedback" class="btn">
            </div>
        </form>
    </section>
</div>
</body>
    <footer>
        <div class="social">
            <a href="https://www.facebook.com/nev.setolliv/"><img src="{{asset('frontend/assets/images/facebook.png')}}"></img></a>
            <a href="#"><img src="{{asset('frontend/assets/images/instagram.png')}}"></img></a>
            <a href="https://www.youtube.com/channel/UCiONSee0RI_acKtB7nAEOoQ"><img src="{{asset('frontend/assets/images/youtube.png')}}"></img></a>
        </div>
        <ul class="list">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#about">About Me</a>
            </li>
            <li>
                <a href="#services">Services</a>
            </li>
            <li>
                <a href="#blog">Blog</a>
            </li>
            <li>
                <a href="#contact">Contact Me</a>
            </li>
        </ul>
        <p class="copyright"> © Ven Villotes | All Rights Reserved 2024</p>
    </footer>
</html>