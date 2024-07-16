<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">
   
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
  
    <link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" >
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}" type="text/css">
    <link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">

   
</head>


<body>
  
  <nav class="navbar navbar-expand-lg sticky-top   ">
  <div class="container">
    <div class="logo">
      <a class="navbar-brand" href="#">Hotel Five Star</a>
      <i class="fa-solid fa-star fa-flip fa-lg" style="color: #f5cb43;"></i>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main" aria-controls="main" aria-expanded="true" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars"></i>
    </button>
    <div class="collapse navbar-linkk navbar-collapse" id="main">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link  p-lg-3" aria-current="page" href="#" data-scroll="Dashboard" >Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-lg-3" href="" data-scroll="Services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-lg-3" href="" data-scroll="Rooms" >Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-lg-3" href="" data-scroll="About">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-lg-3" href="" data-scroll="Gallery" >Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-lg-3 contact" href="contact.html" >Contact</a>
        </li>
      </ul>
     
      <button class=" btn  rounded-pill buttons-effects from-left">
        <span></span>
       <a href="login">Login</a>
    </button>
    </div>
  </div>
</nav>
      <!-- end nav -->
      <!-- start section-background -->
      <div id="Dashboard"   class=" block section d-flex justify-content-center align-items-center ">
        <div class=" mb-5 titre text-center">
          <h1 class="mb-2  ">welcome to deluxe hotel</h1>
        
        </div>
      </div>
      <!-- end section-background -->
      <!-- start booking -->

      <section class="  ftco-booking">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <form action="#" class="booking-form">
                <div class="row">
                  <div class="col-md-3 d-flex">
                    <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                      <div class="wrap">
                        <label for="#">Check-in Date</label>
                        <input type="date" class="form-control checkin_date" placeholder="Check-in date">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 d-flex">
                    <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                      <div class="wrap">
                        <label for="#">Check-out Date</label>
                        <input type="date" class="form-control checkout_date" placeholder="Check-out date">
                    </div>
                    </div>
                  </div>
                  <div class="col-md d-flex">
                    <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                      <div class="wrap">
                        <label for="#">Room  </label>
                        <div class="form-field">
                          <div class="select-wrap">
                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                            
                            <select name="" id="" class="form-control">
                            <option value="">Suite</option>  
                              <option value="">Family Room</option>
                              <option value="">Deluxe Room</option>
                              <option value="">Classic Room</option>
                              <option value="">Superior Room</option>
                              <option value="">Luxury Room</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md d-flex">
                    <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                      <div class="wrap">
                        <label for="#">Customer</label>
                        <div class="form-field">
                          <div class="select-wrap">
                            <div class="icon"><i class="icon ion-ios-arrow-down"></i></div>
                            <select name="" id="" class="form-control">
                              <option value="">1 Adult</option>
                              <option value="">2 Adult</option>
                              <option value="">3 Adult</option>
                              <option value="">4 Adult</option>
                              <option value="">5 Adult</option>
                              <option value="">6 Adult</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md d-flex">
                    <div class="form-group d-flex align-self-stretch">
                      <input type="submit" value="Search" class="btn btn-primary py-3 px-4 align-self-stretch">
                    </div>
                   
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
     
      <!-- /*end booking*/ -->




      <!-- start about -->
      <div class=" block lh-lg about p-3 mouvement" id="About">
      
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-lg-5">
              <div class="about_info ">
                <div class="section_title text-uppercase mb-20px mouvement ">
                  <h4>about us</h4>
                  <h3>
                    a luxuries hotel <br>
                    with best view
                  </h3>
                </div>
                <p class="mouvement" >
                  "Welcome to Deluxe Hotel 5 Star, where luxury meets the sea for an unforgettable experience. Indulge in our beachfront escape crafted for your comfort and enjoyment. Experience seaside elegance with pristine beaches and opulent amenities. Unwind as tranquil waves provide the perfect backdrop. Discover coastal luxury with breathtaking ocean views and unparalleled service"
                </p>
                <ul class=" about-icon d-flex   list-unstyled gap-0 mouvement">
                  <li>
                    <a class="d-" href="#"> <i class="fa-brands fa-facebook fa-lg facebook rounded-circle p-1"></i></a>
                  </li>
                  <li>
                      <a class="d-block " href="#"><i class="fa-brands fa-twitter fa-lg twitter rounded-circle p-1"></i></a>
                  </li>
                  <li>
                      <a class="d-block " href="#"> <i class="fa-brands fa-google fa-lg google rounded-circle p-1"></i> </a>
                  </li>
                  <li>
                      <a class="d-block " href="#"><i class="fa-brands fa-instagram fa-lg instagram rounded-circle p-1"></i> </a>
                  </li>
                </ul>
                
              </div>
            </div>
            <div class="col-xl-7 col-lg-7 ">
              <div class="about_foto d-flex">
                <div class="img-fluid about-img_1">
                  <img src="{{ asset('img/about_1.jpg') }}" alt="">
                </div>
                <div class="  img-fluid about-img_2">
                  <img src="
                  {{ asset('img/about_2.png') }}" alt="">
                </div>
              </div>
            </div>
           
          </div>
         
        </div>
      </div>
      <!-- end about -->
      <!-- START SERVICES  -->
      <section id="Services" class="services-section spad mouvement">
        <div class="container ">
            <div class="row  justify-content-center text-center">
                <div class="col-lg-12">
                    <div class=" text-uppercase text-center section-title mouvement">
                       
                        <h3>Discover Our Services</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center text-center ">
                
                <div class="col-lg-5 col-sm-6">
                    <div class="service-item mouvement">
                      <i class="flaticon-033-dinner"></i>
                        <h4>Fine Dining Delights</h4>
                        <p>Savour an epicurean journey that transcends flavours, where each dish narrates the restaurant's dedication to excellence in every bite.</p>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="service-item mouvement">
                      <i class="flaticon-026-bed"></i>
                        <h4>Comfortable Rooms</h4>
                        <p>Discover cozy spaces that ensure relaxation, each room reflecting the hotel's dedication to comfort and tranquility.</p>
                    </div>
                </div>
                
                <div class="col-lg-5 col-sm-6">
                    <div class="service-item mouvement">
                        <i class="flaticon-044-clock-1"></i>
                        <h4>Driver Services</h4>
                        <p>Enjoy hassle-free transportation arrangements tailored to you, each service embodying the hotel's dedication to convenience.</p>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="service-item mouvement">
                      <i class="flaticon-012-cocktail"></i>
                        <h4>Cofee & Beverages</h4>
                        <p>Indulge in refreshing beverages and a relaxing ambiance, where each sip embodies the hotel's commitment to excellence in every cup.</p>
                    </div>
                </div>
            </div>
            <div class="row  justify-content-center text-center mouvement">
              <div class="col-lg-12">
                  <div class="    p-3 text-center ">
                    <button class="  btn rounded-pill  buttons-effects from-left">
                      <span></span><a  class="  lien text-uppercase" href="/service"> see more</a></button>
                      
                  </div>
              </div>
          </div>
        </div>
    </section>
    <!-- END SERVICES  -->
      <!-- start gallery -->
 <div id="Gallery" class="gallery-lg">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
      </div>
      <div class="carousel-inner">
          <div class="container text-center">
              <h3 class="text-uppercase gallery-titre p-2 mouvement">Our gallery</h3>
              <P class="gallery-parag mouvement">Experience the essence of our hotel captured in every image, where seamless transportation arrangements await, perfectly tailored to your needs, reflecting our unwavering dedication to convenience.</P>
              <div class="carousel-item active">
                  <img src="{{ asset('img/background2.jpg') }}" alt="...">
              </div>
              <div class="carousel-item">
                  <img src="{{ asset('img/gallery2.jpg') }}" alt="...">
              </div>
              <div class="carousel-item">
                  <img src="{{ asset('img/gallery7.jpg') }}" alt="...">
              </div>
              <div class="carousel-item">
                  <img src="{{ asset('img/gallery4.jpg') }}" alt="...">
              </div>
              <div class="carousel-item">
                  <img src="{{ asset('img/background.jpg') }}" alt="...">
              </div>
              <div class="carousel-item">
                  <img src="{{ asset('img/gallery6.jpg') }}" alt="...">
              </div>
          </div>
      </div>
     
  </div>
