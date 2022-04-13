<!-- START FOOTER SECTION -->
<footer>
    <div class="footer-area footer-padding blocks-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!-- <img data-class="LazyLoad" src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src="images/blog-3.jpg" width="300" height="300" alt="Image"> -->
                <h2 class="footer-head">
                    <a href="#" aria-label="Home Page" class="orange-color">Tap Scalers</a>
                </h2>
                <p class="footer-text"><i class="fas fa-map-marker-alt mr-2 orange-color"></i> <span class="d-inline-flex">50 S Main St #200,<br> Naperville,IL 60540,<br> USA</span></p>
                <p class="footer-text"><a href="tel: 224-676-0496"><i class="fas fa-phone mr-2 orange-color"></i> 224-676-0496</a></p>
                <p class="footer-text"><a href="mailto: support@tapscalers.com"><i class="fas fa-envelope mr-2 orange-color"></i> support@tapscalers.com</a></p>
                
            </div>
            <div class="col-lg-4 col-md-6">
                <p class="footer-head">Useful Links</p>
                 <ul class="links">
                    <li><a href="#" aria-label="Link">Submit Projects</a></li>
                    <li><a href="#" aria-label="Link">Find Projects</a></li>
                    <li><a href="#" aria-label="Link">Find Experts</a></li>
                    <li><a href="#" aria-label="Link">Success Stories</a></li>
                    <li><a href="#" aria-label="Link">How it Works</a></li>
                    <li><a href="#" aria-label="Link">Blog</a></li>
                    <li><a href="#" aria-label="Link">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <p class="footer-head">Need Help</p>
                <ul class="links-block">
                    <li><a href="#" aria-label="Link">Upload a Project</a></li>
                    <li><a href="#" aria-label="Link">Request a Quote</a></li>
                    <li><a href="#" aria-label="Link">Request a Consultation</a></li>
                </ul>
              </div>
        </div>
</div>
    </div>
    <div class="copy-rights">
        <div class="container">
           <!--  <div class="row">
                <div class="col-lg-8"> -->
                    <p class="cr-text text-center">© Copyright <?php $current_year = date("Y");
echo " ".$current_year; ?>, Custom Website Designed and Developed with ❤️ by <a href="https://nectarspot.com" aria-label="Link" target="_blank" rel="noopener" class="brown-color">NectarSpot Inc.</a></p>
                <!--</div>
                 <div class="col-lg-4 ">
                    <ul class="ftr-nav">
                        <li><a href="#" aria-label="Link">Our Chefs</a></li>
                        <li><a href="#" aria-label="Link">Menu</a></li>
                        <li><a href="#" aria-label="Link">Reservation</a></li>
                        <li><a href="#" aria-label="Link">Contact</a></li>
                    </ul>
                </div>
            </div> -->
        </div>
    </div>
</footer>


<!-- END FOOTER SECTION -->


<!-- START SIDEBAR -->

   <section class="sticky-bar">
    <div class="side-social">
<input type="checkbox" id="toggle-input">
        <label class="toggle-label" for="toggle-input"> </label>   
        <ul class="toggle-content">
            
            <li>
                <a aria-label="Call Us" href="tel:224-676-0496" class="tool side-icon mt3px call" data-tip="Phone"><i class="fas fa-phone"></i></a>
            </li>
            <li>
                <a aria-label="Text" href="menu.php" class="tool side-icon" data-tip="Menu"><i class="fas fa-sms"></i></a>
            </li>
            <li>
                <a aria-label="Email" href="mailto:support@tapscalers.com" class="tool side-icon" data-tip="Email"><i class="fas fa-envelope"></i></a>
            </li>
            
            <li>
                <a aria-label="Location" href="contact-us.php" class="tool side-icon" data-tip="Contact"><i class="fas fa-map-marker-alt"></i></a>
            </li>
            
            <li>
                <a data-toggle="modal" href="#reservation-form-modal" class="tool side-icon" data-tip="Book A Table"><i class="fas fa-star"></i></a>
            </li>
        </ul>
