<div class="footer">

      <div class="row">

        <div class="columns small-12">
          <p>SoutHern Design is a windows and doors contractor based in Torquay, Paignton, Brixham, Newton Abbot, Exeter and the surrounding areas. Our services are also available across the UK.</p>
        </div>

        <div class="columns small-12 medium-3 large-2">

          <div class="sub-title">Services</div>

          <ul>
            <li><a href="aluminium">Aluminium</a></li>
            <li><a href="steel">Steel</a></li>
            <li><a href="upvc">UPVC</a></li>
            <li><a href="hardwood">Hardwood</a></li>
            <li><a href="composite">Composite</a></li>
          </ul>

        </div>

        <div class="columns small-12 medium-5 large-3">

          <div class="sub-title">Contact</div>

          <ul>
            <li><a href="tel:+447469886347">Tel: 07469 886347</a></li>
            <li><a href="mailto:southerndesignwindows@mail.com">E-mail: southerndesignwindows@mail.com</a></li>
            <li><a href="https://www.facebook.com/southerndesignwindows/">Facebook</a></li>
          </ul>

        </div>

        <div class="columns small-12 medium-4 large-3">
          <div class="sub-title">Company</div>

          <ul>
            <li><a href="reviews">Reviews</a></li>
            <li><a href="about">About</a></li>
          </ul>

          <div class="logo">
            <a href="index"><span>S</span>OUT<span>H</span>ERN <span>D</span>ESIGN</a>
          </div>
          <div class="signoff">© SoutHern Design 2017</div>
        </div>

        <div class="columns small-12 large-4">
          <div class="fb-page"
            data-href="https://www.facebook.com/southerndesignwindows/"
            data-width="380"
            data-adapt-container-width="true"
            data-hide-cover="false"
            data-show-facepile="false"
            data-show-posts="false">
          </div>
          <a href="http://andrewgormley.co.uk"><div class="madeby">Created by <span>Andrew Gormley</span></div></a>
        </div>

      </div>

    </div>

    </div>


    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    <script src="js/owl.carousel.js"></script>

    <script>

      $(document).ready(function(){

        function animateDelay(id,delay,animation){
          setInterval(function(){
            $('#'+id).addClass('animated').addClass(animation);
          }, delay);
        }

        animateDelay('ctatitle', 200, 'fadeInUp');
        animateDelay('ctacopy', 450, 'fadeInUp');
        animateDelay('ctabutton', 700, 'fadeInUp');

      });

      $(document).ready(function() {

        $("#owl-demo").owlCarousel({

            navigation : true, // Show next and prev buttons
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true,
            autoPlay : 4500

            // "singleItem:true" is a shortcut for:
            // items : 1,
            // itemsDesktop : false,
            // itemsDesktopSmall : false,
            // itemsTablet: false,
            // itemsMobile : false

        });

      });

    </script>

  </body>
</html>
