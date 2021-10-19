<?php
$imgpath1 = "assets/images/logo-image.jpg";
$imgpath2 = "assets/images/aerobic-girls.jpg";
$imgpath3 = "assets/images/mountain-reflection.jpg";
$imgpath4 = "assets/images/girl-nature.jpg";
$imgpath5 = "assets/images/woman-beach.jpg";
$imgpath6 = "assets/images/woman-chair-sunshine.jpg";
$imgpath7 = "assets/images/woman-pretty.jpg";
$imgpath8 = "assets/images/escalator-blue.jpg";
$imgpath9 = "assets/images/woman-feeling.jpg";
$imgpath10 = "assets/images/woman-bikini.jpg";
$vararray = ["Intro", "Features", "Gallery", "Contact"];
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Blugoon HTML Bootstrap 4 Template</title>
    <meta name="description" content="" />
    <meta name="author" content="Tooplate" />
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Additional CSS Files -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/tooplate-style.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/lightbox.css" />
  </head>
<!--
Tooplate 2116 Blugoon
https://www.tooplate.com/view/2116-blugoon
-->
  <body>
    <div id="page-wraper">
      <!-- Sidebar Menu -->
      <div class="responsive-nav">
        <i class="fa fa-bars" id="menu-toggle"></i>
        <div id="menu" class="menu">
          <i class="fa fa-times" id="menu-close"></i>
          <div class="container">
            <div class="image">
              <a href="#"><img src="<?php echo $imgpath1 ?>" alt="Blugoon by Tooplate" /></a>
            </div>
            <div class="author-content">
              <h4>Blugoon</h4>
              <span>Free Bootstrap Theme</span>
            </div>
            <nav class="main-nav" role="navigation">
              <ul class="main-menu">              
                <li><a href="#section1"><?php echo $vararray[0]; ?></a></li>
                <li><a href="#section2"><?php echo $vararray[1]; ?></a></li>
                <li><a href="#section3"><?php echo $vararray[2]; ?></a></li>
                <li><a href="#section4"><?php echo $vararray[3]; ?></a></li>
              </ul>
            </nav>
            <div class="social-network">
              <ul class="soial-icons">
                <li>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-dribbble"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-rss"></i></a>
                </li>
              </ul>
            </div>
            <div class="copyright-text">
              <p>Copyright 2020 Blugoon<br>
              Design: Tooplate</p>
            </div>
          </div>
        </div>
      </div>

      <section class="section about-me" data-section="section1">
        <div class="container">
        <div class="top-header">
        	<img src="<?php echo $imgpath2 ?>" alt="aerobic girls" />
        </div>
          <div class="section-heading">
          
            <h2>Introducing Blugoon</h2>
            <div class="line-dec"></div>
            <span>Blugoon is free HTML template for everyone. This is a Bootstrap v4.3.1 layout which you can fully customize for your websites. Please tell your friends about Tooplate. Thank you.</span>
          </div>
          <div class="right-image-post">
            <div class="row">
 
              <div class="col-md-8">
                <div class="left-text">
                  <h4>Modern Web Design</h4>
                  <p>You are allowed to use this template for commercial or personal websites. You are NOT allowed to redistribute this on template collection website. You can feature this template on your blog post.</p>
                  <p>All photos in this template are from <a rel="nofollow" href="https://www.pexels.com">Pexels</a> website. Blugoon HTML Template is provided by Tooplate. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                  <div class="white-button">
                    <a href="#">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="right-image">
                  <img src="<?php echo $imgpath3 ?>" alt="Mountain Reflection" />
                </div>
              </div>
              
            </div>
          </div>
          <div class="left-image-post">
            <div class="row">
            
              <div class="col-md-4">
                <div class="left-image">
                  <img src="<?php echo $imgpath4 ?>" alt="Nature Girl" />
                </div>
              </div>
              
              <div class="col-md-8">
                <div class="right-text">
                  <h4>Best Template for you!</h4>
                  <p>Quisque feugiat nisl at lacus condimentum, eu suscipit odio fringilla. Mauris eu est vitae erat condimentum pellentesque. Fusce vehicula nunc at augue sagittis tristique.</p>
                  <p>Ut imperdiet massa at enim tempus volutpat. Nullam gravida augue quis facilisis commodo. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                  <div class="white-button">
                    <a href="#">Read More</a>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </section>

      <section class="section my-services" data-section="section2">
        <div class="container">
          <div class="section-heading">
            <h2>Greatest Features</h2>
            <div class="line-dec"></div>
            <span>Praesent posuere fringilla elit, non maximus tellus posuere nec. Nunc eu sapien nec est elementum sodales.</span>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="service-item">
                <i class="fa fa-area-chart"></i>
                <h4>Top Performance</h4>
                <p>Donec sit amet tempor quam. Maecenas nec aliquam leo, sed tincidunt urna.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <i class="fa fa-check-square-o"></i>
                <h4>Trusted Service</h4>
                <p>Etiam at porta nulla, et euismod enim. Nullam semper ipsum et dui scelerisque.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <i class="fa fa-question-circle"></i>
                <h4>Need Help?</h4>
                <p>Phasellus orci leo, elementum ac risus id, euismod porta lorem. Quisque feugiat.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <i class="fa fa-support"></i>
                <h4>Quick Support</h4>
                <p>Mauris eu est vitae erat condimentum pellentesque. Fusce vehicula nunc.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section my-work" data-section="section3">
        <div class="container">
          <div class="section-heading">
            <h2>Gallery</h2>
            <div class="line-dec"></div>
            <span>Donec sit amet enim tempor nisl fermentum aliquam. In consectetur sapien eu nisi venenatis lobortis. Sed ullamcorper tristique elit nec facilisis.</span>
          </div>
          <div class="row">
            <div class="isotope-wrapper">
              <form class="isotope-toolbar">
                <label><input type="radio" data-type="*" checked="" name="isotope-filter" />
                  <span>all</span></label>
                <label><input type="radio" data-type="pretty" name="isotope-filter" />
                  <span>pretty</span></label>
                <label><input type="radio" data-type="sexy" name="isotope-filter" />
                  <span>sexy</span></label>
                <label><input type="radio" data-type="beach" name="isotope-filter" />
                  <span>beach</span></label
                >
              </form>
              <div class="isotope-box">
                <div class="isotope-item" data-type="beach">
                  <figure class="snip1321">
                    <img src="<?php echo $imgpath5 ?>" alt="woman at the beach" />
                    <figcaption>
                      <a href="assets/images/woman-beach.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"><i class="fa fa-search"></i></a>
                      <h4>Girl One</h4>
                      <span>woman at the beach</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="sexy">
                  <figure class="snip1321">
                    <img src="<?php echo $imgpath6 ?>" alt="sq-sample26" />
                    <figcaption>
                      <a href="assets/images/woman-chair-sunshine.jpg"
                        data-lightbox="image-1"
                        data-title="Sunshine Woman"><i class="fa fa-search"></i></a>
                      <h4>Sexy Lady</h4>
                      <span>there you go sexy girl</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="pretty">
                  <figure class="snip1321">
                    <img src="<?php echo $imgpath7 ?>" alt="Pretty Girl" />
                    <figcaption>
                      <a href="assets/images/woman-pretty.jpg"
                        data-lightbox="image-1"
                        data-title="Pretty Girl"><i class="fa fa-search"></i></a>
                      <h4>Pretty Girl</h4>
                      <span>red flowers white girl</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="pretty">
                  <figure class="snip1321">
                    <img src="<?php echo $imgpath8 ?>" alt="Escalator Blue" />
                    <figcaption>
                      <a href="assets/images/escalator-blue.jpg"
                        data-lightbox="image-1"
                        data-title="Escalator Blue"><i class="fa fa-search"></i></a>
                      <h4>Escalator Up</h4>
                      <span>Blue architecture building</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="beach">
                  <figure class="snip1321">
                    <img src="<?php echo $imgpath9 ?>" alt="woman feeling" />
                    <figcaption>
                      <a href="assets/images/woman-feeling.jpg"
                        data-lightbox="image-1"
                        data-title="Her Feeling"><i class="fa fa-search"></i></a>
                      <h4>Her Feeling</h4>
                      <span>Ut sollicitudin risus</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="sexy">
                  <figure class="snip1321">
                    <img src="<?php echo $imgpath10 ?>" alt="Bikini Girl" />
                    <figcaption>
                      <a href="assets/images/woman-bikini.jpg" 
                      data-lightbox="image-1" data-title="Sexy Bikini">
                      <i class="fa fa-search"></i></a>
                      <h4>Bikini Girl</h4>
                      <span>Donec eget massa ante</span>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php 
        include("contact.php");
      ?>


    </div>
    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
      //according to loftblog tut
      $(".main-menu li:first").addClass("active");

      var showSection = function showSection(section, isAnimate) {
        var direction = section.replace(/#/, ""),
          reqSection = $(".section").filter(
            '[data-section="' + direction + '"]'
          ),
          reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
          $("body, html").animate(
            {
              scrollTop: reqSectionPos
            },
            800
          );
        } else {
          $("body, html").scrollTop(reqSectionPos);
        }
      };

      var checkSection = function checkSection() {
        $(".section").each(function() {
          var $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
          if (topEdge < wScroll && bottomEdge > wScroll) {
            var currentId = $this.data("section"),
              reqLink = $("a").filter("[href*=\\#" + currentId + "]");
            reqLink
              .closest("li")
              .addClass("active")
              .siblings()
              .removeClass("active");
          }
        });
      };

      $(".main-menu").on("click", "a", function(e) {
        e.preventDefault();
        showSection($(this).attr("href"), true);
      });

      $(window).scroll(function() {
        checkSection();
      });
    </script>
  </body>
</html>