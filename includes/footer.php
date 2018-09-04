<!-- Footer Start -->
<div class="container-fluid footerfluid">
    <p class="main-footertitle"></p>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row footer-margin-mobile">
                    <div class="col-md-4 center">
                        <p><img class="img-responsive footer-logo center" src="assets/images/Franciscan-Logo.png" alt=""></p>
                        <p class="phone-footer"><a href="tel:(800) 524-6126">1-800-524-6126</a></p>
                        <p>
                            <a href="#" target="_blank"><i class="socialicon fab fa-facebook-f blue-brand"></i></a>
                            <a href="" target="_blank"><i class="socialicon fab fa-pinterest blue-brand"></i></a>
                        </p>
                    </div>
                    <div class="col-md-4 menu-footer1-container">
                        <p class="main-footertitle"><strong>Resources</strong></p>
                        <div class="">
                            <ul class="footermenu">
                                <li class="menu-item"><a href="#">Communities</a></li>
                                <li class="menu-item"><a href="#">About Us</a></li>
                                <li class="menu-item"><a href="#">Philanthropy</a></li>
                                <li class="menu-item"><a href="#">Careers</a></li>
                                <li class="menu-item"><a href="#">News &amp; Events</a></li>
                                <li class="menu-item"><a href="#">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 menu-footer1-container">
                        <p class="main-footertitle"><strong style="font-weight: 900">Senior Care Options</strong></p>
                        <div class="">
                            <ul class="footermenu">
                                <li class="menu-item"><a href="#">Independent Living</a></li>
                                <li class="menu-item"><a href="#">Assisted Living</a></li>
                                <li class="menu-item"><a href="#">Memory Care</a></li>
                                <li class="menu-item"><a href="#">Skilled Nursing</a></li>
                                <li class="menu-item"><a href="#">Rehabilitation</a></li>
                                <li class="menu-item"><a href="#">Hospice</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 footer-form-width">
                <!-- Start Form -->
                <div class='footer-form form-group'>
                    <form method='post' enctype='multipart/form-data'>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="footer-form-title">Lipsum Ipsum Dolor</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 footer-form-size-right">
                                <input type="text" class="form-control" placeholder="First Name*" aria-required="true" aria-invalid="false">
                            </div>
                            <div class="col-md-6 footer-form-size-left">
                                <input type="text" class="form-control" placeholder="Last Name*" aria-required="true" aria-invalid="false">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 footer-form-size-right">
                                <input type="text" class="form-control" placeholder="Phone*" aria-required="true" aria-invalid="false">
                            </div>
                            <div class="col-md-6 footer-form-size-left">
                                <input type="text" class="form-control" placeholder="Email*" aria-required="true" aria-invalid="false">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 footer-form-size-center">
                                <select class="form-control" aria-required="true" aria-invalid="false">
                                    <option value="" selected="selected" class="">Choose a Community or Service?</option>
                                    <option value="0">Selection</option>
                                    <option value="1">Selection</option>
                                    <option value="2">Selection</option>
                                    <option value="3">Selection</option>
                                    <option value="4">Selection</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 footer-form-size-center">
                                <textarea class="form-control" rows="5" id="comment" placeholder="Questions/Comments"></textarea>
                            </div>
                        </div>
                        <div class="center">
                            <a href="#" class="bluebutton-2">Lorem Ipsum</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer Bottom -->
</div>
<div class="container-fluid footerbottom">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p>11500 Theresa Drive Lemont, IL 60439 | 800-524-6126 | email.address@.com </p>
                <p>&copy; Copyright 2018 | Privacy Policy | Disclaimer | Equal Housing | Site Map
                </p>
            </div>
            <div class="col-md-2">
                <img class="accessibility-icon" src="assets/images/accessibility-icon.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Show/Hide Mobile Nav -->
<script type="text/javascript" defer src="https://walnutplacelcs.com/wp-content/cache/autoptimize/js/autoptimize_877849977cf245861d3bc1b3ebc09f69.js"></script>
<!-- End Footer Bottom -->
<script>
$(function() {


    //declare function 
    $(".nav-tabs a").click(function() {
        $(this).tab('show');
    });
    $('.nav-tabs a').on('shown.bs.tab', function(event) {
        var x = $(event.target).text(); // active tab
        var y = $(event.relatedTarget).text(); // previous tab
        $(".act span").text(x);
        $(".prev span").text(y);
    });
    console.log('testing jquery');
});
</script>
</body>
</html>