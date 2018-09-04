<?php include 'includes/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php include 'includes/breadcrumbs.php'; ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 individual-community-left2">
            <h1>History of Franciscan Village</h1>
            <p>Lernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consec. Lernatur atem sequi nesciunt. Neque porro quisquam est aut odit.</p>
            <!-- Start Form -->
            <div class='form-group form-group-individual-location-sub'>
                <form method='post' enctype='multipart/form-data'>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="First Name*" aria-required="true" aria-invalid="false">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Last Name*" aria-required="true" aria-invalid="false">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Phone*" aria-required="true" aria-invalid="false">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Email*" aria-required="true" aria-invalid="false">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="City" aria-required="true" aria-invalid="false">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="State" aria-required="true" aria-invalid="false">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Zip" aria-required="true" aria-invalid="false">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <select class="form-control" aria-required="true" aria-invalid="false">
                                <option value="" selected="selected" class="">From Whom Are You Inquiring?</option>
                                <option value="0">Selection</option>
                                <option value="1">Selection</option>
                                <option value="2">Selection</option>
                                <option value="3">Selection</option>
                                <option value="4">Selection</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Preferred Date: " aria-required="true" aria-invalid="false">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Preferred Time:" aria-required="true" aria-invalid="false">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea class="form-control" rows="5" id="comment"></textarea>
                        </div>
                    </div>
                    <div class="center">
                        <a href="#" class="bluebutton">Contact Us&nbsp;<i class="fas fa-angle-right"></i></a>
                    </div>
                </form>
            </div>
            <!-- form end -->
        </div>
        <div class="col-md-4">
            <?php include 'includes/sidebar-nav.php'; ?>
            <div class="button-wrapper center">
                <a href="#" class="white-button">Request a Brochure <i class="fas fa-angle-right"></i></a>
                <a href="#" class="white-button">View Floor Plans <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(function() {
    $(".cloneme").clone().insertAfter(".target");
    $(".cloneme").clone().insertAfter(".target");
});
</script>
<?php include 'includes/individual-location.php'; ?>
<?php include 'includes/ready-to-learn.php'; ?>
<?php include 'includes/footer.php'; ?>