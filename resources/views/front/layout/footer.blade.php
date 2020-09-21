<div class="on-load text-center">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<a id="scrollTop"><i class="fas fa-chevron-up fa-2x"></i></a>
<script src="{{asset('assests/front/js/particles.min.js')}}"></script>
<script>
    /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
    particlesJS.load('particles-js', '{{asset('assests/front/js/particles.json')}}', function() {
        console.log('callback - particles.js config loaded');
    });
</script>
<footer class="text-center">
    <div class="container">
        <div class="row">
                <div class="col-md-4">
                    <div class="box-tob">
                        <img class="footer-logo" src="{{asset('assests/front/images/logo2.png')}}">
                        <p>
                            ديفيست هنا لإدخالك في اللعبة ولتغيير جميع القواعد وتحويل رؤيتك إلى حقيقة، أيًا كان ما تحتاج إليه لتحويل عملك أو فكرتك إلى شيء كبير، فلدينا فريق عمل مناسب لك ولفكرتك ولدينا كل المعرفة الكافية لتخصصك، دعنا نبدأ معك رحلتك الرقمية، وندخل اللعبة سويًا، لنواجه تحدياتك بالنيابة عنك.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-tob">
                        <ul class="footer-liks">
                            <li>
                                <p>التنقل داخل الموقع: </p>
                            </li>
                            <li>
                                <a href="#index">الرئيسية</a>
                            </li>
                              <li>
                                <a href="#about">عن الشركة</a>
                            </li>
                              <li>
                                <a href="#our-work">الخدمات</a>
                            </li>
                              <li>
                                <a href="#projects">المشاريع</a>
                            </li>
                               <li>
                                <a href="#testmonails">اراء العلاء</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-tob ">
                        <h5 class="footer-title text-center">يمكنك التواصل معنا عبر وسائل التواصل اﻵتية : </h5>
                        <div class="row" >
                            <div class="col-md-12">
                                <a class="social-icons" target="_blank" href="https://facebook.com/DevestCo">
                                    <i class="fab fa-facebook-f fa-2x"></i>
                                </a>
                                <a class="social-icons" target="_blank" href="https://twitter.com/Devest_co">
                                    <i class="fab fa-twitter fa-3x"></i>
                                </a>
                                <a class="social-icons" target="_blank" href="https://www.instagram.com/devest_co/">
                                  <i class="fab fa-instagram fa-3x"></i>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
        </div>
    </div>
    <p class="text-center">
        جميع الحقوق محفوظه &copy;  Devest
    </p>
</footer>
<script src="{{asset('assests/custom/js/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assests/front/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('assests/front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assests/front/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('assests/front/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assests/front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assests/front/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('assests/front/js/scrollax.min.js')}}"></script>
<script src="{{asset('assests/front/js/all.min.js')}}"></script>
<script src="{{asset('assests/front/js/main.js')}}"></script>
<script src="{{asset('assests/front/js/contact.js')}}"></script>
</body>
</html>
