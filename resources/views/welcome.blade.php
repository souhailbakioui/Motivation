  @include('header')
  <!-- /.container-fluid -->

  <div class="main app form" id="main"><!-- Main Section-->
    <div class="hero-section">
      <div class="container nopadding">
        <div class="col-md-12">
          <div class="hero-content text-center">
            <h1 class="wow fadeInUp" id="res0" data-wow-delay="0.1s"></h1>
            <p class="wow fadeInUp" id="auter0" data-wow-delay="0.2s">  </p>
            <a href="https://www.instagram.com/motivationwithus1" class="btn btn-action wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Get More Quote</a> </div>
        </div>
      </div>
    </div>
    <!-- Classes Section -->
    <div class="pitch text-center" id="why">
      <div class="container">
        <div class="pitch-intro">
          <h1 class="wow fadeInDown"  data-wow-delay="0.2s">Why Motivation is Important</h1>
          <p class="wow fadeInDown"  data-wow-delay="0.2s">If you want to achieve greatness, you need to stop asking for permission. This is why motivation is important in life because it stops asking questions and aligns you to work towards your goals.

Goals are the stepping stones toward your dreams so in order to achieve them, you need motivation to keep you chugging along towards them.</p>
        </div>
        
        <div class="col-md-12">
        @foreach ($users as $user)
   

          <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
            <div class="pitch-icon"> <i class="ion-ios-checkmark-outline"></i> </div>
            <div class="pitch-content">
              <h1>{{$user->title}}</h1>
              <p> {{$user->why}} </p>
            </div>
          </div>
 @endforeach
        </div>
      </div>
    </div>
    <!-- Features Section -->
 
    <!-- Split Feature1 Section -->
    <div class="split-features" id="q4s" >
      <div class="col-md-6 nopadding">
        <div class="split-image"> <img class="img-responsive wow fadeIn img3" src="" alt="Image" /> </div>
      </div>
      <div class="col-md-6 nopadding">
        <div class="split-content">
          <h1 class="wow fadeInUp" id='res3'><br>
            </h1>
          <p class="wow fadeInUp" id="auter3"> </p>
       
        </div>
      </div>
    </div>
     <!-- Split Feature2 Section -->
     
    <div class="split-features2">
      <div class="col-md-6 nopadding">
        <div class="split-content second">
          <h1 class="wow fadeInUp" id="res1"></h1>
          <p class="wow fadeInUp" id="auter1"> </p>
       
        </div>
      </div>
      <div class="col-md-6 nopadding">
        <div class="split-image"> <img class="img-responsive wow fadeIn img1" src="" alt="Image" /> </div>
      </div>
    </div>
     <!-- Split Feature3 Section -->
    <div class="split-features">
      <div class="col-md-6 nopadding">
        <div class="split-image"> <img class="img-responsive wow fadeIn img2" src="" alt="Image" /> </div>
      </div>
      <div class="col-md-6 nopadding">
        <div class="split-content">
          <h1 class="wow fadeInUp" id='res2'><br>
            </h1>
          <p class="wow fadeInUp" id="auter2"></p>
        
        </div>
      </div>
    </div>
     <!-- Bold call to action Section -->

    
     <!-- Client Section -->
    <div class="review-section" id="review">
      <div class="container">
        <div class="col-md-10 col-md-offset-1">
          <div class="reviews owl-carousel owl-theme">

@foreach($long_stories as $ls)
            <div class="review-single">
          
              <div class="review-text wow fadeInUp" data-wow-delay="0.2s">
              <h2 style="padding: 9px;    font-size: xxx-large;">{{$ls->title}}</h2>
                <p>{{$ls->short_text}}</p>
                <a href="#" class="btn btn-action wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;" bis_skin_checked="1">Continue Reading</a>
               
            
              </div>
            </div>
@endforeach
          </div>
        </div>
      </div>
    </div>
    <!-- Package Section -->
   
    
    <!-- Subscribe Form -->
    <div class="cta-sub no-color">
      <div class="container">
        <div class="cta-inner">
          <h1 class="wow fadeInUp" data-wow-delay="0s">Sign Up to Our Newsletter and get More Motivation</h1>
          <p class="wow fadeInUp" data-wow-delay="0.2s"> Enter your email address for more Motivation <br class="hidden-xs">
            or sell your email address. </p>
          <div class="form wow fadeInUp" data-wow-delay="0.3s">
            <form class="subscribe-form center-form wow zoomIn" action="php/subscribe.php" method="post" name="subscribeform" id="subscribeform">
              <input class="mail" type="email" name="email" placeholder="Join the wait list" autocomplete="off" id="subemail">
              <input class="submit-button" type="submit" value="Subscribe" name="send" id="subsubmit">
            </form>
            <!-- subscribe message -->
            <div id="mesaj"></div>
            <!-- subscribe message --> 
          </div>
        </div>
      </div>
    </div>
    
    <!-- Footer Section -->
    <div class="footer" id="contact">
      <div class="container">
        <div class="col-md-6 contact">
          <h1>About MotivationWithUs</h1>
          <p>MotivationWithUs is website makes  you to see Goals are the stepping stones toward your dreams so in order to achieve them, you need motivation to keep you chugging along towards them. </p>
        </div>
        <div class="col-md-3 contact footer-menu">
          <h1>Social</h1>
          <ul style="
    display: inline-flex;
">
            <li><a href="https://www.instagram.com/motivationwithus1"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://github.com/souhailbakioui"><i class="fab fa-github"></i></a></li>
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            
           
          </ul>
        </div>
        <div class="col-md-3 contact">
          <h1>Contact Us</h1>
          <p> Contact our 24/7 customer support if you have any questions. We'll help you out. </p>
          <a href="mailto:Bakiouisohail@gmail.com">Bakiouisohail@gmail.com</a> </div>
      </div>
    </div>
  </div>
  
  <!-- Scroll To Top --> 
  
<a id="back-top" class="back-to-top page-scroll" href="#main"> <i class="ion-ios-arrow-thin-up"></i> </a> 
<a id="insta" class="insta" href="https://www.instagram.com/motivationwithus1"> <i class="fab fa-instagram"></i> </a> 
  <!-- Scroll To Top Ends--> 
  
</div>
<!-- Main Section -->
</div>
<!-- Wrapper--> 

<!-- Jquery and Js Plugins --> 
<script type="text/javascript" src="js/jquery-2.1.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/plugins.js"></script> 
<script type="text/javascript" src="js/menu.js"></script> 
<script type="text/javascript" src="js/custom.js"></script> 
<script src="js/jquery.subscribe.js"></script>
<script src="js/main.js"></script>
<script>



  let if_=($('.hero-section').css('background-image').includes('header-bg.jpg'));
  //console.log("BEFOR");
  $('.hero-section').css('background-image','url(../images/header-bg.jpg)');
  //console.log("After");
  getMaqolat();
tsts=setInterval(function(){ ;
  $('.hero-section').css('background-image','url(../images/header-bg.jpg)');
//console.log(if_);
  clearInterval(tsts);

}, 1000);
setInterval(getMaqolat, 7000);


</script>
</body>
</html>