</div>
      <!-- end gallery -->
      <!-- start rooms -->
   
<!-- Swiper -->

 <div class="block rooms  text-center  " id="Rooms">
  <div class="container pb-3">
  <h3 class="text-uppercase rooms-titre mouvement">Our Rooms</h3>

  <h6 class="pb-3 lh-lg mouvement " >
    "Discover the comfort and elegance of our rooms." <br>
    Welcome to our hotel, where each room is designed to offer our guests an unforgettable experience.  <h6>
  <div class="row ">
    <div class="col-md-6  sidebar mouvement">
      <!-- Formulaire de recherche -->
      <div class="sidebar-wrap  ">
        <h3 class="heading mb-4">Advanced Search</h3>
        <form action="#">
          <div class="fields">
            <div class="form-group">
             
          <input type="date" id="checkin_date" class="form-control checkin_date" placeholder="Check In Date" >
            </div>
            
            <div class="form-group">
     
              <input type="date" id="checkin_date" class="form-control checkout_date"  placeholder="Check Out Date">
            </div>
            <div class="form-group">
              <div class="select-wrap one-third">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <select name="" id="" class="form-control">
                  <option value="">Room Type</option>
                  <option value="">Single Rooms</option>
                  <option value="">Suite Rooms</option>
                  <option value="">Family Rooms</option>
                  <option value="">Superior Room</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="select-wrap one-third">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <select name="" id="" class="form-control">
                  <option value="">0 Adult</option>
                  <option value="">1 Adult</option>
                  <option value="">2 Adult</option>
                  <option value="">3 Adult</option>
                  <option value="">4 Adult</option>
                  <option value="">5 Adult</option>
                  <option value="">6 Adult</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="select-wrap one-third">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <select name="" id="" class="form-control">
                  <option value="">0 Children</option>
                  <option value="">1 Children</option>
                  <option value="">2 Children</option>
                  <option value="">3 Children</option>
                  <option value="">4 Children</option>
                  <option value="">5 Children</option>
                  <option value="">6 Children</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="range-slider">
                <span>
                  <input type="number" value="25000" min="0" max="120000"/> -
                  <input type="number" value="50000" min="0" max="120000"/>
                </span>
                <input value="1000" min="0" max="120000" step="500" type="range"/>
               
                </svg>
              </div>
            </div>
            <div class="form-group">
              <button class=" btn rounded-pill buttons-effects from-left btn">
                <span></span>
               <a href="">Search</a>
            </button>
            </div>
          </div>
        </form>
      </div>
      
      <!-- Fin du formulaire de recherche -->
    </div>
    <div class="col-md-6 mouvement ">
