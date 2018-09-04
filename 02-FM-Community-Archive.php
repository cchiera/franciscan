<?php include 'includes/header.php'; ?>
<div class="row">
        <hr class="header-hr">
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php include 'includes/breadcrumbs.php'; ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-7 individual-community-left2">
            <h1>Serving Families for Over 70 Years</h1>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consec</p>
            <p>Lernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consec</p>
            <p>Lernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consec</p>
        </div>
        <div class="col-md-5">
            <?php include 'includes/generic-form.php'; ?>
        </div>
    </div>
</div>
<div id="header-form-main-mobile">
    <form method='post' enctype='multipart/form-data'>
        <div class="row center">
            <div class="col-md-12 header-search-box">
                <h3>Lipsum Ipsum Dolor</h3>
                <p>Lorem ipsum dolors it amet, lorem dolor sit</p>
            </div>
        </div>
        <div class="row center">
            <div class="col-md-12 form-group">
                <select class="form-control" aria-required="true" aria-invalid="false">
                    <option value="" selected="selected" class="">Select a Service</option>
                    <option value="0">Selection</option>
                    <option value="1">Selection</option>
                    <option value="2">Selection</option>
                    <option value="3">Selection</option>
                    <option value="4">Selection</option>
                </select>
                <a href="#" class="bluebutton center">Search</a>
            </div>
        </div>
    </form>
</div>
<div class="container-fluid individual-community-gallery-map">
</div>
<div class="container community-archive-main">
    <h2>All communities</h2>
    <div class="row cloneme community-archive">
        <div class="col-md-3">
            <div class="individual-community-circle-tabs-shadow"></div>
        </div>
        <div class="col-md-3">
            <h1>Franciscan Villiage</h1>
            <ul>
                <li class="directions-com-archive">123 Example Address
                    <br>&nbsp;&nbsp;City, State Zip</li>
                <li class="phone-com-archive">(800) 876-5432</li>
            </ul>
        </div>
        <div class="col-md-3 list-of-services">
            <h2>List of Services</h2>
            <ul>
                <li>Independent Living</li>
                <li>Assisted Living</li>
                <li>Memory Care</li>
                <li>Skilled Nursing</li>
                <li>Rehabilitation</li>
            </ul>
        </div>
        <div class="col-md-3 community-archive-extra-padding">
            <a href="#" class="blue-button">View Community <i class="fas fa-angle-right"></i>

</a>
            <br>
            <a href="#" class="white-button">Get Directions <i class="fas fa-angle-right"></i>

</a>
        </div>
    </div>
    <div class="insertAfterjs"></div>
    <p>&nbsp;</p>
</div>
<div class="community-footer-shadow"></div>
<script type="text/javascript">
$(function() {
    $(".cloneme").clone().insertAfter(".insertAfterjs");
    $(".cloneme").clone().insertAfter(".insertAfterjs");
});
</script>
<?php include 'includes/footer.php'; ?>