</div>
</section>

<!-- END SIDEBAR -->

<!-- START SCROLL TO TOP -->

<?php include 'includes/snippets/scroll-to-top.php' ?>

<!-- END SCROLL TO TOP -->

   <script>
       var lazyload_inner_js = [];
        var lazy_load_js = [{"src":"includes/js/basics.js"}];
        var inner_js_counter = -1;
        var s = {};
        var wnw_first_js = false;
        var wnw_int_first_js = false;
        var wnw_first_inner_js = false;
        setTimeout(function() {
            load_extJS();
        }, 7000);
        setInterval(function() {
            lazyloadimages(0);
        }, 200);
        window.addEventListener("scroll", function(event) {
            load_extJS();
            var top = this.scrollY;
            lazyloadimages(top);

        });


        window.addEventListener("mousemove", function() {
            load_extJS();
        });

        window.addEventListener("touchstart", function() {
            console.log('touchstart');
            load_extJS();
        });

        
        function lazyloadimages(top) {

            var imgs = document.getElementsByTagName("img");

            var ads = document.getElementsByClassName("lazyload-ads");

            // var sources = document.getElementsByTagName("video");

            var bodyRect = document.body.getBoundingClientRect();

            var window_height = window.innerHeight;

            var win_width = screen.availWidth;

            lazyload_img(imgs, bodyRect, window_height, win_width);

            // lazyload_video(sources, top, window_height, win_width);

        }

        function lazyload_img(imgs, bodyRect, window_height, win_width) {

            for (i = 0; i < imgs.length; i++) {



                if (imgs[i].getAttribute("data-class") == "LazyLoad") {

                    var elemRect = imgs[i].getBoundingClientRect(),

                    offset = elemRect.top - bodyRect.top;

                    if (elemRect.top != 0 && elemRect.top - window_height < 100) {

                        /*console.log(imgs[i].getAttribute("data-src")+" -- "+elemRect.top+" -- "+window_height);*/

                        var src = imgs[i].getAttribute("data-src") ? imgs[i].getAttribute("data-src") : imgs[i].src;

                        var srcset = imgs[i].getAttribute("data-srcset") ? imgs[i].getAttribute("data-srcset") : "";



                        imgs[i].src = src;

                        if (imgs[i].srcset != null & imgs[i].srcset != "") {

                            imgs[i].srcset = srcset;

                        }

                        delete imgs[i].dataset.class;

                        imgs[i].setAttribute("data-done", "Loaded");

                    }

                }

            }

        }

        function load_innerJS() {
            if (wnw_first_inner_js == false) {

                for (var key in lazyload_inner_js) {

                    if (lazyload_inner_js[key] != "") {

                        var s = document.createElement("script");

                        s.innerHTML = lazyload_inner_js[key];

                        document.getElementsByTagName("body")[0].appendChild(s);

                    }

                }

                wnw_first_inner_js = true;

            }

        }

 

        function load_extJS() {
            if (wnw_first_js) {
                return;
            }
            /*console.log(inner_js_counter,lazy_load_js.length,"js loop");*/
            if (inner_js_counter + 1 < lazy_load_js.length) {
                inner_js_counter++;
                var script = lazy_load_js[inner_js_counter];
                // console.log(script,script["src"],"inner js");
                if (script["src"] !== undefined) {
                    s[inner_js_counter] = document.createElement("script");
                    s[inner_js_counter]["type"] = "text/javascript";
                    for (var key in script) {
                        s[inner_js_counter].setAttribute(key, script[key]);
                    }
                    s[inner_js_counter].onload = function() {
                        load_extJS();
                    };
                    /*console.log(s[inner_js_counter]);*/
                    document.getElementsByTagName("head")[0].appendChild(s[inner_js_counter]);

                } else {
                    load_extJS();
                }
            } else {
                /*console.log("after ext js",inner_js_counter);*/
                wnw_first_js = true;
                setTimeout(function() {
                    load_innerJS();
                }, 7000);

            }

        }
      
    </script>