<div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide ">
      <div class="swiper-content">
        <div class="hero single-rooms ">
          <div class="cercle">
            <span class="prix">
              130$ 
              </span>
            <span class="night">
              /NIGHT
              </span>
          </div>
          <div class="photo-btn">
            <div class="text">Single Rooms
            </div>
            <div class="gallery">
              <div class="row top">
              <div class="image one">
              </div>
              <div class="image two">
              </div>
             
              </div>
          
            </div>
            </div>
        </div>
        <div class="copy ">
          <p><span >Bed:</span> 1 bed</p>
          <p><span >Capacity:</span> 1 adult</p>
      
          <p>

            Indulge in our snug single rooms by the sea for a peaceful escape. Enjoy stunning ocean views and modern comforts in a serene setting. Perfect for solo travelers seeking tranquility. Book your seaside retreat today.

          </p>
          <div class="footer">
            <button class=" btn rounded-pill buttons-effects from-left">
              <span></span>
             <a href="">BOOK NOW</a>
          </button>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-slide ">
      <div class="swiper-content">
        <div class="hero family-rooms">
          <div class="cercle">
            <span class="prix">
              120$
              </span>
            <span class="night">
               /NIGHT
              </span>
          </div>
          <div class="photo-btn">
            <div class="text">Suite Rooms
            </div>
            <div class="gallery">
              <div class="row top">
              <div class="image one">
              </div>
              <div class="image two">
              </div>
              
              </div>
                
            </div>
            </div>
        </div>
        <div class="copy ">
          <p><span >Bed:</span> Double bed</p>
          <p><span >Capacity:</span> 2 adults</p>
      
          <p>

            Discover luxurious ocean-view suite rooms for a serene retreat. Enjoy spacious, elegantly furnished accommodations with breathtaking views. Elevate your stay with personalized service and unparalleled tranquility. Book now for an unforgettable experience.

          </p>
          <div class="footer">
            <button class=" btn rounded-pill buttons-effects from-left">
              <span></span>
             <a href="">BOOK NOW</a>
          </button>
          </div>
        </div>

      </div>
    </div>
    <div class="swiper-slide ">
      <div class="swiper-content">
        <div class="hero suite-rooms">
          <div class="cercle">
            <span class="prix">
               20.00$
              </span>
            <span class="night">
               /NIGHT
              </span>
          </div>
          <div class="photo-btn">
            <div class="text">Family Rooms
            </div>
            <div class="gallery">
              <div class="row top">
              <div class="image one">
              </div>
              <div class="image two">
              </div>
              </div>
               
            </div>
            </div>
        </div>
        <div class="copy ">
          <p><span >Bed:</span> Double bed</p>
          <p><span >Capacity:</span> 2 adults</p>
      
          <p>

            Experience the perfect family getaway in our spacious and comfortable family rooms overlooking the sea. Designed with your family's comfort in mind, our rooms offer ample space and modern amenities for an unforgettable stay. Book now to create lasting memories by the sea.

          </p>
          <div class="footer">
            <button class=" btn rounded-pill buttons-effects from-left">
              <span></span>
             <a href="">BOOK NOW</a>
          </button>
          </div>
        </div>

      </div>
    </div>
    <div class="swiper-slide ">
      <div class="swiper-content">
        <div class="hero seperior-rooms">
          <div class="cercle">
            <span class="prix">
              500$ 
              </span>
            <span class="night">
              /NIGHT
              </span>
          </div>
          <div class="photo-btn">
            <div class="text">Seperior Rooms
            </div>
            <div class="gallery">
              <div class="row top">
              <div class="image one">
              </div>
              <div class="image two">
              </div>
             
              </div>
            </div>
            </div>
        </div>
        <div class="copy ">
          <p><span >Bed:</span> King Beds</p>
          <p><span >Capacity:</span> 2 adults</p>
      
          <p>

            Indulge in luxury and comfort with our superior rooms, boasting stunning views of the sea. These elegantly designed rooms offer a refined ambiance and upgraded amenities, ensuring a truly relaxing stay. Treat yourself to a superior experience and book your seaside retreat now.

          </p>
          <div class="footer">
            <button class=" btn rounded-pill buttons-effects from-left">
              <span></span>
             <a href="">BOOK NOW</a>
          </button>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  
  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
   <!-- Flèche de navigation précédente pour les écrans small -->
  <div class="swiper-button-prev"></div>
  <!-- Flèche de navigation suivante pour les écrans small -->
  <div class="swiper-button-next"></div>
