<?php include 'includes/header.php'; ?>
<div class="container-fluid homehero" style="background: url('assets/images/hero1-indiv-com.jpg'); background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="indivual-com-hero-wrapper">
                    <h1 class="left">Inspiring Careers at Franciscan Ministries</h1>
                </div>
            </div>
        </div>
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
    <div class="row extra-padding-bottom">
        <div class="col-md-8 individual-community-left2">
            <h1>History of Franciscan Village</h1>
            <!-- clone -->
            
            <p class="cloneme">Lernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consec. Lernatur atem sequi nesciunt. Neque porro quisquam est aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione volupt. Lorem ipsum dolors it amet, lorem dolor sit</p>

            <div class="target"></div>

        </div>
        <div class="col-md-4">
            <?php include 'includes/sidebar-nav.php'; ?>
            <?php include 'includes/generic-form.php'; ?>
            <p>&nbsp;</p>
            <a href="#" class="white-button">Request a Brochure <i class="fas fa-angle-right"></i></a>
            <a href="#" class="white-button">View Floor Plans <i class="fas fa-angle-right"></i></a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="default-living-indiv-bg1">
                <div class="default-living-container">
                    <h1>Lorem Ipsum Dolor Sit Amet</h1>
                    <p>Learn More</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="default-living-indiv-bg2">
                <div class="default-living-container">
                    <h1>Lorem Ipsum Dolor Sit Amet</h1>
                    <p>Learn More</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="default-living-indiv-bg3">
                <div class="default-living-container">
                    <h1>Lorem Ipsum Dolor Sit Amet</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/ready-to-learn.php'; ?>

<script type="text/javascript">
$(function() {
       $(".cloneme").clone().insertAfter(".target");
       $(".cloneme").clone().insertAfter(".target");
});
</script>

<!-- Header Form Mobile -->
<?php include 'includes/footer.php'; ?>