</div>
</div>
</div>
</div>
</div>

<!-- end rooms -->


<!-- start scroll to top -->
<a class="scroll-to-top" href="#">
  <i class="fa-solid fa-chevron-up"></i>
 </a>
 <!-- end scroll to top -->
<!-- section before footer -->
 <section class="before-footer bg-image overlay ">
  <div class="container" >
    <div class="row align-items-center">
      <div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" >
        <h2 class="text-white font-weight-bold mouvement">A Best Place To Stay. Reserve Now!</h2>
      </div>
      <div class="col-12 col-md-6 text-center text-md-right">
        <button  class="btn  rounded-pill   text-white mouvement buttons-effects from-left">
          <span></span> <a href="">Reserve Now</a></button>
      </div>
    </div>
  </div>
</section>


<!-- end section before footer  -->
    <!-- Footer Section -->
    <footer class=" block footer-section bg-color ">
      <div class="container">
          <div class="footer-text">
              <div class="row ">
                  <div class="col-lg-4">
                      <div class="ft-about">
                        <div class="logo">
                          <a class="navbar-brand " href="#">Hotel Five Star</a>
                          <i class="fa-solid fa-star fa-flip fa-lg " style="color: #FFD43B;"></i>
                        </div>
                          <p>"Embark on your next adventure with confidence, knowing that hotel five star is here to make your stay unforgettable."</p>
                          <div class="fa-social mouvement">
                              <a href="#"><i class="fa-brands fa-facebook"></i></a>
                              <a href="#"><i class="fa-brands fa-square-twitter"></i></a>

                              <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
                              <a href="#"><i class="fa-brands fa-google"></i></a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 offset-lg-1 ">
                      <div class="ft-contact">
                          <h6>Contact</h6>
                          <ul>
                              <li>+212562518231</li>
                              <li>Deluxe_Hotel@gmail.com</li>
                              <li>115 Nort 30th Street, Suite 721 Morocco NY 2024</li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-3 offset-lg-1">
                      <div class="ft-newslatter">
                       
                          <h6> Newsletter</h6>
                          <p>Get the latest updates and offers.</p>
                          <form action="#" class="fn-form">
                              <input type="mail" placeholder="Email">
                              <button type="submit"><i class="fa-solid fa-check"></i></button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="copyright-option ">
          <div class="container">
              <div class="row ">
                  <div class="col-lg-7">
                      <ul>
                          <li><a href="#">Contact</a></li>
                          <li><a href="#">Terms of use</a></li>
                          <li><a href="#">Privacy</a></li>
                          <li><a href="#">Environmental Policy</a></li>
                      </ul>
                  </div>
                  
          </div>
      </div>
  </footer>
  <!-- Footer Section End -->

 
      
     
      

  


  
        
         
        
    <script src="js/bootstrap.bundle.min.js" ></script>
    <script src="js/all.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    
</body>
</html>